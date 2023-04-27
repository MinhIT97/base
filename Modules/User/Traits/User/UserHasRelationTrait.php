<?php

namespace Modules\User\Traits\User;

use Illuminate\Support\Str;
use Modules\Authorization\Entities\Permission;
use Modules\Authorization\Entities\Role;

trait UserHasRelationTrait
{
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    /**
     * Check if the user has a permission.
     *
     * @param int|string $permission
     * @return bool
     */
    public function hasPermission($permission)
    {
        return $this->getPermissions()->contains(function ($value, $key) use ($permission) {
            return $permission == $value->id || Str::is($permission, $value->slug);
        });
    }

    /**
     * Get all permissions as collection.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPermissions()
    {
        return $this->rolePermissions();
    }

    /**
     * Get all permissions from roles.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function rolePermissions()
    {

        $roleId = $this->getRoles()->pluck('id');

        return Permission::query()->whereHas('roles', function ($query) use ($roleId) {
            $query->whereIn('roles.id', $roleId);
        })->get();
    }

    /**
     * Get all roles as collection.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRoles()
    {
        return (!$this->roles) ? $this->roles = $this->roles()->get() : $this->roles;
    }

    /**
     * Get role level of a user.
     *
     * @return int
     */
    public function level()
    {
        return ($role = $this->getRoles()->sortByDesc('level')->first()) ? $role->level : 0;
    }

}
