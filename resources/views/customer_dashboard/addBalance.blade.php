@extends('layout.dashboard_master')

@section('header')
<span class="nav navbar-nav float-left">
    <b>
   إضافة رصيد
    </b>
</span>
@endsection

@section('content')

                <li class=" nav-item"><a href="#"> <i class="fas fa-desktop"> </i><span class="menu-title text-truncate" data-i18n="Dashboard">لوحة التحكم</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="eCommerce"> رصيدك الحالي</span>  <span class="badge badge-light-danger badge-pill badge-round float-right mr-50 ml-auto"> 89k Y.R </span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('home') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Analytics">عرض الإحصائيات</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="{{ route('index') }}"> <i class="fas fa-house"></i> <span class="menu-title text-truncate" data-i18n="Email"> الرئيسية - Home</span></a>
                </li>

                <li class="active nav-item"><a href="{{ route('addBalance') }}"> <i class="fas fa-circle-plus"></i> <span class="menu-title text-truncate" data-i18n="Colors">إضافة رصيد</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('withdraw') }}"> <i class="fas fa-circle-minus">  </i> <span class="menu-title text-truncate" data-i18n="Icons">سحب رصيد </span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('transfer') }}"> <i class="fas fa-exchange-alt"></i> <span class="menu-title text-truncate" data-i18n="Card">تحويل رصيد</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('deposit') }}"> <i class="fas fa-money-check-alt"></i> <span class="menu-title text-truncate" data-i18n="Widgets">إيداع إلى حساب</span><span class="badge badge-light-primary badge-pill badge-round float-right ml-auto">New</span></a>
                </li>

                <li class=" nav-item"><a href="#change currency || Language">  <i class="fas fa-gear">  </i>  <span class="menu-title text-truncate" data-i18n="Calendar">إعدادات - Settings </span></a>
                </li>

                <li class=" navigation-header text-truncate"><span data-i18n="Forms &amp; Tables">الدعم الفني</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="fas fa-bug"></i> <span class="menu-title text-truncate" data-i18n="Form Layout"> الإبلاغ عن مشكلة</span></a>
                </li>
        </div>
    </div>
    <!-- END: Main Menu-->



    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- app invoice View Page -->
                <section class="invoice-edit-wrapper">
                    <div class="row">
                        <!-- invoice view page -->
                        <div class="col-xl-9 col-md-8 col-12">
                            <div class="card">
                                <div class="card-body pb-0 mx-25">
                                    <!-- header section -->
                                    <div class="row mx-0">
                                        <div class="col-xl-6 col-md-12 d-flex align-items-center pl-0">
                                            <span class="text-primary"><b> رصيدك الحالي </b> </span>
                                        </div>

                                        <div class="col-xl-6 col-md-12 d-flex align-items-center pl-0">
                                            <span class="text-success display-6"><b> 89k YER </b> </span>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- logo and title -->
                                    <div class="row my-2">
                                        <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                            <span class="text-dark"><b> بيانات الحساب </b> </span>
                                        </div>
                                    </div>
                                        <div class="col-sm-6 col-12 order-2 order-sm-1">
                                            <div class="row">
                                                <div class="col-12 py-20">
                                                     <label class="text-dark">رقم البطاقة</label>
                                                     <input type="text" class="form-control" placeholder="1406####35" readonly>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                               <div class="col-6">
                                                   <label class="text-dark">الاسم الرباعي</label>
                                                   <input type="text" class="form-control fs-6" placeholder="الاسم">
                                               </div>
                                               <div class="col-2">

                                               </div>

                                            <div class="col-4">
                                                <label class="text-dark">كلمة المرور</label>
                                                <input type="password" class="form-control" placeholder="****">
                                             </div>
                                         </div>
                                        </div>


                                    <hr>
                                    <!-- invoice address and contact -->

                                    <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                        <span class="text-dark"><b>المبلغ المضاف </b> </span>
                                    </div>

                                    <div class="row invoice-info">
                                        <div class="row">
                                            <div class="col-6">
                                                <fieldset class="invoice-address form-group">
                                                    <input type="text" class="form-control" placeholder="قيمة المبلغ">
                                                </fieldset>
                                            </div>


                                            <div class="col-2">
                                                <div class="input-group-text">
                                                    <label for="yer" class="text-dark"> YER </label>
                                                    <input name="currency" id="YER" type="radio" aria-label="yer" required>
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <div class="input-group-text">
                                                    <label for="sar" class="text-dark"> SAR </label>
                                                    <input name="currency" id="SAR" type="radio" aria-label="sar">
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group-text">
                                                    <label for="$" class="text-dark"> $USD </label>
                                                    <input name="currency" id="USD" type="radio" aria-label="$">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-12 mt-25">


                                            <fieldset class="invoice-address form-group">
                                                <textarea class="form-control" rows="4" placeholder="وصف / تفاصيل"></textarea>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="card-body pt-50">
                                    <!-- invoice subtotal -->
                                    <hr>
                                    <div class="invoice-subtotal pt-50">
                                        <div class="row">
                                            <div class="col-md-5 col-12">
                                                <div class="d-flex justify-content-between py-50">
                                                    <span class="invoice-terms-title">إرسال نسخة عبر الإيميل</span>
                                                    <div class="custom-control custom-switch custom-switch-glow">
                                                        <input type="checkbox" class="custom-control-input" checked id="paymentTerm">
                                                        <label class="custom-control-label" for="paymentTerm">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between py-50">
                                                    <span class="invoice-terms-title">إضافة إلى الفواتير</span>
                                                    <div class="custom-control custom-switch custom-switch-glow">
                                                        <input type="checkbox" class="custom-control-input" checked id="clientNote">
                                                        <label class="custom-control-label" for="clientNote">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-7 offset-lg-2 col-12">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                        <span class="invoice-subtotal-title">رصيدك الحالي</span>
                                                        <h6 class="invoice-subtotal-value mb-0">89k YER</h6>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                        <span class="invoice-subtotal-title">الرصيد المضاف</span>
                                                        <h6 class="invoice-subtotal-value mb-0">25k YER</h6>
                                                    </li>
                                                    <li class="list-group-item py-0 border-0 mt-25">
                                                        <hr>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between border-0 py-0">
                                                        <span class="invoice-subtotal-title">(YER)</span>
                                                        <h6 class="invoice-subtotal-value mb-0">114k </h6>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                        <span class="invoice-subtotal-title">(SAR)</span>
                                                        <h6 class="invoice-subtotal-value mb-0">770.2</h6>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                        <span class="invoice-subtotal-title">(USD)</span>
                                                        <h6 class="invoice-subtotal-value mb-0">$207.27</h6>
                                                    </li>
                                                    <li class="list-group-item border-0 pb-0">
                                                        <button class="btn btn-primary btn-block subtotal-preview-btn">تأكيد الطلب</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- invoice action  -->
                        <div class="col-xl-3 col-md-4 col-12">
                            <div class="card invoice-action-wrapper shadow-none border">
                                <div class="card-body">
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-primary btn-block invoice-send-btn">
                                            <i class="bx bx-send"></i>
                                            <span>إرسال الطلب</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-light-primary btn-block">
                                            <span>تحميل الطلب</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-light-primary btn-block">طباعة</button>
                                    </div>
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-light-primary btn-block">حفظ في المسوّدة</button>
                                    </div>
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-success btn-block">
                                            <i class='bx bx-dollar'></i>
                                            <span>إضافة رصيد آخر</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
