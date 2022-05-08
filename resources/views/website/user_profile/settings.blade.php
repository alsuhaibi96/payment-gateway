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
</head>
<body>
    <header>
        <a href="#" class="logo">WASL  <i class="fas fa-wallet"></i></a>
    <nav class="navbar ">
  
                <a class="active" href="#">لوحة التحكم</a>
              
    
                <a href="#">المساعدة</a>
              
  
      
    </nav>
    <div class="icon">
        <i class="fas fa-bars toogle" id="menu-bars"></i> 
       <i class="fas fa-bell"></i>
       <i class="fas fa-cog "></i>
     <a href="{{ route('logout') }}" >تسجيل الخروج</a>
   </div>
    </header>
   
  
    <!--Second navbar-->
    <br><br><br>
    <div class="head">
    <nav class="navbar">
        
                <a  href="/settings">حسابي</a>
                <a href="/security">الامان</a>
                <a href="/privacy">خصوصية البيانات</a>
               
               
    </nav>

</div>  

<section class="d-flex justify-content-around">
    <div class="card w-50 m-2 " >
        <div class="card-body ">
          <h5 class="card-title display-2 m-5 fw-bold">اعداد الملف الشخصي</h5>
          <div class="d-flex justify-content-start ">
        <img  class="rounded" style="width: 90px;" src="{{url('assets/web/images/avater.jpg')}}" alt="">
        <h6 class="m-5 fs-1 fw-bold">Roaa Tareq</h6>
        <h6 class="m-5 fs-1">انضم في 2022 </h6>
        <a href="#" class="card-link fs-3 fw-bold">تغيير الاسم</a>
        
    </div>
    
    <a href="#" class="card-link fs-3 text-success fw-bold">تحديث الصورة</a>
    <hr>
         
          
        </div>
      </div>
      <div class="card w-50 m-2 border-0" >
        <div class="card-body ">
            <div class="d-flex justify-content-between flex-wrap ">
          <h5 class="card-title display-2 m-5 fw-bold">العنواين</h5>
          <a href="#" class="card-link fs-3 m-5 "><i class="fa fa-plus"></i> اضافة عنوان</a>
        </div>
        
        <h6 class="mb-3 me-5 fs-1 fw-bold">صنعاء</h6>
        
        <h6 class="me-5 mb-5 fs-1">شارع هائل <br>,شارع20,123123123  </h6>
       
        
    
    
    <a href="#" class="card-link fs-3 text-success me-5 ">... جميع العناوين</a>
    <hr>
         
          
        </div>
      </div>

</section>

<section class="d-flex justify-content-around ">
    <div class="card w-50 m-2 border-0" >
        <div class="card-body ">
          <h5 class="card-title display-2 m-5 fw-bold">خيارات الحساب</h5>
          <div class="d-flex justify-content-start mb-5">
       
        <h6 class="ms-5 fs-1 fw-bold">اللغة</h6>
        <select class="form-select h-25 fs-4 ms-5 ">
            <option selected>language</option>
            <option value="1">English</option>
            <option value="2">Arabic</option>
 
          </select>
       
        
    </div>
    <div class="d-flex justify-content-start flex-wrap mb-5">
        <h6 class="ms-5 fs-1 fw-bold">الجنسية</h6>
        <h6 class="fs-1">اليمن</h6>
    </div>
    <div class="d-flex justify-content-start flex-wrap mb-5">
        <h6 class="ms-5 fs-1 fw-bold">معرف التاجر</h6>
        <h6 class="fs-1">12wdrtttttg654</h6>
    </div>
   
    <hr>
    <br>
    <a href="#" class="card-link fs-3 text-success fw-bold">اغلاق الحساب</a>
         
          
        </div>
      </div>
      <div class="card w-50 m-2 border-0" >
        <div class="card-body ">
            <div class="d-flex justify-content-between flex-wrap ">
          <h5 class="card-title display-2 m-5 fw-bold">الايميلات</h5>
          <a href="#" class="card-link fs-3 m-5 "><i class="fa fa-plus"></i> اضافة ايميل</a>
        </div>
        
        <div class="d-flex justify-content-around flex-wrap mb-5">
            <h6 class="ms-5 fs-1">roor3hakimi@gmail.com</h6>
            <a href="#" class="card-link fs-3 fw-bold">تغيير الايميل</a>
        </div>
       
        
    
    
    <p class="fs-4 m-5 text-wrap">لتحديث عنوان بريد إلكتروني ، يجب أن يكون لديك عنواني بريد إلكتروني على الأقل في الملف.</p>
    <hr>
         
          
        </div>
      </div>
      

</section>

<section class="d-flex justify-content-start ">
    <div class="card w-50 m-2 border-0" >
        <div class="card-body ">
            <div class="d-flex justify-content-between flex-wrap ">
                <h5 class="card-title display-2 m-5 fw-bold">ارقام الهواتف</h5>
                <a href="#" class="card-link fs-3 m-5 "><i class="fa fa-plus"></i> اضافة رقم</a>
              </div>
          <div class="d-flex justify-content-around mb-5">
       
        <h6 class="ms-5 fs-1 ">+967 77 *******0</h6>
        <a href="#" class="card-link fs-3  fw-bold">تغيير </a>
        
       
        
    </div>
   
   
    <hr>
    <br>
  
         
          
        </div>
      </div>
   
      

</section>
</body>
</html>