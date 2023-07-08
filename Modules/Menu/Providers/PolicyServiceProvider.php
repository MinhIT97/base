<?php

namespace Modules\Menu\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Menu\Entities\ItemMenu;
use Modules\Menu\Entities\Menu;
use Modules\Menu\Policies\Admin\ItemMenuPolicy;
use Modules\Menu\Policies\Admin\MenuPolicy;

class PolicyServiceProvider extends ServiceProvider
{

    protected $policies = [
        Menu::class     => MenuPolicy::class,
        ItemMenu::class => ItemMenuPolicy::class,
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
