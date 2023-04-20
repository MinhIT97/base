<?php

namespace Modules\Company\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Core\Policies\BasePolicy;

class CompanyPolicy extends BasePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function companyList()
    {
        return true;
    }
    public function store()
    {
        return true;
    }
    public function show($user, $company)
    {
        return true;
    }
    public function update($user, $company)
    {
        return true;
    }
    public function destroy($user, $company)
    {
        return true;
    }
}
