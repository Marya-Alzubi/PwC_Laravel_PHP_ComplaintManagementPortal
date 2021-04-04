<!DOCTYPE html>
<!--
Template Name: Frest HTML Admin Template
Author: :Pixinvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/pixinvent_portfolio
Renew Support: https://1.envato.market/pixinvent_portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Apr 2021 10:39:44 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description"
          content="amin dashboard - complant management portal - PwC ">
    <meta name="keywords"
          content="admin dashboard - complaint management portal - PwC ">
    <meta name="author" content="Marya Alzubi">
    <title> @yield('title') </title>
    <link rel="apple-touch-icon" href="{{asset('admin-assets/images/ico/apple-icon-120.html')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin-assets/images/logo/logo.svg')}}" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
          rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/extensions/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/themes/semi-dark-layout.min.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pages/dashboard-ecommerce.min.css')}}">
    <!-- END: Page CSS-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.1/chart.min.js" integrity="sha512-2uu1jrAmW1A+SMwih5DAPqzFS2PI+OPw79OVLS4NJ6jGHQ/GmIVDDlWwz4KLO8DnoUmYdU8hTtFcp8je6zxbCg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body>
<div class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click"
     data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"><i
                                        class="ficon bx bx-menu"></i></a></li>
                        </ul>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                    class="ficon bx bx-fullscreen"></i></a></li>
{{--                        <li class="dropdown dropdown-language nav-item">--}}
{{--                            <a class="dropdown-item" href="{{ route('admin.logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                logout--}}
{{--                            </a>--}}

{{--                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="/admin">
                        <div class="brand-logo">
                            <defs>
                                <lineargradient id="linearGradient-1" x1="50%" y1="0%" x2="50%" y2="100%">
                                    <stop stop-color="#5A8DEE" offset="0%"></stop>
                                    <stop stop-color="#699AF9" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop stop-color="#FDAC41" offset="0%"></stop>
                                    <stop stop-color="#E38100" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            <g id="Sprite" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="sprite" transform="translate(-69.000000, -61.000000)">
                                    <g id="Group" transform="translate(17.000000, 15.000000)">
                                        <g id="icon" transform="translate(52.000000, 46.000000)">
                                            <path id="Combined-Shape"
                                                  d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"></path>
                                            <path id="Combined-Shape"
                                                  d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5378966 4.74673291,13.1939746 4.7846258,12.8556254 L8.55057141,12.8560055 C8.48653249,13.1896162 8.45300462,13.5340745 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.529522,8.45300462 13.180715,8.48740462 12.8430777,8.55306931 L12.8426531,4.78608796 C13.1851829,4.7472336 13.5334422,4.72727273 13.8863636,4.72727273 Z"
                                                  fill="#4880EA"></path>
                                            <path id="Combined-Shape"
                                                  d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                                  fill="url(#linearGradient-1)"></path>
                                            <rect id="Rectangle" x="0" y="0" width="7.68181818"
                                                  height="7.68181818"></rect>
                                            <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0"
                                                  width="7.68181818" height="7.68181818"></rect>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </div>
                        <h2 class="brand-text mb-0">PwC</h2></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
                data-icon-style="lines">
                <li class=" nav-item"><a href="/admin"><i class="menu-livicon" data-icon="desktop"></i><span
                            class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('admin.all.complaints') }}"><i class="menu-livicon"
                                                                                       data-icon="envelope-pull"></i><span
                            class="menu-title text-truncate" data-i18n="Email"> Complaints </span></a>
                </li>
                @if()
                <li class=" nav-item"><a href="/admins"><i class="menu-livicon" data-icon="envelope-pull"></i><span
                            class="menu-title text-truncate" data-i18n="Email">Admins</span></a>
                </li>
                <li class=" nav-item"><a href="/users"><i class="menu-livicon" data-icon="envelope-pull"></i><span
                            class="menu-title text-truncate" data-i18n="Email">Users</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-body">
            @yield('main')
            <!-- END: Content-->
            </div>
        </div>
    </div>


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('admin-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js')}}"></script>
    <script src="{{asset('admin-app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js')}}"></script>
    <script src="{{asset('admin-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendors/js/extensions/swiper.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('admin-assets/js/scripts/configs/vertical-menu-light.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/core/app.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/scripts/components.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/scripts/footer.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/scripts/customizer.min.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/pages/dashboard-ecommerce.min.js')}}"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin-assets/js/scripts/datatables/datatable.min.js')}}"></script>
    <!-- END: Page JS-->
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
</div>
</body>
<!-- END: Body-->

<!-- Mirrored from www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Apr 2021 10:39:44 GMT -->
</html>
