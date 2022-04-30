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
    <section class="login-form container justify-content-center pt-4 pb-4  ">
        <div class="row section-header text-center p-4">
          <div class="col-12">
              <h2>roor3hakimi@gmail.com</h2>
          </div>
        </div>
        <form class="login-form row container g-3s text-center "  >
         
           <div class="row">
               <div class="col-6">
                   <input type="text" placeholder="0.0" class="form-control">
                 

               </div>
  
            <div class="col-6 ">
                <select name="" id="" class="px-4  fs-3">
                    <option selected>URE</option>
                     <option value="USD">USD</option>
                     <option value="YER">YER</option>
                 </select>
            
            </div>
         
            
            <div class="col-12 mt-5">
              <button type="submit" class="btn login-btn">استمرار</button>
              <button type="submit" class="btn btn-primary">الغاء</button>
            </div><hr>
          </form>
      </section>