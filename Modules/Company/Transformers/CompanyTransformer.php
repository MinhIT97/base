<?php

namespace Modules\Company\Transformers;

use League\Fractal\TransformerAbstract;
use Modules\Company\Entities\Company;

/**
 * Class CompanyTransformer.
 *
 * @package namespace App\Transformers;
 */
class CompanyTransformer extends TransformerAbstract
{
    /**
     * Transform the Company entity.
     *
     * @param \App\Entities\Company $model
     *
     * @return array
     */
    public function transform(Company $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];
    }
}
