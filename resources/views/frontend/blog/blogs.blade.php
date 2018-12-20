@extends('layouts.front_layout')
@section('title', 'Blog')
@section('content')
    <div class="main-body">
        <div class="blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog">
                            <span class="left-shadow"></span>
                            <h3 class="blog-head">blog</h3>
                            <span class="right-shadow"></span>
                        </div>

                        <div class="row">
                            <div class="col-md-12 blog-list">
                               @foreach($blogs as $blog)
                                <div class="blog-post-small">
                                        <h2><a href="{{route('article.show', $blog)}}">{{$blog->headline}}</a></h2>
                                        <ul class="blog-post-info">
                                            <li class="time">
                                                <p>{{$blog->created_at->toFormattedDateString()}}</p>
                                            </li>
                                        </ul>

                                        <div class="post-content">
                                            <img width="300" height="211" src="{{url($blog->thumbnail)}}" class="attachment-medium wp-post-image" alt="happy new year 2015" />
                                            <p class="excerpt">
                                            <p>{!! str_limit($blog->description, 300) !!} <a class="read-more" href="{{route('article.show', $blog)}}">Read More</a></p>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="pull-right">
                                    {{$blogs->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection