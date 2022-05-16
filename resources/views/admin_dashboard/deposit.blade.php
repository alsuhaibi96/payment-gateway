@extends('layout.admin_dashboard')


@section('header')
<span class="nav navbar-nav float-left">
    <b>
 سحب رصيد
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
            <!-- deposit balance Page -->
            <section class="invoice-edit-wrapper">
                <div class="row">
                    <!-- deposit balance form -->
                    <div class="col-xl-9 col-md-8 col-12">
                        <div class="card">
                            <div class="card-body pb-0 mx-25">

                               

                                 <!-- enter data of user name -->
                                 <div class="row my-2">
                                    <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                        <span class="text-dark"><b> إضافة مبلغ السحب </b> </span>
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
                                                <label for="">المبلغ </label>
                                                <input type="text" class="form-control" placeholder="قيمة المبلغ">
                                            </fieldset>
                                        </div>

                                    </div>

                                </div>

                                    

                                

                                
                            
                            <div class="card-body pt-50">
                                <!-- deposit subtotal -->
                                <hr>
                                <div class="invoice-subtotal pt-50">
                                    <div class="row">
                                        
                                       
                                           

                                                <li class="list-group-item border-0 pb-0">

                                                    <button class="btn btn-primary btn-block subtotal-preview-btn">سحب رصيد</button>

                                                </li>
                                           
                                    </div>
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

@endsection