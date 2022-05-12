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
                                         <div class="row my-2">
                                            <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                                <span class="text-dark"><b> بيانات المستلم </b> </span>
                                            </div>
                                        </div>
                                        <div class=" order-2 order-sm-1">
                                            <div class="row">
                                                <div class="col-6 py-20">
                                                     <label class="text-dark"> البريد الالكتروني أو الid </label>
                                                     <input type="text" class="form-control" placeholder="Reciever Name" >
                                                </div>


                                                <div class="col-6">
                                                    <fieldset class="invoice-address form-group">
                                                        <label for=""> مبلغ التحويل </label>
                                                        <input type="text" class="form-control" placeholder="قيمة المبلغ">
                                                    </fieldset>
                                                </div>

                                            </div>

                                        </div>



                                        <hr>

                                        <!-- invoice address and contact -->



                                        <div class="row invoice-info">
                                            <div class="row">








                                            </div>

                                            <div class="col-lg-12 col-md-12 mt-25">


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
                                        <div class="invoice-subtotal pt-50 ">
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


                                                    </ul>
                                                    <div class="col-12 border-0 pb-0">
                                                        <button class="btn btn-primary btn-block subtotal-preview-btn">تأكيد العملية</button>
                                                    </div>
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
                                            <button class="btn btn-success btn-block">
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
