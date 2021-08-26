<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Address;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $categories= [];
        $products= [];
        $carts= [];
        if(Auth::user()->type ==='User'){
            $categories = Category::with('children','parent')->get();
            $products= Product::with('gallery','stock')->get();
            $carts= Cart::with('products','gallery')->where([['status','=','1'],['user_id','=',Auth::user()->id]])->get();
            //dd(json_decode(json_encode($carts)));
        }
        return view('dashboard.dashboard', compact( 'categories','products','carts'));
    }
    public function gallery(){
        return view('user.product.gallery');
    }

    public function placeorder(StoreOrderRequest $request){
        //dd($request->post());
        $validated= $request->validated();
        $order= new Order;
        $address= new Address;
        $order->order_id= uniqid("OD".bin2hex(rand(5,100)));
        $order->user_id= Auth::user()->id;
        $order->cart_id= $request->cart;
        $address->userid= Auth::user()->id;
        $address->shipping_address= $request->address;
        $address->shipping_state= $request->state;
        $address->shipping_city= $request->district;
        $address->shipping_pincode= $request->pincode;
        $order->payment_method= $request->payment_method;
        $order->order_date= date('Y-m-d H:i:s');
        $order->timestamps= date('Y-m-d H:i:s');
        $address->timestamps= date('Y-m-d H:i:s');
        if($address->save()){
            $order->address_id=$address->id;
            $order->order_status=1;
            if($order->save()){
                foreach($request->cart as $cart_id){
                    $cart = Cart::find($cart_id);
                    $cart->status= 0;
                    $cart->update();
                }
                return redirect()->route('dashboard')->with('success', 'Order placed successfully');
            }
        }
        return redirect()->back()->with('error', 'Order Can not be placed');

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
        return response()->json(array('message'=>'Added to Cart'),200);
    }
    public function productdetail(){
        return view ('user.product.detail');
    }

    public function checkout($id){

        $carts= Cart::with('products','gallery')->where([['status','=','1'],['user_id','=',$id]])->get();
        return view ('user.product.checkout',compact('carts'));
    }
}
