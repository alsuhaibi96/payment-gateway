<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Wasl Payment</title>
    <!--walper slider library-->
    <link rel="stylesheet" href="{{url('assets/web/css/swiper-bundle.min.css')}}" />
    <!--normalize library-->
    <link rel="stylesheet" href="{{url('assets/web/css/normalize.css')}}">
    <!--google font library-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <!--font icon-->
    <link rel="stylesheet" href="{{url('assets/web/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/web/path/to/font-awesome/css/font-awesome.min.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--custom css file link-->
    <link rel="stylesheet" href="{{url('assets/web/css/style.css')}}">

    <!-- add Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/app-assets/images/ico/wallet-solid.svg')}}">
</head>

<body style="background: #fff;">
    <!--start header section-->
    <header>
        <a href="#" class="logo">WASL PAYMENT <i class="fas fa-wallet"></i></a>
        <nav class="navbar" id="menu" style="display: block;">


            <a class="active" href="#home">الرئيسية</a>
            <a href="#about">من نحن</a>
            <a href="#customer"> عملائنا</a>

            <a href="#contact">تواصل معنا</a>
            <a href="{{ route('docs/home') }}">Docs</a>
        </nav>
        <div class="icon">

            <i class="fas fa-bars toogle" id="menu-bars"></i>
            @if (!Auth::check())
            <i class="fas fa-right-to-bracket" style="color: #192a56;">
                <a class="fas fa-user" href="{{ route('registeration') }}"> </a>
            </i>
            @endif
            @if (Auth::check())

            <nav class="navbar navbar-expand-lg  ">
                <div>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-lg-0">

                            <li class="nav-item dropdown">
                                <button class="nav-link dropdown-toggle bg-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="media-left pr-0">
                                        <div class="avatar m-0">
                                            @if(isset(Auth::user()->profile->avatar))
                                            <img src="{{ asset('images/'. Auth::user()->profile->avatar) }}" alt="avatar" height="20" width="20" class="rounded-circle" style="height: 50px;width: 50px;">
                                            @else
                                            <img src="{{ url('assets/web/images/avatar.jpg') }}" alt="users avatar" class="users-avatar-shadow rounded-circle" style="width: 40px; height:auto;">


                                            @endif
                                        </div>
                                    </div>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->hasRole('Customer'))
                                    <li><a class="" href="{{ route('customer_dashboard') }}" style="font-size: 12px">لوحة التحكم</a></li>
                                    @else
                                    <li><a class="" href="{{ route('merchant_dashboard') }}" style="font-size: 12px">لوحة التحكم</a></li>
                                    @endif


                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="" href="{{ route('logout') }}" style="font-size: 12px">تسجيل الخروج</a></li>


                                </ul>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
            @endif
    </header>
    <!--end header section-->




    @yield('content')


    <!--start footer section -->
    <section class="foot" id="contact" style=" background:#eee;">

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <a href="#" class="logo"> <i class="fas fa-wallet"></i>وصل! </a>
                <p>موقع يوفر حلول دفع الكترونية متكاملة</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <h3>صفحات الموقع</h3>
                <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> الرئيسية </a>
                <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> من نحن </a>
                <a href="#destination" class="links"> <i class="fas fa-arrow-right"></i> عملائنا </a>
                <a href="#services" class="links"> <i class="fas fa-arrow-right"></i> تواصل معنا </a>
                <a href="#gallery" class="links"> <i class="fas fa-arrow-right"></i> Docs </a>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <h3>معلومات التواصل</h3>
                <p class="cont_icon"> <i class="fas fa-map"></i> صنعاء, اليمن </p>
                <p class="cont_icon"> <i class="fas fa-phone"></i> +967-777-604785 </p>
                <p class="cont_icon"> <i class="fas fa-envelope"></i> wasl@gmail.com </p>
            </div>

        </div>
        <div class="credit"> | جميع الحقوق محفوظة &copy; 2022 WASL PAYMENT</div>


    </section>
    <!--end footer section -->






    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{url('assets/web/js/swiper-bundle.min.js')}}"></script>
    <!--custom js file link-->
    <script src="{{url('assets/web/js/main.js')}}"></script>
</body>

</html>