<?php

namespace gta\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use gta\Customization;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $custom = Customization::find(1);
        View::share('custom', $custom);
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
