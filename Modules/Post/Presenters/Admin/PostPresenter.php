<?php

namespace Modules\Post\Presenters\Admin;

use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CompanyPresenter.
 *
 * @package namespace App\Presenters;
 */
class PostPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PostTransformer();
    }
}
