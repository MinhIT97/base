<?php

namespace Modules\Authorization\Policies\Permission;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Core\Policies\BasePolicy;
use Tymon\JWTAuth\Facades\JWTAuth;

class PermissionPolicy extends BasePolicy
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

    public function permissionList()
    {
        $user = $this->user;
        return $user->hasPermission('show-list-permission');
    }

    public function show($user, $company)
    {
        return $user->hasPermission('show-permission');
        return true;
    }
}
