<?php

namespace Modules\Menu\Transformers\Admin;

use League\Fractal\TransformerAbstract;

class ItemMenuTransformer extends TransformerAbstract
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

            'menu_id'    => (int) $model->id,
            'label'      => $model->label,
            'link'       => $model->link,
            'icon'       => $model->icon,
            'order_by'   => (int) $model->order_by,
            'status'     => (int) $model->status,
            'parent_id'  => (int) $model->parent_id,

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];
    }
}
