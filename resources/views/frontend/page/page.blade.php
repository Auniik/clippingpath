@extends('layouts.front_layout')
@section('title')
    {{$page->title}}
@endsection
@section('content')
    <div class="main-body">
        <div class="main-wrapper slider-area">
            <ul class="sliding">
                <li class="item-1">
                    <div class="default" style="background: url({{url(($page->before_thumbnail)==null ? '' : $page->before_thumbnail)}}) no-repeat;"></div>
                    <div class="moving" style="background: url({{url(($page->after_thumbnail)==null ? '' : $page->after_thumbnail)}}) no-repeat;"></div>
                </li>
            </ul>
        </div>

        <div class="service-item single">
            <div class="container">
                <div class="row">
                    <div class="content-area">
                        <div class="col-md-9 col-md-offset-1 large">
                            <h1 class="content-title">{{$page->title}}</h1>
                            <p class="service-main-content">{!! $page->description !!}</p>
                        </div>
                        <div class="col-md-2 thumb">
                            <img class="man-cut right" src="{{url($page->icon)}}" alt="man-cutting">
                        </div>

                        <div class="clear"></div>
                        <div class="span12">
                            <div class="trial-button-area">
                                <a href="{{url('/order')}}" class="trial-button">Order Now</a>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="service-feature-area">
                        <div class="item-box fast col-md-10 col-md-offset-1">
                            <div class="img left">fast</div>
                            <div class="content left">
                                <p class="content-title">{{$page->feature_title}}</p>
                                <p class="service-main-content">{!! $page->feature_text!!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="we-are service-galance-area">
                        <span class="left-shadow"></span>
                        <h3 class="we-are-head">Service At a Galance</h3>
                        <span class="right-shadow"></span>
                    </div>
                    <div class="service-galance">
                        @foreach($services as $service)
                            <?php
                            $menu_name = str_replace(' ', '-', strtolower($service->submenu->menu->name));
                            ?>
                            <a href="{{url($menu_name.'/'.$service->submenu->slug)}}">
                                <div class="item-box col-md-3">
                                    <div class="img clipping">
                                        <img alt="service-galance-clipping" src="{{url($service->icon)}}">
                                    </div>
                                    <p class="content-title">{{$service->title}}</p>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection