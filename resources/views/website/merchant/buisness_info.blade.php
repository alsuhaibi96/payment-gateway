<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب</title>
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
    @notifyCss
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
            <h2>اخبرنا عن عملك</h2>
        </div>
      </div>
      <form class="login-form row container g-3s "  >
       
         <div class="row">

          <div class="col-md-6 ">
            <label for="name" class="form-label fs-3">الاسم التجاري</label>
            <input name="first_name" placeholder="الاسم القانوني الأول " type="text" class="form-control fs-3 ">
                                           
          </div>
          <div class="col-md-6 text-center mt-5">
            
            <input name="second_name" placeholder="الاسم القانوني الثاني " type="text" class="form-control fs-3 ">
                                           
          </div>
         
          <div class="col-md-6">
            <label for="name" class="form-label fs-3">رقم العمل</label>
            <input name="phone" placeholder="رقم العمل" type="text" class="form-control fs-3 ">
                                           
          </div>
          <div class="col-md-6">
            <label for="name" class="form-label fs-3">المدينة/عنوان العمل</label>
            <input name="adderss" placeholder="عنوان العمل" type="text" class="form-control fs-3 ">
                                           
          </div>
          <div class="col-md-6">
            <label for="name" class="form-label fs-3">المنطقة/عنوان العمل</label>
            <input name="city" placeholder="المدينة" type="text" class="form-control fs-3 ">
                                           
          </div>
          <div class="col-md-6">
            <label for="name" class="form-label fs-3">المحافظة/عنوان العمل</label>
            <input name="province" placeholder="المدينة" type="text" class="form-control fs-3 ">
                                           
          </div>
          <div class="col-md-6">
            <label for="name" class="form-label fs-3">الرمز البريدي</label>
            <input name="adderss" placeholder="الرمز البريدي" type="text" class="form-control fs-3 ">
                                           
          </div>
        
        
          <div class="col-12">
            <button type="submit" class="btn login-btn">الموافقة و إنشاء حساب</button>
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
    @notifyJs
</body>
</html>