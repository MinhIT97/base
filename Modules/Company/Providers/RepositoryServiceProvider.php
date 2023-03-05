<?php

namespace Modules\Company\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Company\Repositories\CompanyRepository;
use Modules\Company\Repositories\CompanyRepositoryEloquent;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CompanyRepository::class, CompanyRepositoryEloquent::class);
        //:end-bindings:
    }
}
