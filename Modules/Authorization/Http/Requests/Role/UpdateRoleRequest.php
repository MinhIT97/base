<?php

namespace Modules\Authorization\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Tymon\JWTAuth\Facades\JWTAuth;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $user       = JWTAuth::parseToken()->authenticate();
        $company_id = $user->company_id;
        $id         = request('id');

        return [
            "name"        => ['required', Rule::unique('roles')->where(function ($query) use ($company_id, $id) {
                return $query->where('company_id', $company_id)->where('id', '<>', $id);
            })],
            "description" => ['required', 'max:1500'],
            "status"      => ['nullable', 'in:0,1'],
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
