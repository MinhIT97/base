<?php

namespace Modules\Menu\Rules;

use Illuminate\Contracts\Validation\Rule;
use Modules\Menu\Entities\Menu;

class ValidateMenuExitsInCompany implements Rule
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

        return Menu::where('id', $value)->where('company_id', $companyId)->first();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is invalid.';
    }
}
