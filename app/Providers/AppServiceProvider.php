<?php

namespace gta\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use gta\Customization;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('customizations')) {
            $custom = Customization::find(1);
            View::share('custom', $custom);
        }
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
