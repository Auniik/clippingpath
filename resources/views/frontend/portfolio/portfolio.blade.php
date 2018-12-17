@extends('layouts.front_layout')
@section('title', 'Recent Works')
@section('content')
    <div class="main-body">
        <div class="main-wrapper portfolio-area portfolio-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 portfolio">
                        <div class="row p-selector">
                            <div class="col-lg-4 p-button">
                                <p>Portfolio</p>
                            </div>
                        </div>
                        <div id="container" class="row p-items portfolio-section-box clearfix">
                            @foreach($items as $item)
                                <a href="{{route('work.show', $item)}}">
                                <div class="col-lg-6 col-md-6 col-sm-12  p-single-item element ">
                                    <img src="{{url($item->before_thumbnail)}}" />
                                    <img src="{{url($item->after_thumbnail)}}" />
                                    <div class="item-hover">
                                        <img src="{{asset('frontend/images/new-icon/plus-icon.png')}}" />
                                    </div>
                                </div>
                                </a>
                            @endforeach
                        </div>
                        <br>
                        <div class="row all-portfolio">
                            <div class="col-lg-12 text-right">
                               {{$items->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection