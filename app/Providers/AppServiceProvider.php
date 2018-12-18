<?php

namespace App\Providers;
use App\SiteConfiguration;
use App\Blog;
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
        View::composer('layouts.front_layout', function ($view) {

            $config = SiteConfiguration::first();
            $blogs=Blog::where('status',1)->orderBy('created_at', 'desc')->take(5)->get();

            $view->with('config', $config);
            $view->with('blogs', $blogs);
        });
        View::composer('layouts.admin_layout', function($view)
        {
            $config = SiteConfiguration::first();
            $view->with('config', $config);
        });
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
