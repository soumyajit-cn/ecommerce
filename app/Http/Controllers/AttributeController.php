<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Http\Requests\StoreAttributeRequest;

class AttributeController extends Controller
{
    public function index(){
        $products= Product::with('categories')->get();
        return view('admin.attributes.list',compact('products'));
    }
    public function add($id){
        $products= Product::with('categories')->find($id);
        return view('admin.attributes.add',compact('products'));
    }
    public function store(StoreAttributeRequest $request,$id){
        dd($request->post());
        $product= Product::find($id);
        $array=[];
        foreach(json_decode(json_encode($request->attribute)) as $attrval){
            if(!empty($attrval->key)){
                $array[$attrval->key]=array_unique(array_filter($attrval->value));
            }
        }
        dd($array);
        $product->attribute=  $array;
        $product->update();
    }
}
