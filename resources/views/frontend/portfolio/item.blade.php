@extends('layouts.front_layout')
@section('title', 'Recent Works')
@section('content')
    <div class="main-body">
        <div class="main-wrapper slider-area">
            <ul class="sliding">
                <li class="item-1">
                    <div class="default" style="background: url({{url($portfolio_item->before_thumbnail)}}) no-repeat;"></div>
                    <div class="moving" style="background: url({{url($portfolio_item->after_thumbnail)}}) no-repeat;"></div>
                </li>
            </ul>
        </div>

        <div class="service-item single">
            <div class="container">
                <div class="row">
                    <div class="content-area">
                        <div class="col-md-9 col-md-offset-1 large">
                            <h1 class="content-title">{{$portfolio_item->title}}</h1>
                            <p class="service-main-content">{!!$portfolio_item->description!!}</p>
                        </div>
                        <div class="col-md-2 thumb">
                            <img class="man-cut right" src="{{asset('frontend/images/man-cutting.png')}}" alt="man-cutting">
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="we-are service-head-area">
                        <span class="left-shadow"></span>
                        <h3 class="we-are-head">Easy Way</h3>
                        <span class="right-shadow"></span>
                    </div>
                    <div class="easy-way-area">
                        <div class="item-box col-md-4">
                            <img src="{{asset('frontend/images/easy-01.png')}}">
                            <p class="content-title">Create Job</p>
                        </div><div class="item-box col-md-4">
                            <img src="{{asset('frontend/images/easy-02.png')}}">
                            <p class="content-title">We Process</p>
                        </div><div class="item-box col-md-4">
                            <img src="{{asset('frontend/images/easy-03.png')}}">
                            <p class="content-title">You Happy</p>
                        </div>
                    </div>
                    {{--<div class="we-are service-galance-area">--}}
                        {{--<span class="left-shadow"></span>--}}
                        {{--<h3 class="we-are-head">Services At A Glance</h3>--}}
                        {{--<span class="right-shadow"></span>--}}
                    {{--</div>--}}
                    {{--<div class="service-galance">--}}
                        {{--<a href="l"><div class="item-box col-md-3">--}}
                                {{--<div class="img clipping"><img alt="service-galance-clipping" src="{{asset('frontend/images/clipping.png')}}"></div>--}}
                                {{--<p class="content-title">Clipping Path</p>--}}
                            {{--</div></a>--}}
                        {{--<a href=""><div class="item-box col-md-3">--}}
                                {{--<div class="img retouching"><img alt="service-galance-retouching" src="{{asset('frontend/images/retouching.png')}}"></div>--}}
                                {{--<p class="content-title">Image Retouch</p>--}}
                            {{--</div></a>--}}
                        {{--<a href=""><div class="item-box col-md-3">--}}
                                {{--<div class="img masking"><img src="{{asset('frontend/images/masking.png')}}" alt="service-galance-masking"></div>--}}
                                {{--<p class="content-title">Masking</p>--}}
                            {{--</div></a>--}}
                        {{--<a href=""><div class="item-box col-md-3">--}}
                                {{--<div class="img shadow-creation"><img src="{{asset('frontend/images/shadow-creation.png')}}" alt="service-galance-shadow-creation"></div>--}}
                                {{--<p class="content-title">Shadow Creation</p>--}}
                            {{--</div></a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection