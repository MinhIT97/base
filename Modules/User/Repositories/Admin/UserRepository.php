<?php

namespace Modules\User\Repositories\Admin;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 */
interface UserRepository extends RepositoryInterface
{
    public function verifyEmail($user);
    public function attachRoles($role, $roleIds);
    public function detachRoles($role, $roleIds);
    public function syncRoles($role, $roleIds);
}
