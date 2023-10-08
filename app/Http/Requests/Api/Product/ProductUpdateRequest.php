<?php

namespace App\Http\Requests\Api\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_vi' => 'required',
            'name_en' => 'required',
            'alias' => 'required',
            'supplier_id' => 'required',
            'category_id' => 'required',
            'summary' => 'required',
            'product_size' => 'required',
            'farming_area' => 'required',
            'packing_standard' => 'required'
        ];
    }
}
