<?php

namespace Modules\Authorization\Repositories;

use Modules\Authorization\Entities\Permission;
use Modules\Authorization\Repositories\PermissionRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class AccountantRepositoryEloquent.
 */
class PermissionRepositoryEloquent extends BaseRepository implements PermissionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Permission::class;
    }

    public function getEntity()
    {
        return $this->model;
    }

    public function attachRoles($permission, $roleIds)
    {
        $roleIds = array_unique(array_diff($roleIds, $permission->roles->pluck('id')->all()));
        $permission->roles()->attach($roleIds);
        return $permission;
    }
    public function detachRoles($permission, $roleIds)
    {
        $permission->roles()->detach($roleIds);

        return $permission;
    }
    public function syncRoles($permission, $roleIds)
    {
        $permission->roles()->sync($roleIds);

        return $permission;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
