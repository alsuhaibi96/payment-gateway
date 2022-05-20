@extends('website.layouts.master')

@section('content')
<!-- start about section-->
<section class="mt-4  p-3 mb-2 blue-dark text-white d-flex justify-content-around">
    <div class="w-75 mt-5">
     <h1 class=" ms-5 m-5 display-1 fw-bold text-center" > عن وصل  <sub class="fs-3 text-success">خدمات الدفع الالكترونية</sub></h1><br>
     <p class=" ms-5 m-5 fs-3  text-center">
         وصل هي بوابتك الآمنة التي تمكّنك من تحويل المبالغ والقيام بعمليات الشراء ، وعرض فواتيرك بكل وضوح.
     </p>
    </div>
</section>
<section class="d-flex justify-content-around">
    <div class="card w-50 p-5 ">
        <div class="card-body   ">
          <h5 class="card-title "> <div class="icons d-flex align-items-center flex-column  ">

            <i class="fas fa-dollar-sign"></i><br>
            <span>مدفوعات</span>
       </h5><br>
          <p class="card-text fs-3 text-center">نحن نساعدك على دفع قيمة مشترياتك</p>
        </div>
        </div>
    </div>
      <div class="card w-50 p-5 mx-5">
        <div class="card-body">
          <h5 class="card-title"><div class="icons d-flex align-items-center flex-column ">
            <i class="fas fa-shipping-fast"></i><br>
            <span> فواتير العمليات</span></h5><br>
          <p class="card-text fs-3 text-center">نحن نساعدك على عرض فواتيرك الاسبوعية والشهرية</p>
        </div>
        </div>
      </div>
      <div class="card w-50 p-5 ">
        <div class="card-body ">
          <h5 class="card-title">
            <div class="icons d-flex align-items-center flex-column ">
            <i class="fas fa-headset"></i><br>
            <span>7/24 خدمة</span></h5><br>
          <p class="card-text fs-3 text-center"> في أي وقت يمكنك الشراء والدفع من خلال موقعنا ، خدماتنا متوفرة لـ 24  ساعة </p>
        </div>
        </div>
      </div>
</section>

@endsection
