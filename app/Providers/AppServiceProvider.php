<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
        Blade::component('components.title', 'title');
        Blade::component('components.gallery', 'gallery');
        Blade::component('components.card', 'card');
//        View::composer('*','');
         //View::share('key', 'value');
//        view()->composer('view', function () {
//            //
//        });
    }
}
