<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>settings</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700&display=swap" 
    rel="stylesheet">
     <!--font icon-->
     <link rel="stylesheet" href="{{url('assets/web/css/all.min.css')}}"/>
     <link rel="stylesheet" href="{{url('assets/web/path/to/font-awesome/css/font-awesome.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--custom css file link-->
    <link rel="stylesheet" href="{{url('assets/web/css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <a href="#" class="logo">WASL  <i class="fas fa-wallet"></i></a>
    <nav class="navbar ">
  
                <a class="active" href="#">لوحة التحكم</a>
                <a  href="#">إرسال</a>
                <a href="#">المحفظة</a>
                <a href="#"> الانشطة</a>
    
                <a href="#">المساعدة</a>
              
  
      
    </nav>
    <div class="icon">
        <i class="fas fa-bars toogle" id="menu-bars"></i> 
     <i class="fas fa-bell"></i>
     <a href="/settings">  <i class="fas fa-cog "></i></a>
     <a href="#" >تسجيل الخروج</a>
   </div>
    </header>
    <section class="mt-5">
        <div class="card w-50 mt-5 p-5" >
            <div class="card-body">
                <a href="#" class="card-link fs-3 fw-bold ">النشاطات الاخيرة</a>
              
              <p class="card-text fs-3 mt-5 ">ستظهر النشاطات الاخيرة هنا.</p>
              <hr>
              <a href="#" class="card-link fs-3 fw-bold ">بطاقات</a>
              <p class="card-text fs-3 mt-5 ">تسوق وأرسل المدفوعات بشكل أكثر أمانًا. اربط بطاقتك الائتمانية الآن..</p>
              <a href="/card-info" class="card-link fs-3 fw-bold border px-5 border-success rounded text-success fw-bold ">ربط بطاقة</a>
            </div>
          </div>
    </section>
</body>
</html>
