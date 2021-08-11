<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $products = Product::with('categories')->latest()->paginate(5);
        //dd(json_decode(json_encode($products)));
        return view('admin.product.list', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::select('id','category_name')->get();
        return view('admin.product.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request){
        //dd($request->validated());
        $validated= $request->validated();
        $product= new Product;
        $product->product_name= $request->product_name;
        $product->product_company= $request->product_company;
        $product->keywords= json_encode($request->keywords);
        $product->product_description= $request->product_description;
        $product->product_price_before_discount= $request->product_price_before_discount;
        $product->product_price= $request->product_price;
        $product->order_limit= $request->order_limit;
        $product->in_stock= 0;
        $product->created_at= date('Y-m-d H:i:s');
        $product->updated_at= date('Y-m-d H:i:s');

        if($request->file()) {
            $front = time().'_'.$request->frontimage->getClientOriginalName();
            $back = time().'_'.$request->backimage->getClientOriginalName();
            $thumbnail = time().'_'.$request->thumbnail->getClientOriginalName();
            $filePath1 = $request->file('frontimage')->storeAs('uploads', $front, 'public');
            $filePath2 = $request->file('backimage')->storeAs('uploads', $back, 'public');
            $filePath3 = $request->file('thumbnail')->storeAs('uploads', $thumbnail, 'public');
            if($request->optional_image_1){
                $optional_image_1 = time().'_'.$request->optional_image_1->getClientOriginalName();
                $optional_image_1_Path = $request->file('optional_image_1')->storeAs('uploads', $optional_image_1, 'public');
            }
            if($request->optional_image_2){
                $optional_image_2 = time().'_'.$request->optional_image_2->getClientOriginalName();
                $optional_image_2_Path = $request->file('optional_image_2')->storeAs('uploads', $optional_image_2, 'public');
            }
            if($request->optional_image_3){
                $optional_image_3 = time().'_'.$request->optional_image_3->getClientOriginalName();
                $optional_image_3_Path = $request->file('optional_image_3')->storeAs('uploads', $optional_image_3, 'public');
            }
            if( $filePath1 && $filePath2 && $filePath3){
                $product->save();
                $gallery= new Gallery;
                $gallery->product_id= $product->id;
                $gallery->color= 'test';
                $gallery->frontimage= $front;
                $gallery->backimage= $back;
                $gallery->thumbnail= $thumbnail;
                $gallery->optional_image_1= !empty($optional_image_1) ? $optional_image_1 : '';
                $gallery->optional_image_2= !empty($optional_image_2) ? $optional_image_2 : '';
                $gallery->optional_image_3= !empty($optional_image_3) ? $optional_image_3 : '';
                $gallery->created_at= date('Y-m-d H:i:s');
                $gallery->updated_at= date('Y-m-d H:i:s');
                $gallery->save();
                //$product->save();
            }
        }
        if($gallery->save() && $product->save()){
            $catproduct= new CategoryProduct;
            $catproduct->category_id= $request->category;
            $catproduct->product_id= $product->id;
            $catproduct->save();
        }
        return redirect()->route('products.index')
            ->with('success', 'Product added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories= Category::select('id','category_name')->get();
        $product= Product::with('categories')->find($id);
        return view('admin.product.edit',compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $validated= $request->validated();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('categories.index')->with('success', 'Product deleted successfully');
    }
}
