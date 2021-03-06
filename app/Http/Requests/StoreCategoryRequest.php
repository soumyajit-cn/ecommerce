<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
    public function rules()
    {
        return [
            'parent_category'=> 'required|integer|',
            'category_name' => 'required|max:255',
            'category_desc' => 'required|string',
        ];
    }
    public function messages(){
        return [
            'parent_category.required' => 'Please Select a Category or Select Parent if its a Category itself',
            'category_name.required' => 'Please enter a Category Name',
            'category_desc.required' => 'Please Provide a Description',
        ];
    }
}
