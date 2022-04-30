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
       <i class="fas fa-cog "></i>
     <a href="#" >تسجيل الخروج</a>
   </div>
    </header>
   
  
    <!--Second navbar-->
    <br><br><br>
    <div class="head">
    <nav class="navbar">
        
                <a  href="/settings">حسابي</a>
                <a href="/security">الامان</a>
                <a href="/privacy">خصوصية البيانات</a>
                <a href="/payment"> المدفوعات</a>
    
                <a href="/notifications">الاشعارات</a>
               
    </nav>
   


</div> 
<section >
    <h2 class="display-2 mb-4">إشعارات</h2>
    <p class="fs-3 mb-5">اختر الطريقة التي تريدها للحصول على تحديثات حول مدفوعاتك ، والرصيد المنخفض ، والتحديثات التسويقية ذات الصلة.</p>
    <div class="card w-75 m-2 " >
        <div class="card-body ">
         
          
       
        <h6 class="m-5 fs-1 ">مدفوعات</h6>
        <p class="fs-3 m-5">سنخبرك متى</p>
        <p class="fs-3 m-5">ارسال اموال</p>
        <form action="">
        <div class="form-check form-switch me-5 mb-5">
            <input class="form-check-input fs-3 " type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label fs-3 " for="flexSwitchCheckChecked">لديك مشكلة في الدفع</label>
          </div>
          <div class="form-check form-switch me-5 mb-5">
            <input class="form-check-input fs-3 " type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label fs-3 " for="flexSwitchCheckChecked">تلقي دفعة</label>
          </div>
        </form>
    
    
    
    <hr>
     
    <h6 class="m-5 fs-1 ">اجتماعي</h6>
    <p class="fs-3 m-5">سنخبرك متى</p>
    <p class="fs-3 m-5">محادثة</p>
    <form action="">
    <div class="form-check form-switch me-5 mb-5">
        <input class="form-check-input fs-3 " type="checkbox" id="flexSwitchCheckChecked" checked>
        <label class="form-check-label fs-3 " for="flexSwitchCheckChecked">إيميل</label>
      </div>
    </form>
    <hr>
   
    
    
         
          
        </div>
      </div>
    
      

</section>
</body>
</html>