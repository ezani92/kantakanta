<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'product_brand' => 'required|string|max:255',
            'product_model' => 'required|string|max:255',
            'product_type' => 'required|string|max:255',
            'product_design' => 'required|string|max:255',
            'product_backup_iol' => 'required|string|max:255',
            'product_viscoeastic' => 'required|string|max:255',
            'product_price' => 'required'
        ];
    }
}
