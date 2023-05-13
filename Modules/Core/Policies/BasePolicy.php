<?php

namespace Modules\Core\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class BasePolicy
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

    public function before($user)
    {
        // if (!config('app.permissions_enabled', false)) {
        //     return false;
        // }
        return true;
    }
}
