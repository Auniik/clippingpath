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

    <link rel="canonical" href="index.html"/>

    <script type="text/javascript">
      var base_url = 'index.html';
    </script>


</head>

<body>

    @yield('content')

<div class="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="news-latter-area">
                    <form action="" method="post" target="_blank">
                        <ul>
                            <li><p>Subscribe for Coupon Code</p></li>
                            <li><input type="email" name="EMAIL" placeholder="Submit Your Mail" /></li>
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
                <div class="col-md-3 box quick-links">
                    <h4 class="footer-title">Information</h4>
                    <ul>
                        <li><a rel="nofollow" target="_blank" href="terms-and-condition.html">Terms &amp; Condition</a></li>
                        <li><a rel="nofollow" target="_blank" href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a rel="nofollow" target="_blank" href="refund-policy.html">Refund Policy</a></li>
                        <li><a rel="nofollow" target="_blank" href="partnership-program.html">Partnership Program</a></li>
                        <li><a rel="nofollow" target="_blank" href="about.html">About</a></li>
                        <li><a rel="nofollow" target="_blank" href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 box quick-links">
                    <h4 class="footer-title">Services</h4>
                    <ul>
                        <li><a href="clipping-path.html">Clipping Path</a></li>
                        <li><a href="photoshop-masking.html">Masking</a></li>
                        <li><a href="photo-retouch.html">Retouching</a></li>
                        <li><a href="color-masking.html">Color Correction</a></li>
                        <li><a href="neck-join.html">Neck Join</a></li>
                        <li><a href="shadow-creation.html">Shadow Creation</a></li>
                        <li><a href="logo-and-identity-design.html">Logo and identity design</a></li>
                        <li><a href="ui-design.html">UI Design</a></li>
                    </ul>
                </div>
                <div class="col-md-6 box from-blog">
                    <h4 class="footer-title">From Blog</h4>
                          <ul>
                              <li><a href="blog/indexfded.html?p=539"><p class="blog-title">New Year Greetings from Clipping Path</p></a></li>
                              <li><a href="blog/index5ff4.html?p=535"><p class="blog-title">Techniques Need to Use for Isolating Objects from Images</p></a></li>
                              <li><a href="blog/indexde52.html?p=530"><p class="blog-title">How to Transfer Clipping Path from One Image to Another</p></a></li>
                              <li><a href="blog/index7dad.html?p=524"><p class="blog-title">What is Clipping Path and How to Make Clipping Path Manually</p></a></li>
                              <li><a href="blog/indexcc08.html?p=519"><p class="blog-title">Great Tips to Preserve Photos for Years!</p></a></li>
                          </ul>
                </div>
                <div class="col-md-3 box quick-links footer-social-area">
                    <ul>
                        <li>
                            <img class="left" src="{{asset('frontend/images/social/fb.png')}}" alt="facebook-link">
                            <div class="link-text">
                                <a rel="nofollow" target="_blank" href="">Like us on Facebook</a>
                            </div>
                        </li>
                        <li>
                            <img class="left" src="{{asset('frontend/images/social/tw.png')}}" alt="twitter-link">
                            <div class="link-text">
                                    <a rel="nofollow" target="_blank" href="">Follow us on Twitter</a>
                            </div>
                        </li>
                        <li>
                            <img class="left" src="{{asset('frontend/images/social/ln.png')}}" alt="linkedin-link">
                            <div class="link-text">
                                <a rel="nofollow" target="_blank" href="">Follow us on LinkedIn</a>
                            </div>
                        </li>
                        <li>
                            <img class="left" src="{{asset('frontend/images/social/gp.png')}}" alt="googleplus-link">
                            <div class="link-text">
                                <a rel="nofollow" target="_blank" href="#">Add us on Google</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
            <div class="row payment">
                      <div class="col-md-5">
                                <div class="copyright-area">
                                          <p>&copy; 2018. All rights reserved <a href="index.html">Clipping Path</a></p>
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
                items: 3
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