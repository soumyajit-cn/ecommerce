<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            //'category'=> 'required|integer|exists:categories,id',
            'product_name' => 'required|max:255',
            'product_company' => 'required|max:255',
            'keywords' => 'required|string',
            'product_description' => 'required|string',
            'product_price_before_discount' => 'required|integer|min: 1|gte:product_price',
            'product_price' => 'required|integer|min:1|lte:product_price_before_discount',
            'order_limit' => 'required|integer|max:10|min:1',
            'frontimage' => 'mimes:jpg,png|max:2048',
            'backimage' => 'mimes:jpg,png|max:2048',
            'thumbnail' => 'mimes:jpg,png|max:70',
            'optional_image_1' => 'sometimes|mimes:jpg,png|max:2048',
            'optional_image_2' => 'sometimes|mimes:jpg,png|max:2048',
            'optional_image_3' => 'sometimes|mimes:jpg,png|max:2048',
        ];
    }
    public function messages(){
        return [
            // 'category.required' => 'Please Select a Category',
            // 'category.exists' => 'Category Does not exist',
            'product_name.required' => 'Please enter a Product Name',
            'keywords.required' => 'Please enter some Keywords for searching recommendation',
            'product_description.required' => 'Please Give Some Description',
            'product_price_before_discount.required' => 'Please Enter the MRP',
            'product_price_before_discount.gte' => 'MRP must have to be higher or same of selling price',
            'product_price_before_discount.min' => 'Minimum Price must be atleast 1 ₹',
            'product_price.min' => 'Minimum Price must be atleast 1 ₹',
            'product_price.required' => 'Please Enter the Selling Price',
            'product_price.lte' => 'Price must have to be less or same of Main price',
            'order_limit.required' => 'Please mention the order limit',
        ];
    }
    public function attributes(){
        return
        [
            'backimage'=> 'Back of Product',
            'frontimage'=> 'Front of Product',
            'thumbnail'=> 'Display Image',
            'optional_image_1'=>'First Optional Image',
            'optional_image_2'=>'Second Optional Image',
            'optional_image_3'=>'Third Optional Image',
        ];
    }
}
