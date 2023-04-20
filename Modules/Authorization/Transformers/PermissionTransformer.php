<?php

namespace Modules\Authorization\Transformers;

use League\Fractal\TransformerAbstract;

class PermissionTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['roles'];

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
            'description' => $model->description,
            'model'       => $model->model,
            'created_at'  => $model->created_at,
            'updated_at'  => $model->updated_at,
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
