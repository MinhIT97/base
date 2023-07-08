<?php

namespace Modules\Menu\Rules;

use Illuminate\Contracts\Validation\Rule;
use Modules\Menu\Entities\ItemMenu;

class ValidateMenuItemExitsInCompany implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        $user = request()->user();
        if (!$user) {
            return false;
        }

        $companyId = $user->company_id;

        $itemMenus = ItemMenu::find($value);

        if (!$itemMenus) {
            return false;
        }

        if (!$itemMenus->menu) {
            return false;
        }

        return $itemMenus->menu->company_id == $companyId;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {

        return "The :attribute is invalid.";
    }
}
