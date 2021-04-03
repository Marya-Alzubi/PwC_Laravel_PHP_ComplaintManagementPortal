<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="preload" href="{{asset('assets/boosted/dist/fonts/HelvNeue55_W1G.woff2')}}" as="font"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{asset('assets/boosted/dist/fonts/HelvNeue75_W1G.woff2')}}" as="font"
          type="font/woff2" crossorigin="anonymous">
    <link href="{{asset('assets/boosted/dist/css/orangeHelvetica.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/boosted/dist/css/orangeIcons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/boosted/dist/css/boosted.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/wizard.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://code.jquery.com" crossorigin="anonymous">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @yield('links')
    <style>
        @yield('style')
    </style>
</head>

<body>
<div class="skiplinks container-fluid">
    <a href="#mainNav" class="sr-only sr-only-focusable">Skip to main navigation</a>
    <a href="#content" class="sr-only sr-only-focusable">Skip to content</a>
</div>

<header role="banner">
    <nav role="navigation" id="mainNav" class="navbar navbar-dark navbar-expand-md  bg-primary"
         aria-label="Main navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
                <img src="{{asset('assets/boosted/dist/img/logo.svg')}}"
                     class="d-inline-block align-bottom mr-3" alt="Back to homepage" title="Back to homepage" width="100"
                     height="50" loading="lazy" />
                {{--                <span class="h1 mb-0">Eshop</span>--}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#orange-navbar-collapse"
                    aria-controls="orange-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse justify-content-between collapse" id="orange-navbar-collapse">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    @yield('page-title')
</header>
<nav role="navigation" class="o-stepbar" aria-label="Checkout process">
    <p class="float-left mt-2 mr-2 font-weight-bold d-sm-none">Step</p>
    <ol>
        @yield('step_bar')
    </ol>
</nav>


<main role="main" id="content" class="container my-5">
    @yield('main')
</main>

{{--<!-- Footer -->--}}
{{--<footer class="bg-primary text-center text-lg-start">--}}
{{--    <!-- Grid container -->--}}
{{--    <div class="container p-4">--}}
{{--        <!--Grid row-->--}}
{{--        <div class="row">--}}
{{--            <!--Grid column-->--}}
{{--            <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-justify">--}}
{{--                <h5 class="text-uppercase">PwC Complaint Management Portal</h5>--}}

{{--                <p>--}}
{{--                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis--}}
{{--                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam--}}
{{--                    voluptatem veniam, est atque cumque eum delectus sint!--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <!--Grid column-->--}}

{{--            <!--Grid column-->--}}
{{--            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">--}}
{{--                <h5 class="text-uppercase">Contact Us</h5>--}}

{{--                <ul class="list-unstyled mb-0">--}}
{{--                    <li>--}}
{{--                        <a href="#!" class="text-dark">+9627 777 77777</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#!" class="text-dark">pwc@info.com</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!--Grid column-->--}}

{{--            <!--Grid column-->--}}
{{--            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">--}}
{{--                <h5 class="text-uppercase mb-0">About Us</h5>--}}

{{--                <ul class="list-unstyled">--}}
{{--                    <li>--}}
{{--                        <a href="#!" class="text-dark">History</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#!" class="text-dark">History</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!--Grid column-->--}}
{{--        </div>--}}
{{--        <!--Grid row-->--}}
{{--    </div>--}}
{{--    <!-- Grid container -->--}}

{{--    <!-- Copyright -->--}}
{{--    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">--}}
{{--        © 2020 Copyright:--}}
{{--        <a class="text-dark" href="https://mdbootstrap.com/">PwC.com</a>--}}
{{--    </div>--}}
{{--    <!-- Copyright -->--}}
{{--</footer>--}}
{{--<!-- Footer -->--}}


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/boosted@4.5.3/dist/js/boosted.bundle.min.js" integrity="sha384-hQFBUEXKv1tPjGNFpCctXthNheXFWEyT+cKHsR5+8VYwGoe2L0SIaDNXDpE1LlTK" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{asset('assets/boosted/dist/js/jquery-slim.min.js')}}"><\/script>')</script>
<script src="{{asset('assets/boosted/dist/js/boosted.bundle.min.js')}}"></script>
@yield('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    @if(session('status_store'))
    swal({
        title: "{{session('status_store')}}",
        icon: "success",
        button: "ok",
    });
    @endif
    @if(session('status_update'))
    swal({
        title: "{{session('status_update')}}",
        icon: "success",
        button: "ok",
    });
    @endif
    @if(session('status_destroy'))
    swal({
        title: "{{session('status_destroy')}}",
        icon: "error",
        button: "ok",
    });
    @endif
</script>
</body>

</html>
