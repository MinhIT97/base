<?php

namespace Modules\Admin\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 */
interface AdminRepository extends RepositoryInterface
{
    public function getEntity();
}
