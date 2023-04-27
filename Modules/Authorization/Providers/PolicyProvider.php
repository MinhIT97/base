<?php

namespace Modules\Authorization\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Authorization\Entities\Permission;
use Modules\Authorization\Entities\Role;
use Modules\Authorization\Policies\Permission\PermissionPolicy;
use Modules\Authorization\Policies\Role\RolePolicy;

class PolicyProvider extends ServiceProvider
{
    protected $policies = [
        Role::class       => RolePolicy::class,
        Permission::class => PermissionPolicy::class,
    ];

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->registerPolicies();

        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
