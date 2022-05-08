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
                        <p class="para">قمنا بتوفير واجهة  برمجية سهلة ومرنة بحيث تمكن المطورين من القيام بجميع عمليات الدفع الالكتروني بسهولة</p>
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
    <section class="about" id="about">

        <a href="#" class="logo">WASL Pay<i class="fas fa-wallet"></i></a>
        <h1 class="sub-head"> من نحن</h1>

        <div class="row">
            <div class="image">
                <img src="{{url('assets/web/images/pexels-karolina-grabowska-5632371-removebg-preview.png')}}" alt="">
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
                    <a class="btn" href="/about-us">أعرف اكثر</a>
                </div>

            </div>
        </div>

    </section>
    <!--end about us-->
    <!--start our menu-->

    <!--end our menu-->
    <!--start review customers-->
    <section class="review" id="customer">
        <!-- <h3 class="sub-heading">العملاء</h3> -->
        <h1 class="heading"> من عملائنا</h1>
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
    <!--start order section-->

    <!--end order section-->
    <!--start footer section -->
    <section class="footer" id="contact">
        <div class="fotterBox">
            <div class="Box">
                <h3>اقسام الموقع</h3>
                <a href="#home">لوحة التحكم</a>
                <a href="#menus">الرئيسية</a>
                <a href="#dishes">من نحن</a>
                <a href="#order">عملائنا</a>
                <a href="#about"> التواصل</a>
            </div>
            <div class="Box">
                <h3 class="">معلومات التواصل</h3>
                <a>00967-777604785</a>
                <a> - صنعاءاليمن -</a>
                <a>www.yemenpay.com</a>
            </div>
            <div class="Box">
                <h3 >يمكن ايجادنا عبر منصات التواصل</h3>
                <a href="www.facebook.com"> FaceBook</a>
                <a href="www.twitter.com">Twitter</a>
                <a href="#">Telegram</a>
                <a href="#">Instagram</a>
            </div>
        </div>
        </div>

    </section>

    @endsection
