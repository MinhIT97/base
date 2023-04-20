<?php

namespace Modules\Authorization\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 */
interface PermissionRepository extends RepositoryInterface
{
    public function attachRoles($role, $roleIds);
    public function detachRoles($role, $roleIds);
    public function syncRoles($role, $roleIds);
}
