<?php

namespace HMS\Providers;

use Illuminate\Support\ServiceProvider;
use HMS\Hostel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('hostels', Hostel::all());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
