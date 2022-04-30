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

<section class="d-flex justify-content-around">
    <div class="card w-75 m-2 " >
        <div class="card-body ">
         
          <div class="d-flex justify-content-between flex-wrap ">
       
        <h6 class="m-5 fs-1 ">كلمة السر</h6>
       
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">تغيير كلمة السر</button>
{{-- model for change password --}}
        <div id="largeModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <h5 class="modal-title fs-3 fw-bold text-center">غير كلمة المرور الخاصة بك</h5>
                    <div class="modal-body">
                        <form action="">
                            <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label fs-3">قم بتأكيد كلمة مرورك الحالية</label>
                                <input type="password" class="form-control w-100 p-4 fs-3" id="exampleFormControlInput1" placeholder="كلمة السر الحالية">
                              </div>
                              <div class="col-6">
                                <label for="exampleFormControlInput1" class="form-label fs-3">أدخل كلمة المرور الجديدة (حافظ على أمان حسابك. لا تستخدم اسمك.)</label>
                                <input type="password" class="form-control  p-4 fs-3" id="exampleFormControlInput1" placeholder="كلمة سر جديدة">
                              </div>
                              <div class="col-6 mt-4">
                                <input type="password" class="form-control  p-4 fs-3" id="exampleFormControlInput1" placeholder="تاكيد كلمة السر">
                              </div>
                              <div class="col-6">
                                <button type="submit" class="btn btn-primary mb-3">تغير كلمة السر</button>
                              </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
 
                    </div>
                </div>
            </div>
        </div>
      
        
    </div>
    
    <p class="fs-3 me-5">إنشاء أو تحديث كلمة المرور الخاصة بك.</p>
    <hr>
    <div class="d-flex justify-content-between flex-wrap ">
       
        <h6 class="m-5 fs-1 ">التحقق بخطوتين</h6>
       
        <a href="#" class="card-link fs-3 fw-bold m-5">اعداد</a>
        
    </div>
    
    <p class="fs-3 me-5">أضف طبقة أمان إضافية إلى حسابك باستخدام رمز أمان يُستخدم لمرة واحدة بالإضافة إلى كلمة المرور الخاصة بك في كل مرة تقوم فيها بتسجيل الدخول.</p>
    <hr>
    <div class="d-flex justify-content-between flex-wrap ">
       
        <h6 class="m-5 fs-1 ">رقم التعريف الشخصي لخدمة العملاء</h6>
       
        <a href="#" class="card-link fs-3 fw-bold m-5">تحديث</a>
        
    </div>
    
    <p class="fs-3 me-5">رقم التعريف الشخصي لخدمة العملاء</p>
    <hr>
         
          
        </div>
      </div>
    
      

</section>
</body>
</html>