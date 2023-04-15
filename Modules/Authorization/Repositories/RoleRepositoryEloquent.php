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

    public function attachPermission($role, $permissionIds)
    {
        $role->permissions()->attach($permissionIds);

        return $role;
    }
    public function detachPermission($role, $permissionIds)
    {
        $role->permissions()->detach($permissionIds);

        return $role;
    }
    public function syncPermission($role, $permissionIds)
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
