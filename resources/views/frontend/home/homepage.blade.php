@extends('layouts.front_layout')
@section('title', 'Home | Clipping Path')
@section('content')
    <div class="main-body">
        <div class="main-wrapper slider-area">
            <!--LayerSlider begin-->
            <div id="slider" style="width: 100%; height: 100%;">

                @foreach($bulk_sliders as $slider)
                <!--LayerSlider layer-->
                <div class="ls-layer">
                    <div id="layer-01-bg" class="ls-bg" style=""></div>
                        <div id="layer-01-bg-02" class="ls-s6" style="background:{{$slider->background_color}};" data-rel="delayin: 300; slidedirection: top; slideoutdirection: left; durationin: 3000;"></div>
                <div id="layer-01-slide-01" class="ls-s6" style="" data-rel="delayin: 100; slidedirection: right; slideoutdirection: left; durationin: 1500;">
                    <p>{{$slider->thumbnail_square_title}}</p>
                    <img  src="{{$slider->thumbnail_square}}" style="box-shadow: -16px 15px 24px -21px black;" alt="home-slider-01">
                </div>

                <div id="layer-01-slide-02" class="ls-s4" style="" data-rel="delayin: 100; slidedirection: bottom; slideoutdirection: bottom; durationin: 2000;">
                    <img src="{{$slider->thumbnail_wide}}" style="box-shadow: -16px 15px 24px -21px black" alt="home-slider-02">
                    <p>{{$slider->thumbnail_wide_title}}</p>
                </div>

                <div id="layer-01-slide-03" class="ls-s2" style="" data-rel="delayin: 100; slidedirection: right; slideoutdirection: left; durationin: 1000;">
                    <p class="pera-01"></p>
                    {{--<p class="pera-02">at low price</p>--}}
                    <p>{!! $slider->background_text !!}</p>
                    {{--<a href="inside/auth.html" class="slider-button">Try 3 Images for free now <span>></span></a>--}}
                </div>
            </div>
                    @endforeach
                    @foreach($cover_sliders as $slider)

            <div class="ls-layer">
                <div id="layer-02-bg" class="ls-bg" style=""></div>

                <img id="layer-02-slide-01" class="ls-s6" src="{{$slider->background_thumbnail}}"  data-rel="delayin: 100; slidedirection: right; slideoutdirection: left; durationin: 1000;" alt="home-slider-02-01">

                <div id="layer-02-slide-02" class="ls-s2" style="" data-rel="delayin: 100; slidedirection: left; slideoutdirection: bottom; durationin: 1500;">
                    <p>{!!$slider->background_text!!}</p>
                    {{--<p class="style-02">nested hope for <span class="highlight">100 + Photographers</span><br>around the globe</p>--}}
                    {{--<a href="inside/auth.html" class="slide02-button">Try Now <span>></span></a>--}}
                </div>
            </div>
                        @endforeach

        </div>
        <!--LayerSlider end-->
    </div>
    <div class="features-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="slider-items-list">
                        @foreach($socials as $social)
                            @if(substr($social->profile_link,0,3)=='http')
                                <li><a href="{{$social->profile_link}}"><i class="{{$social->icon}}" aria-hidden="true"></i></a></li>
                            @else
                                <li><a href="http://{{$social->profile_link}}"><i class="{{$social->icon}}"></i></a></li>
                            @endif

                        @endforeach
                    </ul>
                    <div class="contact-area">
                        <span class="lan">
                        <a href="callto:+1(484) 273-2547" class="lan"><i class="mobile-number"></i>+1(484) 273-2547</a>
                        </span> &nbsp;&nbsp;&nbsp;
                        <a href="mailto:info@clippingpath.com" class="email"><i class="icon-envelope-alt"></i> info@clippingpath.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrapper portfolio-area">
        <div class="container">
            <div class="c-p-family">
                <h1>{{$config==null ? 'Your Message here' :  $config->message}}</h1>
                <p>If you need bulk image editing service with great quality, reliability and fast turnaround time!!</p>
            </div>

            {{--Feature sections --}}
            <div class="row">
                <div class="col-md-12 c-p-feature">
                    <div class="row">
                        @foreach ($features as $feature)
                            <div class="col-lg-4 col-md-6 col-sm-6 item-style" style="background-image:url({{$feature->thumbnail}})">
                                <a href="{{route('feature.show', $feature)}}"><h2>{{$feature->headline}}</h2></a>
                                <p>{!! str_limit($feature->description, 100)!!}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-12 portfolio">
                    <divc class="row p-selector">
                        <div class="col-md-4 p-button">
                            <p>Portfolio</p>
                        </div>
                    </divc>

                {{--portfolio--}}
                    <div id="container" class="row p-items portfolio-section-box clearfix">
                        @foreach ($portfolios as $portfolio)
                            <a href="{{route('work.show', $portfolio)}}">
                                <div class="col-md-4 col-sm-6 col-xs-12 p-single-item element">
                                    <img src="{{url($portfolio->before_thumbnail)}}" alt="clipping-path" />
                                    <hr>
                                    <img src="{{url($portfolio->after_thumbnail)}}" alt="clipping-path" />
                                    <div class="item-hover">
                                        <img src="{{asset('frontend/images/new-icon/plus-icon.png')}}" alt="plus-icon" />
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="main-wrapper prome-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3  col-sm-6 some-feature feature-1">
                    <div class="promo-area-bg"></div>
                    <p>Ready within<br>24 hours</p>
                </div>
                <div class="col-md-3  col-sm-6 some-feature feature-2">
                    <div class="promo-area-bg"></div>
                    <p>Familier with <br>trending activities</p>
                </div>
                <div class="col-md-3  col-sm-6 some-feature feature-3">
                    <div class="promo-area-bg"></div>
                    <p>Enjoy<br>Unlimited redo</p>
                </div>
                <div class="col-md-3  col-sm-6 some-feature feature-4">
                    <div class="promo-area-bg"></div>
                    <p>24/7<br>Non Stop service</p>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 c-p-tesimonials">
                    <div class="row">
                        <div class="">
                            <h3>Testimonials</h3>
                        </div>
                        <div class="owl-carousel owl-theme">
                            @foreach($feedbacks as $feedback)
                            <div class="item col-md-8 box">
                                <img src="{{$feedback->thumbnail}}" alt="Clipping Path Service Testimonial">
                                <p class="client-name">{{$feedback->name}}</p>
                                <p class="client-designation">{{$feedback->designation}}</p>
                                <p class="client-message">{{$feedback->feedback}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection