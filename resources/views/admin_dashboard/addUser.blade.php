@extends('layout.admin_dashboard')


@section('header')
<span class="nav navbar-nav float-left">
    <b>
 إضافة مستخدم
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
            <!-- add user Page -->
            <section class="invoice-edit-wrapper">
                <div class="row">
                    <!-- user add form -->
                    <div class="col-xl-9 col-md-8 col-12">
                        <div class="card">
                            <div class="card-body pb-0 mx-25">

                               

                                
                                 <div class="row my-2">
                                    <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                        <span class="text-dark"><b> إضافة مستخدم  </b> </span>
                                    </div>
                                </div>
                                <div class=" order-2 order-sm-1">
                                    <div class="row">
                                        <div class="col-6 py-20">
                                             <label class="text-dark"> الاسم الاول </label>
                                             <input type="text" class="form-control" placeholder="الاسم الاول" >
                                        </div>
                                        <div class="col-6 py-20">
                                            <label class="text-dark"> الاسم الثاني </label>
                                            <input type="text" class="form-control" placeholder="الاسم الثاني" >
                                       </div>
                                       <div class="col-6 py-20">
                                        <label class="text-dark"> اللقب </label>
                                        <input type="text" class="form-control" placeholder="اللقب" >
                                   </div>
                                        <div class="col-6 py-20">
                                            <label class="text-dark"> البريد الالكتروني أو الid </label>
                                            <input type="text" class="form-control" placeholder="البريد الالكتروني" >
                                       </div>

                                       
                                        <div class="col-6">
                                            <label>الصلاحيات</label>
                                            <select class="form-control">
                                                <option>super admin</option>
                                               
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label>status</label>
                                            <select class="form-control">
                                                <option>active</option>
                                                <option>unActive</option>
                                            </select>
                                        </div>
                                      

                                    </div>

                                </div>

                                    

                                

                                
                            
                            <div class="card-body pt-50">
                                <!-- user subtotal -->
                                <hr>
                                <div class="invoice-subtotal pt-50">
                                    <div class="row">
                                        
                                       
                                           

                                                <li class="list-group-item border-0 pb-0">
                                                    <button class="btn btn-primary btn-block subtotal-preview-btn">إضافة مستخدم</button>
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