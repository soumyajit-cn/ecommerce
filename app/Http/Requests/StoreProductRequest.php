<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()    {
        return [
            'category'=> 'required|integer|exists:categories,id',
            'product_name' => 'required|max:255',
            'product_company' => 'required|max:255',
            'product_description' => 'required|string',
            'keywords' => 'required|string',
            'product_price_before_discount' => 'required|integer|min: 1|gte:product_price',
            'product_price' => 'required|integer|min:1|lte:product_price_before_discount',
            'order_limit' => 'required|integer|max:10|min:1',
            'front_image' => 'required|mimes:jpg,png|size:2048',
            'back_image' => 'required|mimes:jpg,png|',
        ];
    }
    public function messages(){
        return [
            'category.required' => 'Please Select a Category',
            'category.exists' => 'Category Does not exist',
            'product_name.required' => 'Please enter a product Name',
            'product_desc.required' => 'Please Provide a Description for product',
        ];
    }
}
