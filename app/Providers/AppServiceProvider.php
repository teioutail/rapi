<?php

namespace App\Providers;

// include mo eto before executing php artisan migrate
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // include mo eto before executing php artisan migrate
        Schema::defaultStringLength(191);
    }

}
