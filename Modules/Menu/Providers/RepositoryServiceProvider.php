<?php

namespace Modules\Menu\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Menu\Repositories\Admin\MenuRepository;
use Modules\Menu\Repositories\Admin\MenuRepositoryEloquent;
use Modules\Menu\Repositories\Admin\MenuTypeRepository;
use Modules\Menu\Repositories\Admin\MenuTypeRepositoryEloquent;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MenuRepository::class, MenuRepositoryEloquent::class);
        $this->app->bind(MenuTypeRepository::class, MenuTypeRepositoryEloquent::class);
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
