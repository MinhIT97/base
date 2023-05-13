<?php

namespace Modules\Company\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Core\Policies\BasePolicy;
use Tymon\JWTAuth\Facades\JWTAuth;

class CompanyPolicy extends BasePolicy
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

    public function companyList()
    {
        $user = $this->user;

        return $user->hasPermission('show-list-company');
    }
    public function store()
    {
        $user = $this->user;
        return $user->hasPermission('create-company');
    }
    public function show($user, $company)
    {
        return $user->hasPermission('show-company');
        return true;
    }
    public function update($user, $company)
    {
        return $user->hasPermission('update-company');
        return true;
    }
    public function destroy($user, $company)
    {
        return $user->hasPermission('delete-company');
        return true;
    }
}
