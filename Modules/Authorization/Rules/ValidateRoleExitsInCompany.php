<?php

namespace Modules\Authorization\Rules;

use Illuminate\Contracts\Validation\Rule;
use Modules\Authorization\Entities\Role;

class ValidateRoleExitsInCompany implements Rule
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

        return Role::whereIn('id', $value)->where('company_id', $companyId)->count() === count($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'One or more roles are invalid.';
    }
}
