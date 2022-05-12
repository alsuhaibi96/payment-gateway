@extends('layout.dashboard_master')


@section('header')
    <span class="nav navbar-nav float-left">
        <b>
            الإبلاغ عن مشكلة
        </b>
    </span>
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
                                           <span class="text-dark"><b> بيانات المشكلة </b> </span>
                                       </div>
                                   </div>
                                   <div class=" order-2 order-sm-1">
                                       <div class="row">
                                           <div class="col-6 py-20">
                                                <label class="text-dark"> العنوان </label>
                                                <input type="text" class="form-control" placeholder=" عنوان المشكلة... " >
                                           </div>

                                       </div>

                                   </div>



                                   <hr>

                                   <!-- invoice address and contact -->



                                   <div class="row invoice-info">
                                       <div class="row">








                                       </div>

                                       <div class="col-lg-12 col-md-12 mt-25">
                                        <label class="text-dark"> الوصف </label>

                                           <fieldset class="invoice-address form-group">
                                               <textarea class="form-control" rows="4" placeholder="تفاصيل المشكلة ... "></textarea>
                                           </fieldset>
                                       </div>
                                   </div>
                                   <hr>
                               </div>

                               <div class="col-lg-5 col-md-7 offset-lg-2 col-12 mb-3 mr-3">
                                <div class="col-12 border-0 pb-0">
                                    <button class="btn btn-primary btn-block subtotal-preview-btn">تأكيد الطلب</button>
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
