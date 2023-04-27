<?php

namespace Modules\Authorization\Policies\Role;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Core\Policies\BasePolicy;
use Tymon\JWTAuth\Facades\JWTAuth;

class RolePolicy extends BasePolicy
{
    use HandlesAuthorization;
    protected $user;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function roleList()
    {
        $user = $this->user;
        return $user->hasPermission('show-list-role');
    }
    public function store()
    {
        $user = $this->user;
        return $user->hasPermission('create-role');
    }
    public function show($user, $company)
    {
        return $user->hasPermission('show-role');
        return true;
    }
    public function update($user, $company)
    {
        return $user->hasPermission('update-role');
        return true;
    }
    public function destroy($user, $company)
    {
        return $user->hasPermission('delete-role');
        return true;
    }

    public function assign()
    {
        $user = $this->user;
        return $user->hasPermission('assign-permissions');
    }
}
