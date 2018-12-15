<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\SiteConfiguration;
use App\Portfolio;
use App\Feature;
use App\Slider;
use App\Testimonial;

class MainPageController extends Controller
{
    public function index()
    {
        $config= SiteConfiguration::first();
        $features=Feature::where('status',1)->orderBy('created_at', 'desc')->paginate(6);
        $feedbacks = Testimonial::where('status',1)->orderBy('created_at', 'desc')->paginate(5);
        //Slider
        $bulk_sliders=Slider::whereNull('background_thumbnail')->get();
        $cover_sliders=Slider::whereNull('thumbnail_wide')->get();
        return view('frontend.home.homepage', compact('config', 'features', 'feedbacks', 'bulk_sliders', 'cover_sliders'));
    }
}
