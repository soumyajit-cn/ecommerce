<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $categories= [];
        $products= [];
        if(Auth::user()->type ==='User'){
            $categories = Category::with('children','parent')->get();
            $products= Product::with('gallery','stock')->get();
            //dd($products);
        }
        return view('dashboard.dashboard', compact( 'categories','products'));
    }

    public function getproduct(Request $request){
        //dd($request->post());
        if(!empty($request->post())){
            $product_id= $request->post('product_id');
            $product= Product::with('gallery')->find($product_id);
            return response()->json(!empty($product) ? $product : []) ;
        }
    }
}
