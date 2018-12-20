<?php

namespace App\Providers;
use App\Menu;
use App\SiteConfiguration;
use App\Blog;
use App\Feature;
use App\Submenu;
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
            $blogs=Blog::where('status',1)->orderBy('created_at', 'desc')->take(3)->get();
            $features=Feature::where('status',1)->orderBy('created_at', 'asc')->take(5)->get();

            $menus=Menu::where('status',1)->orderBy('created_at', 'asc')->get();
            $submenus=Submenu::where(['status',1],['menu_id',])->

            $view->with('config', $config);
            $view->with('blogs', $blogs);
            $view->with('features', $features);
            $view->with('menus', $menus);
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
