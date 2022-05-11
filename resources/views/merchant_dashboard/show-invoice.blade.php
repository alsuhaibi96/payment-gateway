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
                                                <div class="mr-3">
                                                    <small class="text-muted"> تاريخ البدء :</small>
                                                    <span>08/10/2019</span>
                                                </div>
                                                <div>
                                                    <small class="text-muted">إلى يوم:</small>
                                                    <span>08/10/2019</span>
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
                                        <div class="col-sm-6 col-12 text-center text-sm-right order-1 order-sm-2 d-sm-flex justify-content-end mb-1 mb-sm-0">
                                            <img src="../../../app-assets/images/pages/pixinvent-logo.png" alt="logo" height="46" width="164">
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- invoice address and contact -->
                                    <div class="row invoice-info">
                                        <div class="col-sm-6 col-12 mt-1">
                                            <h6 class="invoice-from">Bill From</h6>
                                            <div class="mb-1">
                                                <span>Clevision PVT. LTD.</span>
                                            </div>
                                            <div class="mb-1">
                                                <span>9205 Whitemarsh Street New York, NY 10002</span>
                                            </div>
                                            <div class="mb-1">
                                                <span>hello@clevision.net</span>
                                            </div>
                                            <div class="mb-1">
                                                <span>601-678-8022</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12 mt-1">
                                            <h6 class="invoice-to">Bill To</h6>
                                            <div class="mb-1">
                                                <span>Pixinvent PVT. LTD.</span>
                                            </div>
                                            <div class="mb-1">
                                                <span>203 Sussex St. Suite B Waukegan, IL 60085</span>
                                            </div>
                                            <div class="mb-1">
                                                <span>pixinvent@gmail.com</span>
                                            </div>
                                            <div class="mb-1">
                                                <span>987-352-5603</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <!-- product details table-->
                                <div class="invoice-product-details table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th scope="col">Item</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Cost</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col" class="text-right">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Frest Admin</td>
                                                <td>HTML Admin Template</td>
                                                <td>28</td>
                                                <td>1</td>
                                                <td class="text-primary text-right font-weight-bold">$28.00</td>
                                            </tr>
                                            <tr>
                                                <td>Apex Admin</td>
                                                <td>Anguler Admin Template</td>
                                                <td>24</td>
                                                <td>1</td>
                                                <td class="text-primary text-right font-weight-bold">$24.00</td>
                                            </tr>
                                            <tr>
                                                <td>Stack Admin</td>
                                                <td>HTML Admin Template</td>
                                                <td>24</td>
                                                <td>1</td>
                                                <td class="text-primary text-right font-weight-bold">$24.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- invoice subtotal -->
                                <div class="card-body pt-0 mx-25">
                                    <hr>
                                    <div class="row">
                                        <div class="col-4 col-sm-6 col-12 mt-75">
                                            <p>Thanks for your business.</p>
                                        </div>
                                        <div class="col-8 col-sm-6 col-12 d-flex justify-content-end mt-75">
                                            <div class="invoice-subtotal">
                                                <div class="invoice-calc d-flex justify-content-between">
                                                    <span class="invoice-title">Subtotal</span>
                                                    <span class="invoice-value">$76.00</span>
                                                </div>
                                                <div class="invoice-calc d-flex justify-content-between">
                                                    <span class="invoice-title">Discount</span>
                                                    <span class="invoice-value">- $09.60</span>
                                                </div>
                                                <div class="invoice-calc d-flex justify-content-between">
                                                    <span class="invoice-title">Tax</span>
                                                    <span class="invoice-value">21%</span>
                                                </div>
                                                <hr>
                                                <div class="invoice-calc d-flex justify-content-between">
                                                    <span class="invoice-title">Invoice Total</span>
                                                    <span class="invoice-value">$66.40</span>
                                                </div>
                                                <div class="invoice-calc d-flex justify-content-between">
                                                    <span class="invoice-title">Paid to date</span>
                                                    <span class="invoice-value">$00.00</span>
                                                </div>
                                                <div class="invoice-calc d-flex justify-content-between">
                                                    <span class="invoice-title">Balance (USD)</span>
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
                                            <span>Send Invoice</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-light-primary btn-block invoice-print">
                                            <span>print</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn">
                                        <a href="app-invoice-edit.html" class="btn btn-light-primary btn-block">
                                            <span>Edit Invoice</span>
                                        </a>
                                    </div>
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-success btn-block">
                                            <i class='bx bx-dollar'></i>
                                            <span>Add Payment</span>
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
