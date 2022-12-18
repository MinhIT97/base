<?php

namespace Modules\User\Repositories\User;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 */
interface UserRepository extends RepositoryInterface
{
    public function checkExitUser($email);
}
