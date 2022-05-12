@extends('layout.dashboard_master')

@section('header')
<span class="nav navbar-nav float-left">
    <b>
    تحويل رصيد
    </b>
</span>
@endsection

@section('transfer')
    active
@endsection

@section('content')


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

                                        <!-- logo and title -->
                                        <div class="row mb-2">
                                            <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                                <span class="text-dark"><b> بيانات المرسل </b> </span>
                                            </div>
                                        </div>
                                        <div class=" order-2 order-sm-1">
                                            <div class="row">
                                                <div class="col-6 py-20">
                                                     <label class="text-dark"> اسم المرسل (English)</label>
                                                     <input type="text" class="form-control" placeholder="Mo'khtar Mohammed Ghaleb" readonly>
                                                </div>
                                                <div class="col-6 py-20">
                                                    <label class="text-dark"> اسم المرسل (عربي) </label>
                                                    <input type="text" class="form-control" placeholder="مختار محمد غالب" readonly>
                                               </div>

                                            </div>

                                        </div>

                                            <div class="col-12">
                                                <div class="row">
                                                   <div class="col-6">
                                                       <label class="text-dark"> رقم الجوال </label>
                                                       <input type="text" class="form-control fs-6" placeholder="+967">
                                                   </div>


                                                <div class="col-6">
                                                    <label class="text-dark"> تاريخ التحويل </label>
                                                    <input type="password" class="form-control" placeholder="10/2/2022" readonly>
                                                 </div>
                                             </div>
                                            </div>


                                        <hr>

                                         <!-- logo and title -->
                                         <div class="row my-2">
                                            <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                                <span class="text-dark"><b> بيانات المستلم </b> </span>
                                            </div>
                                        </div>
                                        <div class=" order-2 order-sm-1">
                                            <div class="row">
                                                <div class="col-6 py-20">
                                                     <label class="text-dark"> اسم المستلم (English)</label>
                                                     <input type="text" class="form-control" placeholder="Reciever Name" >
                                                </div>

                                                <div class="col-6 py-20">
                                                    <label class="text-dark"> اسم المستلم (عربي)</label>
                                                    <input type="text" class="form-control" placeholder="اسم المستلم" >
                                               </div>

                                            </div>

                                        </div>

                                            <div class="col-12">
                                                <div class="row">
                                                   <div class="col-6">
                                                       <label class="text-dark"> رقم الجوال </label>
                                                       <input type="text" class="form-control fs-6" placeholder="00967-71234567">
                                                   </div>


                                                <div class="col-6">
                                                    <label class="text-dark"> رقم الحساب </label>
                                                    <input type="password" class="form-control" placeholder="0000 0000 0000 0000">
                                                 </div>
                                             </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="row">

                                                    <div class="dropdown text-dark">
                                                        <button class="btn btn-white border border-1 btn-sm dropdown-toggle text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         العلاقة
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item" href="">عمل</a>
                                                          <a class="dropdown-item" href="">أصدقاء</a>
                                                          <a class="dropdown-item" href="">أقارب</a>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>


                                        <hr>

                                        <!-- invoice address and contact -->

                                        <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start mb-2">
                                            <span class="text-dark"><b> مبلغ التحويل </b> </span>
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
                                                        <span class="invoice-terms-title">المبلغ شامل الضريبة</span>
                                                        <div class="custom-control custom-switch custom-switch-glow">
                                                            <input type="checkbox" class="custom-control-input" checked id="paymentTerm">
                                                            <label class="custom-control-label" for="paymentTerm">
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-lg-5 col-md-7 offset-lg-2 col-12">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                            <span class="invoice-subtotal-title">رصيدك الحالي</span>
                                                            <h6 class="invoice-subtotal-value mb-0">114k YER</h6>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                            <span class="invoice-subtotal-title">المبلغ المحوّل</span>
                                                            <h6 class="invoice-subtotal-value mb-0">25k YER</h6>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                            <span class="invoice-subtotal-title">ضريبة التحويل</span>
                                                            <h6 class="invoice-subtotal-value mb-0">200 YER</h6>
                                                        </li>

                                                        <li class="list-group-item border-0 pb-0">
                                                            <button class="btn btn-primary btn-block subtotal-preview-btn">تأكيد العملية</button>
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
                                                <span>إرسال العملية</span>
                                            </button>
                                        </div>
                                        <div class="invoice-action-btn mb-1">
                                            <button class="btn btn-light-primary btn-block">
                                                <span>تحميل العملية PDF</span>
                                            </button>
                                        </div>
                                        <div class="invoice-action-btn mb-1">
                                            <button class="btn btn-light-primary btn-block">طباعة</button>
                                        </div>
                                        <div class="invoice-action-btn mb-1">
                                            <button class="btn btn-light-primary btn-block">حفظ في المسوّدة</button>
                                        </div>
                                        <div class="invoice-action-btn mb-1">
                                            <button class="btn btn-danger btn-block">
                                                <i class='bx bx-dollar'></i>
                                                <span> تحويل مبلغ آخر </span>
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
