<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\SiteConfiguration;
use App\Feature;
use App\Slider;
use App\Testimonial;
use App\Social;
use App\Portfolio;
use App\Submenu;
use App\Page;

class MainPageController extends Controller
{
    public function index()
    {
        $config= SiteConfiguration::first();
        $socials=Social::where('status',1)->orderBy('created_at', 'asc')->get();
        $features=Feature::where('status',1)->orderBy('created_at', 'desc')->paginate(6);
        $feedbacks = Testimonial::where('status',1)->orderBy('created_at', 'desc')->paginate(5);
        $portfolios=Portfolio::where('status',1)->orderBy('created_at', 'desc')->take(3)->get();
        //Slider
        $bulk_sliders=Slider::whereNull('background_thumbnail')->where('status',1)->get();
        $cover_sliders=Slider::whereNull('thumbnail_wide')->where('status',1)->get();
        return view('frontend.home.homepage', compact('config', 'socials', 'features', 'portfolios','feedbacks', 'bulk_sliders', 'cover_sliders'));
    }

    public function show($menu, $slug){

        $submenu= Submenu::where('slug', $slug)->first();
        $menu = str_replace(' ', '-', strtolower($submenu->menu->name));
        $page = Page::where('submenu_id', $submenu->id)->first();
        $services = Page::inRandomOrder()->take(4)->get();
        return view('frontend.page.page', compact('page', 'menu', 'services'));
    }
}
