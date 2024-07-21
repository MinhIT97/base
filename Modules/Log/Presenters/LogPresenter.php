<?php

namespace Modules\Log\Presenters;

use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CompanyPresenter.
 *
 * @package namespace App\Presenters;
 */
class LogPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new LogTransformer();
    }
}
