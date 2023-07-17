<?php

namespace Modules\Category\Transformers\Admin;

use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
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
            'slug'       => $model->slug,
            'type'       => $model->type,
            'status'     => (int) $model->status,
            'hot'        => (int) $model->hot,
            'thumbnail'  => $model->name,
            'parent_id'  => (int) $model->parent_id,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];
    }
}
