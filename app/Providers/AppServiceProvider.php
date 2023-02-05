<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\EVM\EVMNetworkService;
use App\Services\EVMDB\EVMDBService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('EVMDBService', function ($app) {
            return new EVMDBService(new EVMNetworkService);
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
