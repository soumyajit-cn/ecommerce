<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'address'=> 'required|array|min:1|max:100',
            'address.name'=> 'required|string|min:2',
            'address.contact'=> 'required|numeric|gte:6000000000|lte:9999999999',
            'address.address_line_1'=> 'required|string|min:10|max:100',
            'address.landmark'=> 'sometimes|string|min:5|max:100',
            'state'=> 'required|string|min:4',
            'district'=> 'required|string|min:4',
            'pincode'=> 'required|numeric|gte:100000|lte:999999',
            'payment_method'=> 'required|in:COD',
            //'address.*.name'=> 'required|string|min:5'
        ];
    }
    public function attributes(){
        return
        [
            'address.name'=> 'Customer Name',
            'address.contact'=> 'Contact Number',
            'address.address_line_1'=> 'Address',
            'address.landmark'=> 'Landmark',
            'district'=> 'District(Zila)',
            'state'=> 'State',
            'pincode'=> 'Pincode(Postal Code)',
        ];
    }
}
