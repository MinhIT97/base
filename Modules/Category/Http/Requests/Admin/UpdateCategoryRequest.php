<?php

namespace Modules\Category\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => ["required", "string", "min:5", "max:255"],
            'type'      => ["required", "in:products,posts"],
            'hot'       => ["required", "integer"],
            'thumbnail' => ["nullable", "string", "max:255"],
            'parent_id' => ["nullable", "exists:categories,id"],
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
