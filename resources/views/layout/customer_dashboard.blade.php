<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title> Wasl Pay</title>
    <!--walper slider library-->
    <link rel="stylesheet"href="{{url('assets/web/css/swiper-bundle.min.css')}}"/>
    <!--normalize library-->
    <link rel="stylesheet" href="{{url('assets/web/css/normalize.css')}}">
    <!--google font library-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700&display=swap"
    rel="stylesheet">
    <!--font icon-->
    <link rel="stylesheet" href="{{url('assets/web/css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{url('assets/web/path/to/font-awesome/css/font-awesome.min.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--custom css file link-->
    <link rel="stylesheet" href="{{url('assets/web/css/style.css')}}">


    <link rel="apple-touch-icon" href="{{url('assets/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/app-assets/images/ico/wallet-solid.svg')}}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/vendors/css/extensions/dragula.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/css-rtl/themes/semi-dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/css-rtl/custom-rtl.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/css-rtl/pages/widgets.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/css-rtl/pages/dashboard-analytics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/css-rtl/pages/app-invoice.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/app-assets/css-rtl/pages/style-rtl.css')}}">
    <!-- END: Custom CSS-->



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amiri&family=Changa:wght@700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');


    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper bg-white">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">




                        @yield('header')

                    </div>
                    <ul class="nav navbar-nav float-right">

                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="input" type="text" placeholder="ابحث ..." tabindex="-1" data-search="template-search">
                                <div class="search-input-close"><i class="bx bx-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title"> <b>7 إشعارات جديدة</b> </span><span class="text-bold-400 cursor-pointer">تحديد الكل كمقروء </span></div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0);">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="{{url('assets/app-assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">مرحبًا بك Mo'khtar Ghaleb</span> في بوابة الدفع الأولى في اليمن Wasl Pay &#127881 !</h6><small class="notification-text">Mar 15 12:32pm</small>
                                            </div>
                                        </div>
                                    </a><a class="d-flex justify-content-between cursor-pointer" href="javascript:void(0);">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">LD</span></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500"> <b> أشخاص قد تعرفهم</b> </span>انضموا إلى بوابة الدفع "وصل"  </h6><small class="notification-text">استكشف 25 شخص قد تعرفهم من هنا</small>
                                            </div>
                                        </div>
                                    </a><a class="d-flex justify-content-between cursor-pointer" href="javascript:void(0);">
                                        <div class="media d-flex align-items-center py-0">
                                            <div class="media-left pr-0"><img class="mr-1" src="{{url('assets/app-assets/images/icon/sketch-mac-icon.png')}}" alt="avatar" height="39" width="39"></div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500"> <b> تحديثات جديدة </b> </span></h6><small class="notification-text">موقع <b> مزاد </b> يعرض سيارة Kia Soul للبيع بسعر 2000$ </small>
                                            </div>
                                            <div class="media-right pl-0 mx-50">
                                                <div class="row border-left text-center">
                                                    <div class="col-12 px-10 py-75 border-bottom">
                                                        <h6 class="media-heading text-bold-500 mb-0"> <b> <a href="#mazad.com"> تفاصيل </a></b> </h6>
                                                    </div>
                                                    <div class="col-12 px-10 py-75">
                                                        <h6 class="media-heading mb-0"><a href="#" style="color:#556b85"> إغلاق </a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a><a class="d-flex justify-content-between cursor-pointer" href="javascript:void(0);">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="{{url('assets/app-assets/images/portrait/small/avatar-s-16.jpg')}}" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500"> <b> تم تحويل مبلغ 100$ إلى حسابك </b> </span> من حساب Abdulrahman </h6><small class="notification-text">1 hrs ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">Mo'khtar Ghaleb</span><span class="user-status text-muted"> 😊 Welcome  </span></div><span><img class="round" src="{{url('assets/app-assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0">
                                {{-- <a class="dropdown-item" href="#"><i class="bx bx-user mr-50"></i> تعديل الملف الشخصي</a>
                                <a class="dropdown-item" href="#"><i class="bx bx-envelope mr-50"></i> البريد والرسائل</a> --}}
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="{{ route('logout'); }}"><i class="bx bx-power-off mr-50"></i> تسجيل الخروج </a>
                            </div>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->

        <!-- BEGIN: Main Menu-->
        <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" id="main-menu">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                        <a href="#" class="logo">
                            <h4>
                                <i class="fas fa-wallet"></i>

                                WASL PAY
                            </h4>

                        </a>
                        </a></li>

                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
                <ul class="navigation navigation-main menu" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
                    <li class=" nav-item"><a href="#"> <i class="fas fa-desktop"> </i><span class="menu-title text-truncate" data-i18n="Dashboard">لوحة التحكم</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="eCommerce"> رصيدك الحالي</span>  <span class="badge badge-light-success badge-pill badge-round float-right mr-50 ml-auto"> 89k Y.R </span></a>
                            </li>
                            <li class="@yield('analytics')"><a class="d-flex align-items-center" href="{{ route('home') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Analytics">عرض الإحصائيات</span></a>
                            </li>
                        </ul>
                    </li>




                                    <li class=" nav-item @yield('invoices')"><a href="{{ route('list_customer_invoice') }}"> <i class="fas fa-file-invoice-dollar"></i> <span class="menu-title text-truncate" data-i18n="Colors">الفواتير</span></a>
                                    </li>

                                    <li class=" nav-item @yield('transfer')"><a href="{{ route('transfer') }}"> <i class="fas fa-exchange-alt"></i> <span class="menu-title text-truncate" data-i18n="Card">تحويل رصيد</span></a>
                                    </li>
                                    <li class=" nav-item @yield('settings')"><a href="{{ route('customer_settings') }}"> <i class="fas fa-gear">  </i>  <span class="menu-title text-truncate" data-i18n="Widgets">  إعدادات الحساب</span></a>
                                    </li>

                                    <li class=" navigation-header text-truncat divider"><span data-i18n="Forms &amp; Tables"> </span>
                                    </li>
                                    <li class=" nav-item @yield('faq')"><a href="{{ route('FAQ') }}"><i class="fas fa-bug"></i> <span class="menu-title text-truncate"
                                        data-i18n="Form Layout">  الأسئلة المتكررة - FAQ </span></a>
                                    <li class=" nav-item"><a href="{{ route('index') }}"> <i class="fas fa-house"></i> <span class="menu-title text-truncate" data-i18n="Email"> الرئيسية - Home</span></a>
                                    </li>
                            </div>
                        </div>
                        <!-- END: Main Menu-->
    @yield('content')

        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix mb-0"><span class="float-left d-inline-block">2022 &copy; Wasl Team</span><span class="float-right d-sm-inline-block d-none">Made with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="#WaslTeam.com" target="_blank"> Wasl Team</a></span>
                <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
            </p>
        </footer>
        <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{url('assets/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{url('assets/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
    <script src="{{url('assets/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
    <script src="{{url('assets/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{url('assets/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{url('assets/app-assets/vendors/js/extensions/dragula.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{url('assets/app-assets/js/scripts/configs/vertical-menu-dark.js')}}"></script>
    <script src="{{url('assets/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{url('assets/app-assets/js/core/app.js')}}"></script>
    <script src="{{url('assets/app-assets/js/scripts/components.js')}}"></script>
    <script src="{{url('assets/app-assets/js/scripts/footer.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{url('assets/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
    <script src="{{url('assets/app-assets/js/scripts/pages/app-invoice.js')}}"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
