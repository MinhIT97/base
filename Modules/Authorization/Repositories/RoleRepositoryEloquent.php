<?php

namespace Modules\Authorization\Repositories;

use Modules\Authorization\Entities\Role;
use Modules\Authorization\Repositories\RoleRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class AccountantRepositoryEloquent.
 */
class RoleRepositoryEloquent extends BaseRepository implements RoleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Role::class;
    }

    public function getEntity()
    {
        return $this->model;
    }

    public function attachPermissions($role, $permissionIds)
    {
        $permissionIds = array_unique(array_diff($permissionIds, $role->permissions->pluck('id')->all()));
        $role->permissions()->attach($permissionIds);

        return $role;
    }
    public function detachPermissions($role, $permissionIds)
    {
        $role->permissions()->detach($permissionIds);

        return $role;
    }
    public function syncPermissions($role, $permissionIds)
    {
        $role->permissions()->sync($permissionIds);

        return $role;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
