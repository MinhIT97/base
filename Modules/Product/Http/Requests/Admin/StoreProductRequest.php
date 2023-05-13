<?php

namespace Modules\Product\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"           => ["required", "string", "min:5", "max:255"],
            "quantity"       => ["required", "alpha_num"],
            "price"          => ["required", "alpha_num"],
            "original_price" => ["required", "alpha_num"],
            "description"    => ["nullable", "string", "min:10", "max:500"],
            "is_hot"         => ["nullable", "in:0,1"],
            "published_date" => ["required", "date", "date_format:Y-m-d H:i:s"],
            "sku"            => ["nullable", "string", "min:8"],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
