<?php

namespace Modules\Menu\Repositories\Admin;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 */
interface MenuRepository extends RepositoryInterface
{
    public function getEntity();
}
