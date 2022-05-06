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
               
               
    </nav>

</div>  
<section class="d-flex justify-content-around">
    <div class="card-body">
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group col-md-3">
            <label for="name">Name</label>
            <input type="text" class="form-control p-3" name="name" id="name" value="">
        </div>
       <button class="btn btn-success" type="submit"> update</button>
    </form>
</div>
    <hr>
         
          
       
</section>
</body>
</html>