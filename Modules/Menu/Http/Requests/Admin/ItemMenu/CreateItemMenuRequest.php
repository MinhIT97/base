<?php

namespace Modules\Menu\Http\Requests\Admin\ItemMenu;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Menu\Rules\ValidateMenuExitsInCompany;
use Modules\Menu\Rules\ValidateMenuItemExitsInCompany;

class CreateItemMenuRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'menu_id'   => ['required', 'exists:menus,id', new ValidateMenuExitsInCompany()],
            'label'     => ['required', 'string', 'min:3', 'max:255'],
            'link'      => ['nullable', 'string', 'min:3', 'max:255'],
            'icon'      => ['nullable', 'string', 'min:3', 'max:255'],
            'order_by'  => ['nullable', 'integer', 'max:1000'],
            'parent_id' => ['nullable', 'exists:item_menus,id', new ValidateMenuItemExitsInCompany()],
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
