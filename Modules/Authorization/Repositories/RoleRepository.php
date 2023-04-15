<?php

namespace Modules\Authorization\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 */
interface RoleRepository extends RepositoryInterface
{
    public function getEntity();
    public function attachPermission($role, $permissionIds);
    public function detachPermission($role, $permissionIds);
    public function syncPermission($role, $permissionIds);
}
