@extends('layout.customer_dashboard')

@section('addBalance')
    active
@endsection


@section('header')
    <span class="nav navbar-nav float-left">
        <b>
            إضافة رصيد
        </b>
    </span>
@endsection

<!-- BEGIN: Content-->
<div class="app-content content">

    <div class="content-wrapper">

        <div class="content-body">

             <section class="invoice-edit-wrapper">
                <div class="row">

                    <div class="col-xl-9 col-md-8 col-12">
                        <div class="card">
                            <div class="card-body pb-0 mx-25">

                                <!-- Card Title -->
                                <div class="row my-2">
                                    <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                        <span class="text-dark"><b> إضافة رصيد </b> </span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-6 py-20">
                                            <label class="text-dark"> البريد الالكتروني أو الid </label>
                                            <input type="text" class="form-control" placeholder="Reciever Name">
                                        </div>


                                        <div class="col-6">
                                            <fieldset class=" form-group">
                                                <label for="">المبلغ </label>
                                                <input type="text" class="form-control" placeholder="قيمة المبلغ">
                                            </fieldset>
                                        </div>

                                    </div>

                                </div>







                                <div class="card-body pt-50">
                                    <!--Button -->
                                    <hr>

                                    <div class="row">




                                        <li class="list-group-item border-0 pb-0">
                                            <button class="btn btn-primary btn-block">إضافة
                                                رصيد</button>
                                        </li>

                                    </div>
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

@section('content')
@endsection
