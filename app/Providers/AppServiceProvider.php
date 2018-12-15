<?php

namespace App\Providers;
use App\SiteConfiguration;
use App\Slider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use \Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
//        View::composer('frontend.', function ($view) {
//
//            $config=SiteConfiguration::first();
//            $view->with('config', $config);
//        });
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
