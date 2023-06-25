<?php

namespace Modules\Menu\Transformers\Admin;

use League\Fractal\TransformerAbstract;

class MenuTransformer extends TransformerAbstract
{
    protected $availableIncludes = [];

    public function __construct($includes = [])
    {
        $this->setDefaultIncludes($includes);
    }

    public function transform($model)
    {
        return [
            'id'           => (int) $model->id,
            'name'         => $model->name,
            'type_menu_id' => (int) $model->type_menu_id,
            'created_at'   => $model->created_at,
            'updated_at'   => $model->updated_at,
        ];
    }
}
