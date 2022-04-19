<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YEMEN pay</title>
    <!--walper slider library-->
    <link rel="stylesheet"href="{{url('assets/web/css/swiper-bundle.min.css')}}"/>
    <!--normalize library-->
    <link rel="stylesheet" href="{{url('assets/web/css/normalize.css')}}">
    <!--google font library-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700&display=swap" 
    rel="stylesheet">
    <!--font icon-->
    <link rel="stylesheet" href="{{url('assets/web/css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{url('assets/web/path/to/font-awesome/css/font-awesome.min.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--custom css file link-->
    <link rel="stylesheet" href="{{url('assets/web/css/style.css')}}">
</head>
<body>
    <!--start header section-->
    <header>
        <a href="#" class="logo">YEMEN $ Pay <i class="fas fa-wallet"></i></a>
        <nav class="navbar" id="menu">
            <a  href="#dashboard">لوحة التحكم</a>
            <a class="active" href="#home">الرئيسية</a>
            <a href="#about">من نحن</a>
            <a href="#customer"> عملائنا</a>
            <a href="#contact">التواصل</a>
            <a href="#documentation">Docs</a>
            <a href="#language">English</a>
        </nav>
        <div class="icon">
            <i class="fas fa-bars toogle" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            
        </div>
    </header>
    <!--end header section-->
    <!--start search form-->
    <form action="#" id="search-form">
        <input type="search" placeholder="أبحث ...." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!--end search form-->
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
        
        <a href="#" class="logo">YEMEN $ Pay <i class="fas fa-wallet"></i></a>
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
                    <a class="btn" href="#">أعرف اكثر</a>
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
    <footer class="footer-content">
        <p>جميع الحقوق محفوظة &copy; 2022 YEMEN $ Pay  </p>
    </footer>

    <!--start footer section -->








    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{url('assets/web/js/swiper-bundle.min.js')}}"></script>
    <!--custom js file link-->
    <script src="{{url('assets/web/js/main.js')}}"></script>
</body>
</html>