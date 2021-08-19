<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;
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

    public function addtocart(Request $request){
        //dd($request->post());
        $cart = new Cart;
        $cart->user_id= Auth::user()->id;
        $cart->product_id= $request->post('product_id');
        $cart->attribute= $request->post('attribute');
        $cart->login_status= 'Y';
        $cart->status= 1;
        $cart->created_at= date('Y-m-d H:i:s');
        $cart->updated_at= date('Y-m-d H:i:s');
        $cart->save();
        //$data= unserialize($request->post('data'));
        return response()->json(array('message'=>'Added to Cart'),200);
    }
    public function productdetail(){
        return view ('user.product.detail');
    }
}
