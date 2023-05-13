<?php

namespace Modules\Product\Transformers\Admin;

use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{
    protected $availableIncludes = [];

    public function __construct($includes = [])
    {
        $this->setDefaultIncludes($includes);
    }

    public function transform($model)
    {
        return [
            'id'             => (int) $model->id,
            'name'           => $model->name,
            'slug'           => $model->slug,
            'quantity'       => $model->quantity,
            'price'          => $model->price,
            'original_price' => $model->original_price,
            'description'    => $model->description,
            'is_hot'         => $model->is_hot,
            'published_date' => $model->published_date,
            'sku'            => $model->sku,

            /* place your other model properties here */

            'created_at'     => $model->created_at,
            'updated_at'     => $model->updated_at,
        ];
    }
}
