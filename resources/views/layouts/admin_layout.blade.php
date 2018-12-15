<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
</head>
<body class="app sidebar-mini rtl">
<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="{{url('/dashboard')}}">CliipingPath</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        {{-- <li class="app-search">
            <input class="app-search__input" type="search" placeholder="Search">
            <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li> --}}
        <!--Notification Menu-->
        <?php $url = Request::path();  ?>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                            ><i class="fa fa-sign-out fa-lg"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
            <p class="app-sidebar__user-designation">Dot Crew</p>
        </div>
    </div>
    <ul class="app-menu">

        {{--Visit Site--}}
        <li>
            <a class="app-menu__item" href="{{url('/')}}" target="_blank"><i class="app-menu__icon fa fa-external-link"></i><span class="app-menu__label">Visit Site</span></a>
        </li>
        {{--Dashboard--}}
        <li>
            <a class="app-menu__item {{ $url  == 'dashboard' ? 'active' : '' }}" href="{{url('dashboard')}}" href="{{url('dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
        {{--Site Configurations--}}
        <li>
            <a class="app-menu__item {{ $url  == 'settings' ? 'active' : '' }}" href="{{url('settings')}}" href="{{url('settings')}}"><i class="app-menu__icon fa fa-gear"></i><span class="app-menu__label">Site Configuration</span></a>
        </li>
        {{--Pages--}}
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bars"></i><span class="app-menu__label">Menus</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item {{ $url  == 'pages/create' ? 'active' : '' }}" href=""><i class="icon fa fa-circle-o"></i> Add Page</a></li>
                <li><a class="treeview-item {{ $url  == 'pages' ? 'active' : '' }}" href=""><i class="icon fa fa-circle-o"></i> Manage Page</a></li>
            </ul>
        </li>
        {{--BLOGS--}}
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-newspaper-o
"></i><span class="app-menu__label">Blogs</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item {{ $url  == 'blogs/create' ? 'active' : '' }}" href="{{url('blogs/create')}}"><i class="icon fa fa-circle-o"></i> Add Blog</a></li>
                <li><a class="treeview-item {{ $url  == 'blogs' ? 'active' : '' }}" href="{{url('blogs')}}"><i class="icon fa fa-circle-o"></i> Manage Blogs</a></li>
            </ul>
        </li>
        {{--FEATURES--}}
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-info"></i><span class="app-menu__label">Features</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item {{ $url  == 'features/create' ? 'active' : '' }}" href="{{url('features/create')}}"><i class="icon fa fa-circle-o"></i> Add Feature</a></li>
                <li><a class="treeview-item {{ $url  == 'features' ? 'active' : '' }}" href="{{url('features')}}"><i class="icon fa fa-circle-o"></i> Manage Feature</a></li>
            </ul>
        </li>
        {{--Portfolio--}}
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-briefcase"></i><span class="app-menu__label">Portfolio</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item {{ $url  == 'portfolio-items/create' ? 'active' : '' }}" href="{{url('portfolio-items/create')}}"><i class="icon fa fa-circle-o"></i> Add Work</a></li>
                <li><a class="treeview-item {{ $url  == 'portfolio-items' ? 'active' : '' }}" href="{{url('portfolio-items')}}"><i class="icon fa fa-circle-o"></i> Manage Portfolio</a></li>
            </ul>
        </li>

        {{--Testimonials--}}
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-thumbs-o-up"></i><span class="app-menu__label">Testimonials</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item {{ $url  == 'feedbacks/create' ? 'active' : '' }}" href="{{url('feedbacks/create')}}"><i class="icon fa fa-circle-o"></i> Add Testimonial</a></li>
                <li><a class="treeview-item {{ $url  == 'feedbacks' ? 'active' : '' }}" href="{{url('feedbacks')}}"><i class="icon fa fa-circle-o"></i> Manage Testimonials</a></li>
            </ul>
        </li>

        {{--Slider--}}
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-picture-o"></i><span class="app-menu__label">Slider</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item {{ $url  == 'sliders/create' ? 'active' : '' }}" href="{{url('sliders/create')}}"><i class="icon fa fa-circle-o"></i> Add Slider Image</a></li>
                <li><a class="treeview-item {{ $url  == 'sliders' ? 'active' : '' }}" href="{{url('sliders')}}"><i class="icon fa fa-circle-o"></i> Manage Sliders</a></li>
            </ul>
        </li>

        {{--CONTACT PAGE--}}
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-envelope
"></i><span class="app-menu__label">Contacts</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item {{ $url  == 'contact/config' ? 'active' : '' }}" href="{{url('contact/config')}}"><i class="icon fa fa-circle-o"></i> Contact Config</a></li>
                <li><a class="treeview-item {{ $url  == 'messages' ? 'active' : '' }}" href="{{url('messages')}}"><i class="icon fa fa-circle-o"></i> Messages</a></li>
            </ul>
        </li>

        {{--//Newsletter--}}
        <li>
            <a class="app-menu__item" href="{{url('newsletters')}}"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Newsletters</span></a>
        </li>


        {{--USER MANAGEMENT--}}
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">User Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item {{ $url  == 'users/create' ? 'active' : '' }}" href="{{url('users/create')}}"><i class="icon fa fa-circle-o"></i> Add User</a></li>
                <li><a class="treeview-item {{ $url  == 'users' ? 'active' : '' }}" href="{{url('users')}}"><i class="icon fa fa-circle-o"></i> Manage User</a></li>
            </ul>
        </li>
    </ul>
</aside>
<main class="app-content">
    @yield('admin_content')
</main>

<!-- Essential javascripts for application to work-->
<script src="{{asset('backend/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('backend/js/popper.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('backend/js/plugins/pace.min.js')}}"></script>
<!-- Page specific javascripts-->

<script>
    $(document).ready(function () {
        $('.delete-data').click(function (e) {
            e.preventDefault();
            if(confirm('Are you sure want to delete?')){
                $('#delete-form').attr('action', $(this).attr('href')).submit();
            }
        })
    })
</script>
<form id="delete-form" method="post">
    @method('DELETE')
    @csrf
</form>


{{--SUMMERNOTE--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
    $('.summernote').summernote({
        height: 200,
        styleWithSpan: false,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol']],
            ['table', ['table']],
            ['height', ['height']],
            ['view', ['codeview']],

        ],
        popover: {
            image: [],
            link: [],
            air: []
        },
        callbacks: {
            // callback for pasting text only (no formatting)
            onPaste: function (e) {
                var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                e.preventDefault();
                bufferText = bufferText.replace(/\r?\n/g, '<br>');
                document.execCommand('insertHtml', false, bufferText);
            }
        }
    });

</script>

</body>
</html>