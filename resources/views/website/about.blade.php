@extends('website.layouts.master')

@section('content')
<!-- start about section-->
<section class="mt-4  p-3 mb-2 blue-dark text-white d-flex justify-content-around">
    <div class="w-75 mt-5">
     <h1 class=" ms-5 m-5 display-1 fw-bold text-center" > عن وصل  <sub class="fs-3 text-success">خدمات الدفع الالكترونية</sub></h1><br>
     <p class=" ms-5 m-5 fs-3  text-center">بوابة الدفع هي تقنية يستخدمها التجار لقبول مشتريات بطاقات الخصم أو الائتمان من العملاء.
      بوابات الدفع هي الواجهات التي تواجه المستهلك وتستخدم لجمع معلومات الدفع.
      في المتاجر عبر الإنترنت ، تعتبر بوابات الدفع بوابات "الخروج" المستخدمة لإدخال معلومات بطاقة الائتمان أو بيانات الاعتماد لخدمات مثل wasl.
      تختلف بوابات الدفع عن معالجات الدفع ، التي تستخدم معلومات العميل لتحصيل المدفوعات نيابة عن التاجر.
      يمكن للتجار الوصول إلى أنظمة بوابة الدفع من خلال الحصول على شراكات مصرفية للتاجر ، أو يمكنهم اختيار نظام بوابة الدفع الخاص بهم

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
          <p class="card-text fs-3 text-center"> في وقت يمكنك الشراء والدفع من حلال موقعنا خدماتنا متوفرة 24 ساعة </p>
        </div>
        </div>
      </div>
</section>

@endsection