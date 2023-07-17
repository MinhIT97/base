<?php

namespace Modules\Category\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Category\Entities\Category;
use Modules\Category\Policies\CategoryPolicy;

class PolicyProvider extends ServiceProvider
{

    protected $policies = [
        Category::class => CategoryPolicy::class,
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
