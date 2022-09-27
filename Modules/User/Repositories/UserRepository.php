<?php

namespace Modules\User\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 */
interface UserRepository extends RepositoryInterface
{
    public function login();
}
