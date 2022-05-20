<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
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

     <!-- add Icon -->
     <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/app-assets/images/wallet-solid.svg') }}">
    </head>
<body>
    <!--start header section-->
    <header>
        <a href="{{ route('index') }}" class="logo">WASL Payment <i class="fas fa-wallet"></i></a>
        <nav class="navbar" id="menu">
            <a @yield('signup') href="{{ route('registeration'); }}">انشاء حساب</a>
            <a @yield('signin') href="{{ route('login'); }}">تسجيل الدخول</a>
            <a  href="{{ route('index') }}"> الرجوع للرئيسية</a>

        </nav>
        <div class="icon">
            <i class="fas fa-bars toogle" id="menu-bars"></i>

        </div>
    </header>
    <!--end header section-->



    @yield('content')



     <!--start footer section -->
    <footer class="footer-content" style="margin-top: 150px" >
        <p>جميع الحقوق محفوظة &copy; 2022 WASL PAYMENT  </p>
    </footer>









    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{url('assets/web/js/swiper-bundle.min.js')}}"></script>
    <!--custom js file link-->
    <script src="{{url('assets/web/js/main.js')}}"></script>
</body>
</html>
