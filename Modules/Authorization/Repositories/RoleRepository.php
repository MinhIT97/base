<?php

namespace Modules\Authorization\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 */
interface RoleRepository extends RepositoryInterface
{
    public function getEntity();
}
