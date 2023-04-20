<?php

namespace Modules\Company\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Company\Entities\Company;
use Modules\Company\Policies\CompanyPolicy;

class PolicyProvider extends ServiceProvider
{

    protected $policies = [
        Company::class => CompanyPolicy::class,
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
