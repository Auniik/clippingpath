<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Font embeding -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <!-- CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap-responsive.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/lavalamp.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/layerslider/css/layerslider.css')}}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
<header id="header">
    <div class="sub-area">
        <div class="main-wrapper head-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <span class="logo"><a href="{{url('/')}}"><img class="img img-responsive" src="{{asset('frontend/images/logo.png')}}" alt=""></a></span>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="main-menu-area">
                            <!-- <div class="menu-controll"><p>+</p></div> -->
                            <!-- lavaLamp class is require for lavaLamp effect -->
                            <ul class="main-menu lavaLamp">
                                <li><a href="{{url('/')}}" class="active">Home</a></li>
                                {{--<li><a href="about.html">About</a></li>--}}
                                @foreach($menus as $menu)
                                <li><a href="#">Clipping Mask</a>

                                    <ul class="sub-menu">
                                        @foreach($menu->submenus as $submenu)
                                            <li><a href="#">Clipping Path</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                @endforeach

                                <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                                <li><a href="{{url('blog')}}">Blog</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="back-to-top"></div>
    </div>
</header>

    @yield('content')

<div class="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="news-latter-area">
                    <form action="{{url('newsletters/send')}}" method="post">
                        @csrf
                        <ul>
                            <li><p>Subscribe for Coupon Code</p></li>
                            <li><input type="email" name="email" placeholder="Submit Your Mail" /></li>
                            <li><input type="submit" value="Subscribe" /></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<footer class="">
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 box">
                    <h4 class="footer-title">Owner's Information</h4>
                    <ul>
                        <div class="info">Name:</div><li class="infolist" style="font-size: 16px">{{$config==null ? 'Owner Name here' : $config->owner_name}}</li>
                        <div class="info">Email:</div><li class="infolist">{{$config==null ? 'Owner Phone here' : $config->owner_phone}}</li>
                        <div class="info">Phone:</div><li class="infolist">{{$config==null ? 'Owner Email here' : $config->owner_email}}</li>
                    </ul>
                </div>
                <div class="col-md-3 box">
                    <h4 class="footer-title">Company</h4>
                    <ul>
                        <div class="info">Company Name:</div><li class="infolist" style="font-size: 16px">{{$config==null ? 'Company Name here' : $config->company_name}}</li>
                        <div  class="info">Licence No:</div><li class="infolist">{{$config==null ? 'Company licence here' : $config->licence}}</li>
                        <div class="info">Address:</div><li class="infolist">{{$config==null ? 'Company address here' : $config->address}}</li>
                    </ul>
                </div>
                <div class="col-md-3 box quick-links">
                    <h4 class="footer-title">Services</h4>
                    <ul>
                        @foreach($features as $feature)
                            <li><a href="{{route('feature.show', $feature)}}">{{$feature->headline}}</a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-md-6 box from-blog">
                    <h4 class="footer-title">From Blog</h4>
                          <ul>
                              @foreach($blogs as $blog)
                                  <li><a href="{{route('article.show', $blog)}}"><p class="blog-title">{{$blog->headline}}</p></a></li>
                              @endforeach

                          </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="row payment">
                      <div class="col-md-5">
                                <div class="copyright-area">
                                          <p>&copy; {{date('Y')}}. All rights reserved <a href="{{url('/')}}"> {{$config==null ? 'Company Name here' : $config->company_name}}</a></p>
                                </div>
                      </div>
                      <div class="col-md-7">
                                <ul>
                                          <li><img alt="payment method" src="{{asset('frontend/images/payment/visa.png')}}"></li>
                                          <li><img alt="payment method" src="{{asset('frontend/images/payment/mc.png')}}"></li>
                                          <li><img alt="payment method" src="{{asset('frontend/images/payment/ae.png')}}"></li>
                                          <li><img alt="payment method" src="{{asset('frontend/images/payment/paypal.png')}}"></li>
                                          <li><img alt="payment method" src="{{asset('frontend/images/payment/wu.png')}}"></li>
                                          <li><img alt="payment method" src="{{asset('frontend/images/payment/skrill.png')}}"></li>
                                          <li><img alt="payment method" src="{{asset('frontend/images/payment/club.png')}}"></li>
                                          <li><img alt="payment method" src="{{asset('frontend/images/payment/dis.png')}}"></li>
                                          <li><img alt="payment method" src="{{asset('frontend/images/payment/han.png')}}"></li>
                                </ul>
                                <div class="clear"></div>
                      </div>
            </div>
    </div>
</footer>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.preloader.js')}}"></script>
<script src="{{asset('frontend/js/jquery.lavalamp.js')}}"></script>
<script src="{{asset('frontend/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.hoverIntent.minified.js')}}"></script>

<!-- LayerSlider styles -->
<!-- jQuery with jQuery Easing JS -->
<script src="{{asset('frontend/layerslider/jQuery/jquery-easing-1.3.js')}}"></script>

<!-- LayerSlider from Kreatura Media -->
<script src="{{asset('frontend/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script src="{{asset('frontend/js/jquery.autoclass.js')}}"></script>

<!-- owl curosel -->


<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        center: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        },
    });
</script>

<!-- custom scripts -->
<script src="{{asset('frontend/js/custom.js')}}"></script>


</body>

</html>