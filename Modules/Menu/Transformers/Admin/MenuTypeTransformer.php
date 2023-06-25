<?php

namespace Modules\Menu\Transformers\Admin;

use League\Fractal\TransformerAbstract;

class MenuTypeTransformer extends TransformerAbstract
{
    protected $availableIncludes = [];

    public function __construct($includes = [])
    {
        $this->setDefaultIncludes($includes);
    }

    public function transform($model)
    {
        return [
            'id'         => (int) $model->id,

            'name'       => $model->name,
            'status'     => $model->status,

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];
    }
}
