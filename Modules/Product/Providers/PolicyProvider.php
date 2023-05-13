<?php

namespace Modules\Product\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Product\Entities\Product;
use Modules\Product\Policies\ProductPolicy;

class PolicyProvider extends ServiceProvider
{

    protected $policies = [
        Product::class => ProductPolicy::class,
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
