<?php

namespace Modules\Category\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Category\Repositories\Admin\CategoryRepository;
use Modules\Category\Repositories\Admin\CategoryRepositoryEloquent;

class RepositoryServiceProvider extends ServiceProvider
{
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
        $this->app->bind(CategoryRepository::class, CategoryRepositoryEloquent::class);
        //:end-bindings:
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
