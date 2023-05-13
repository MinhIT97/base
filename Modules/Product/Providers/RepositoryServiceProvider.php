<?php

namespace Modules\Product\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Product\Repositories\Admin\ProductRepository;
use Modules\Product\Repositories\Admin\ProductRepositoryEloquent;
use Modules\Product\Repositories\User\ProductRepository as UserProductRepository;
use Modules\Product\Repositories\User\ProductRepositoryEloquent as UserProductRepositoryEloquent;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
    public function boot()
    {
        $this->app->bind(ProductRepository::class, ProductRepositoryEloquent::class);
        $this->app->bind(UserProductRepository::class, UserProductRepositoryEloquent::class);
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
