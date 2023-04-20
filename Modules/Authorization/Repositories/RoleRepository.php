<?php

namespace Modules\Authorization\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 */
interface RoleRepository extends RepositoryInterface
{
    public function getEntity();
    public function attachPermissions($role, $permissionIds);
    public function detachPermissions($role, $permissionIds);
    public function syncPermissions($role, $permissionIds);
}
