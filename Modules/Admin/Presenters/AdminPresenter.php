<?php

namespace Modules\Admin\Presenters;

use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CompanyPresenter.
 *
 * @package namespace App\Presenters;
 */
class AdminPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AdminTransformer();
    }
}
