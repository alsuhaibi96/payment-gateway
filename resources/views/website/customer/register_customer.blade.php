<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>انشاء حساب</title>
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
</head>
<body>
    <!--start header section-->
    <header>
        <a href="#" class="logo">WASL PAYMENT <i class="fas fa-wallet"></i></a>
        <nav class="navbar" id="menu">
            <a  href="#dashboard" class="active">انشاء حساب</a>
            <a class="" href="#home">تسجيل الدخول</a>
            <a  href="#home"> الرجوع للرئيسية</a>
        </nav>
        <div class="icon">
            <i class="fas fa-bars toogle" id="menu-bars"></i>
            
        </div>
    </header>
    <!--end header section-->
    <!--start signIn form-->
    <section class="login-form container justify-content-center pt-4 pb-4  ">
      <div class="row section-header text-center p-4">
        <div class="col-12">
            <h2>إنشاء حساب جديد</h2>
        </div>
      </div>
      <form class="login-form row container g-3s" action="{{ route('register_customer') }}" method="POST" enctype="multipart/form-data" >
        @csrf
         <div class="row">

          <div class="col-md-3">
            <label for="name" class="form-label">الاسم الاول</label>
            <input name="firstName" placeholder="الاسم الاول" type="text" class="form-control @error('firstName') is-invalid @enderror" id="" value="{{ old('firstName') }}">
                                            @error('firstName') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
       
          <div class="col-md-3">
            <label for="name" class="form-label">الاسم الاوسط</label>
            <input name="middleName" placeholder="الاسم الاوسط" type="text" class="form-control @error('middleName') is-invalid @enderror" id="" value="{{ old('middleName') }}">
            @error('middleName') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
       
          <div class="col-md-3">
            <label for="name" class="form-label">اللقب</label>
            <input name="lastName" placeholder="اللقب" type="text" class="form-control @error('lastName') is-invalid @enderror" id="" value="{{ old('lastName') }}">
            @error('lastName') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
         </div>
       
         <div class="row">
          <div class="col-md-3">
            <label for="inputEmail4" class="form-label"> البريد الالكتروني</label>
            <input name="email" placeholder="البريد الالكتروني" type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" value="{{ old('email') }}">
            @error('email') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
         </div>
         
        <div class="row">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">كلمة المرور</label>
            <input name="password" placeholder="كلمة المرور " type="password" class="form-control @error('password') is-invalid @enderror" id="inputEmail4" value="{{ old('password') }}">
            @error('password') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">تاكيد كلمة المرور</label>
            <input name="confirm_password" placeholder="تاكيد كلمة المرور" type="password" class="form-control @error('confirm_password') is-invalid @enderror" id="inputEmail4" value="{{ old('confirm_password') }}">
            @error('confirm_password') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
        </div>
          <div class="col-12">
            <button type="submit" class="btn login-btn">إنشاء حساب جديد</button>
          </div><hr>
        </form>
    </section>
    <!--end login form-->

    <!--start footer section -->








    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{url('assets/web/js/swiper-bundle.min.js')}}"></script>
    <!--custom js file link-->
    <script src="{{url('assets/web/js/main.js')}}"></script>
</body>
</html>