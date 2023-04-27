<?php

namespace Modules\User\Transformers;

use League\Fractal\TransformerAbstract;
use Modules\Authorization\Transformers\RoleTransformer;

class UserTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['roles'];

    public function __construct($includes = [])
    {
        $this->setDefaultIncludes($includes);
    }

    public function transform($model)
    {
        return [
            'id'                => (int) $model->id,
            'username'          => $model->username,
            'email'             => $model->email,
            'phone_number'      => $model->phone_number,
            'address'           => $model->address,
            'first_name'        => $model->first_name,
            'last_name'         => $model->last_name,
            'avatar'            => $model->avatar,
            'gender'            => $model->gender,
            'birth'             => $model->birth,
            'status'            => (int) $model->status,
            'email_verified_at' => $model->email_verified_at,
            'email_verified'    => $model->email_verified,

            /* place your other model properties here */

            'created_at'        => $model->created_at,
            'updated_at'        => $model->updated_at,
        ];
    }


    public function includeRoles($model)
    {
        $roles = $model->roles;
        if ($roles) {
            return $this->collection($roles, new RoleTransformer());
        }
    }
}
