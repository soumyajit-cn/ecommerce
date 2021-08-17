<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->type ==='User'){
            $categories = Category::with('children','parent')->get();
            //dd($categories);
            // dd(json_decode(json_encode($categories)));
            // if(isset($categories) && !empty($categories)){
            //     foreach ($categories as $category) {
            //         if($category->parent_id == 0){
            //             $newcategory['parent'][$category->id]['name']=$category->category_name;
            //         }
            //     }
            //     // dd($newcategory);
            // }
        }
        return view('dashboard.dashboard',compact('categories'));
    }
}
