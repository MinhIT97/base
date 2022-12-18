<?php

namespace Modules\User\Repositories\Admin;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 */
interface UserRepository extends RepositoryInterface
{
    public function verifyEmail($user);
}
