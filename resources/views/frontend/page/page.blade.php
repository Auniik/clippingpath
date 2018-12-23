@extends('layouts.front_layout')
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
                        <a href="clipping-path.html">
                            <div class="item-box col-md-3">
                                <div class="img clipping">
                                    <img alt="service-galance-clipping" src="assets/images/clipping.png">
                                </div>
                                <p class="content-title">Clipping Path</p>
                            </div>
                        </a>
                        <a href="photo-retouch.html">
                            <div class="item-box col-md-3">
                                <div class="img retouching">
                                    <img alt="service-galance-retouching" src="assets/images/retouching.png">
                                </div>
                                <p class="content-title">Image Retouch</p>
                            </div>
                        </a>
                        <a href="photoshop-masking.html">
                            <div class="item-box col-md-3">
                                <div class="img masking">
                                    <img src="assets/images/masking.png" alt="service-galance-masking">
                                </div>
                                <p class="content-title">Masking</p>
                            </div>
                        </a>
                        <a href="shadow-creation.html">
                            <div class="item-box col-md-3">
                                <div class="img shadow-creation">
                                    <img src="assets/images/shadow-creation.png" alt="service-galance-shadow-creation">
                                </div>
                                <p class="content-title">Shadow Creation</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection