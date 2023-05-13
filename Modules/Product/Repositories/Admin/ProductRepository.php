<?php

namespace Modules\Product\Repositories\Admin;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 */
interface ProductRepository extends RepositoryInterface
{
    function getEntity();
}
