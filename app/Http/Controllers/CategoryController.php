<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
//use Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Category::with('products')->get());
        // \Log::debug(\App\Models\Category::limit(1)->toRawSql());
        //$categories = Category::latest()->paginate(5);
       $categories = Category::with('parent')->whereHas('parent', function($q){$q->orWhere('parent_id','=','0');})
        ->get();
        //dd($categories);
        return view('admin.category.list', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id','category_name')->get();
        return view('admin.category.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $validated = $request->validated();
        $category = new Category;
        $category->parent_id= $request->parent_category;
        $category->category_description = $request->category_desc;
        $category->category_name = $request->category_name;
        // $category->status = 1;
        $category->created_at = date('Y-m-d H:i:s');
        $category->updated_at = date('Y-m-d H:i:s');
        $category->save();
        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories= Category::select('id','category_name')->get();
        $categorydata= Category::find($id);
        //dd($categorydata);
        return view('admin.category.edit',compact('categories','categorydata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request,Category $category)
    {
        $validated = $request->validated();
        //$categorydata= Category::find($request->id);
        $category->parent_id= $request->parent_category;
        $category->category_name= $request->category_name;
        $category->category_description = $request->category_desc;
        $category->updated_at = date('Y-m-d H:i:s');
        $category->update();
        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully');
    }
}
