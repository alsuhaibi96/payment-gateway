@extends('website.layouts.master')

@section('content')

<!--start home section-->
<section class="home" id="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide slide zero">
                <div class="content">
                    <h2>تتبع ادق تفاصيل اعمالك</h2>
                    <p class="para">لوحة التحكم توفر تقارير تفصيلية يومية | اسبوعية | شهرية لجميع اعمالك </p>
                </div>


            </div>
            <div class="swiper-slide slide one">
                <div class="content">
                    <h2>ربط سريع وسهل</h2>
                    <p class="para">قمنا بتوفير واجهة برمجية سهلة ومرنة بحيث تمكن المطورين من القيام بجميع عمليات الدفع الالكتروني بسهولة</p>
                </div>

            </div>
            <div class="swiper-slide slide two">
                <div class="content">
                    <h2>حلول دفع الكترونية متكاملة</h2>
                    <p class="para">نوفر حلول تمكنك من استقبال جميع المدفوعات الكترونيا </p>
                </div>

            </div>
            <div class="swiper-slide slide three">
                <div class="content">
                    <h2>ادارة ومتابعة العمليات المالية</h2>
                    <p class="para">توفر لوحة التحكم ادارة كاملة للحساب المالي حيث توفر تقارير تفصيلية عن حركة العمليات المالية في متجرك</p>
                </div>

            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

</section>
<!--end home section-->
<!--start about us-->
<section class="about pt-5" id="about">

    <a href="#" class="logo">وصل!<i class="fas fa-wallet"></i></a>
    <div class="row">
        <div class="image ">
            <img src="{{url('assets/web/images/monstera.png')}}" alt="">
            {{-- <a href="#" class="logo">WASL PAYMENT <i class="fas fa-wallet"></i></a> --}}
        </div>
        <div class="content">
            <h3>موقع الكتروني يوفر خدمات الدفع الالكتروني</h3>
            <p>
                موقع يوفر خدمات الدفع الالكتروني على مسوى الجمهورية اليمنية
            </p>
            <p>
                تحصل اموالك من جميع المتاجر الالكترونية بكل سهولة
            </p>
            <div class="icon-container">
                <div class="icons">
                    <span> فواتير العمليات</span>
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <div class="icons">
                    <span>مدفوعات</span>
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="icons">
                    <span>7/24 خدمة</span>
                    <i class="fas fa-headset"></i>
                </div>

            </div>
            <a class="btn text-white " href="/about-us">أعرف اكثر</a>

        </div>
    </div>

</section>
<!--end about us-->
<!--start our menu-->

<!--end our menu-->
<!--start review customers-->
<section class="review" id="customer">
    <!-- <h3 class="sub-heading">العملاء</h3> -->
    <h1 class="heading">  عملائنا</h1>
    <p class="product__description">
        لم يعد يخفى على أحد مدى أهمية حلول الدفع الالكتروني في عالم اليوم، مع الانتشار الواسع للأعمال عبر الانترنت وطغيانها على الأعمال التجارية التقليدية. فما من منتج أو خدمة إلا وبات متاحاً على أكناف الانترنت، سواء أكان معروضاً على مواقع التجارة الالكترونية المتزايدة باستمرار أو مواقع الشركات المزودة للخدمة. ومن هذا المنطلق، شهد فضاء الانترنت طلباً متزايداً على بوابات الدفع الالكتروني في العالم أجمع
        تشتمل حلول الدفع الالكتروني على باقة من المزايا للتجار وأصحاب الأعمال تمكّنهم من قبول المدفوعات ومضاعفة أرقام المبيعات لديهم،

        من خلال تسهيل عملية الدفع الالكتروني لزوّار الموقع وعملاءه المحتملين. نعم، فلكم أن تتخيّلوا كم تزيد احتمالية الشراء، وكم تتضاعف فرص تحويل الزائر إلى عميل بمجرّد توفير وسيلة دفع الكترونية سهلة وآمنة وموثوقة في نفس الوقت!
    </p>
    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{url('assets/web/images/logo two.jpg')}}" alt="">
                    <div class="user-info">
                        <h3>المزاد اليمني</h3>
                    </div>
                </div>
                <p>
                    الموقع الاشهر في اليمن للعرض و الطلب
                </p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{url('assets/web/images/logofour.jpg')}}" alt="">
                    <div class="user-info">
                        <h3>الصيدلية الالكترونية</h3>
                    </div>
                </div>
                <p>
                    موقع الكتروني يوفر صيدلية الكترونية
                </p>
                <div class="icon-container">
                    <div class="icons">
                        <span> فواتير العمليات</span>
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="icons">
                        <span>مدفوعات</span>
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="icons">
                        <span>7/24 خدمة</span>
                        <i class="fas fa-headset"></i>
                    </div>
                  
                </div>
                <a class="btn text-white " href="{{ route('about') }}">أعرف اكثر</a>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{url('assets/web/images/logo one.jpg')}}" alt="">
                    <div class="user-info">
                        <h3>فري لانس يمن</h3>

                    </div>
                </div>
                <p>
                    موقع الكتروني يوفر وضائف
                </p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{url('assets/web/images/logothree.jpg')}}" alt="">
                    <div class="user-info">
                        <h3>المدرسة الرقمية</h3>

                    </div>
                </div>
                <p>
                    موقع الكتروني يوفر كورسات و مراجع الكترونية للطلاب
                </p>
            </div>
        </div>
    </div>
</section>
<!--end review customers-->



@endsection