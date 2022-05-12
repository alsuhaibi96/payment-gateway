@extends('layout.dashboard_master')


@section('header')
    <span class="nav navbar-nav float-left">
        <b>
            الفواتير
        </b>
    </span>
@endsection

@section('invoices')
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
                <section class="invoice-view-wrapper">
                    <div class="row">
                        <!-- invoice view page -->
                        <div class="col-xl-9 col-md-8 col-12">
                            <div class="card invoice-print-area">
                                <div class="card-body pb-0 mx-25">
                                    <!-- header section -->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <span class="invoice-number mr-50">رقم الفاتورة#</span>
                                            <span>000756</span>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <div class="d-flex align-items-center justify-content-lg-end flex-wrap">
                                                <div>
                                                    <small class="text-muted">تاريخ الفاتورة:</small>
                                                    <span>08/10/2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- logo and title -->
                                    <div class="row my-2 my-sm-3">
                                        <div class="col-sm-6 col-12 text-center text-sm-left order-2 order-sm-1">
                                            <h4 class="text-primary">فاتورة</h4>
                                            <span> شراء أدوية السكر</span>
                                        </div>
                                        <div
                                            class="col-sm-6 col-12 text-center text-sm-right order-1 order-sm-2 d-sm-flex justify-content-end mb-1 mb-sm-0">
                                            <img src="{{ url('assets/app-assets/images/pages/PayPal_logo.png') }}"
                                                alt="logo" height="46" width="164">
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- invoice address and contact -->
                                    <div class="row invoice-info">
                                        <div class="col-sm-6 col-12 mt-1">
                                            <h6 class="invoice-from"> <b> بيانات المشتري </b> </h6>
                                            <div class="mb-1">
                                                <span>محمد أحمد</span>
                                            </div>
                                            <div class="mb-1">
                                                <span>صنعاء - شارع حدة ، جولة المصباحي</span>
                                            </div>
                                            <div class="mb-1">
                                                <span>mohammed@gmail.com</span>
                                            </div>
                                            <div class="mb-1">
                                                <span>6014-6782-8022</span>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                </div>
                                <!-- product details table-->
                                <div class="invoice-product-details table-responsive">
                                    <table class="table table-borderless mb-0;">
                                        <thead>
                                            <tr class="border-0">
                                                <th scope="col" style="     font-family: 'Amiri', serif;
                                                    font-family: 'Changa', sans-serif;
                                                    font-family: 'Tajawal', sans-serif;">المنتج</th>
                                                <th scope="col" style="     font-family: 'Amiri', serif;
                                font-family: 'Changa', sans-serif;
                                font-family: 'Tajawal', sans-serif;">الوصف</th>
                                                <th scope="col" style="     font-family: 'Amiri', serif;
                                font-family: 'Changa', sans-serif;
                                font-family: 'Tajawal', sans-serif;">التكلفة</th>
                                                <th scope="col" style="     font-family: 'Amiri', serif;
                                font-family: 'Changa', sans-serif;
                                font-family: 'Tajawal', sans-serif;">الكمية</th>
                                                <th scope="col" style="     font-family: 'Amiri', serif;
                                font-family: 'Changa', sans-serif;
                                font-family: 'Tajawal', sans-serif;" class="text-right">السعر</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="     font-family: 'Amiri', serif;
                                font-family: 'Changa', sans-serif;
                                font-family: 'Tajawal', sans-serif;">كاناجليفلوزين</td>
                                                <td style="     font-family: 'Amiri', serif;
                                font-family: 'Changa', sans-serif;
                                font-family: 'Tajawal', sans-serif;">دواء يستخدم لعلاج مرض السكري من النوع الثاني.</td>
                                                <td >28</td>
                                                <td >1</td>
                                                <td  class="text-primary text-right font-weight-bold">
                                                    $28.00</td>
                                            </tr>
                                            <tr>
                                                <td style="     font-family: 'Amiri', serif;
                                font-family: 'Changa', sans-serif;
                                font-family: 'Tajawal', sans-serif;">جليميبرايد </td>
                                                <td style="     font-family: 'Amiri', serif;
                                font-family: 'Changa', sans-serif;
                                font-family: 'Tajawal', sans-serif;">يُستخدم لعلاج ارتفاع مستويات السكر في الدم،</td>
                                                <td >24</td>
                                                <td >1</td>
                                                <td class="text-primary text-right font-weight-bold">
                                                    $24.00</td>
                                            </tr>
                                            <tr>
                                                <td style="     font-family: 'Amiri', serif;
                                font-family: 'Changa', sans-serif;
                                font-family: 'Tajawal', sans-serif;">برافستاتين </td>
                                                <td style="     font-family: 'Amiri', serif;
                                font-family: 'Changa', sans-serif;
                                font-family: 'Tajawal', sans-serif;"> يعمل عن طريق خفض انتاج الكوليسترول في الكبد</td>
                                                <td >24</td>
                                                <td >1</td>
                                                <td class="text-primary text-right font-weight-bold">
                                                    $24.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- invoice subtotal -->
                                <div class="card-body pt-0 mx-25">
                                    <hr>
                                    <div class="row">
                                        <div class="col-4 col-sm-6 col-12 mt-75">
                                            <p>شكرًا لشراءك منتجاتنا</p>
                                        </div>
                                        <div class="col-8 col-sm-6 col-12 d-flex justify-content-end mt-75">
                                            <div class="invoice-subtotal">
                                                <div class="invoice-calc d-flex justify-content-between">
                                                    <span class="invoice-title">المجموع الإجمالي</span>
                                                    <span class="invoice-value">$76.00</span>
                                                </div>
                                                <div class="invoice-calc d-flex justify-content-between">
                                                    <span class="invoice-title">الخصم</span>
                                                    <span class="invoice-value">- $09.60</span>
                                                </div>
                                                <div class="invoice-calc d-flex justify-content-between">
                                                    <span class="invoice-title">الضريبة</span>
                                                    <span class="invoice-value">21%</span>
                                                </div>
                                                <hr>
                                                <div class="invoice-calc d-flex justify-content-between">
                                                    <span class="invoice-title">المجموع للفاتورة</span>
                                                    <span class="invoice-value">$66.40</span>
                                                </div>

                                                <div class="invoice-calc d-flex justify-content-between">
                                                    <span class="invoice-title">الميزانية (USD)</span>
                                                    <span class="invoice-value">$10,953</span>
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
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-primary btn-block invoice-send-btn">
                                            <i class="bx bx-send"></i>
                                            <span>إرسال الفاتورة</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-light-primary btn-block invoice-print">
                                            <span>طباعة</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn ">
                                        <button class="btn btn-success btn-block">

                                            <span>عودة إلى الفواتير</span>
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
