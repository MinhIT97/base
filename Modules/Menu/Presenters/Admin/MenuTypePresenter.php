<?php

namespace Modules\Menu\Presenters\Admin;

use Modules\Menu\Transformers\Admin\MenuTypeTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CompanyPresenter.
 *
 * @package namespace App\Presenters;
 */
class MenuTypePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MenuTypeTransformer();
    }
}
