@extends('layouts.front_layout')
@section('title', 'Article')
@section('content')
    <div class="main-body">
        <div id="primary" class="site-content container">
            <div id="content" role="main" class="row">
                <div class="col-md-12">
                    <div class="blog">
                        <span class="left-shadow"></span>
                        <h3 class="blog-head">blog</h3>
                        <span class="right-shadow"></span>
                    </div>
                </div>
                <div class="col-lg-10 left-margin">
                    <div class="left-area">
                        <article id="post-539" class="post type-post status-publish format-standard hentry category-cpf-facts blog-post-small">
                            <header class="entry-header">
                                <h1 class="entry-title">{{$blog->headline}}</h1>

                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p><a href="{{$blog->thumbnail}}"><img class="alignnone size-full wp-image-540"
                                                                       alt="{{$blog->headline}}" src="{{url($blog->thumbnail)}}"
                                                                       width="640" height="452" /></a></p>
                                <p>{!!$blog->description!!}</p>
                            </div>
                        </article><!-- #post -->

                        <nav id="leave-a-reply" class="nav-single">
                            <h3 class="assistive-text">Post navigation</h3>
                            <span class="nav-previous"><a href="{{url('/')}}"
                                                          rel="prev"><span class="meta-nav">&larr;</span> Back to home</a></span>
                            <span class="nav-next"></span>
                        </nav><!-- .nav-single -->







                    </div><!-- .left-area -->
                </div><!-- .col-md-8 -->

                <div class="col-md-3">

                </div><!-- #secondary -->
            </div><!-- .col-md-4 -->
        </div><!-- #content -->
    </div><!-- #primary -->
@endsection