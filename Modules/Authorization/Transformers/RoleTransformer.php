<?php

namespace Modules\Authorization\Transformers;

use League\Fractal\TransformerAbstract;
use Modules\Company\Transformers\CompanyTransformer;
use Modules\User\Transformers\UserTransformer;

class RoleTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['user', 'company','permissions'];

    public function __construct($includes = [])
    {
        $this->setDefaultIncludes($includes);
    }

    public function transform($model)
    {
        return [
            'id'          => (int) $model->id,
            'name'        => $model->name,
            'slug'        => $model->slug,
            'status'      => (int) $model->status,
            'description' => $model->description,
            'user_id'     => $model->user_id,
            'company_id'  => $model->company_id,
            'level'       => $model->level,
            'created_at'  => $model->created_at,
            'updated_at'  => $model->updated_at,
        ];
    }

    public function includeUser($model)
    {
        $user = $model->user;
        if ($user) {
            return $this->item($user, new UserTransformer());
        }
    }
    public function includeCompany($model)
    {
        $company = $model->company;
        if ($company) {
            return $this->item($company, new CompanyTransformer());
        }
    }
    public function includePermissions($model)
    {
        $permissions = $model->permissions;
        if ($permissions) {
            return $this->collection($permissions, new PermissionTransformer());
        }
    }

}
