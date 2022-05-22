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
            <!-- app invoice View Page -->
            <section class="invoice-edit-wrapper">
                <div class="row">
                    <!-- invoice view page -->
                    <div class="col-xl-9 col-md-8 col-12">
                        <div class="card">
                            <div class="card-body pb-0 mx-25">

                               

                                
                                 <div class="row my-2">
                                    <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                        <span class="text-dark"><b> إضافة مستخدم  </b> </span>
                                    </div>
                                </div>
                                @if ($errors->any())
                                
                                    @foreach ($errors->all() as $err )
                                        <p class="alert alert-danger">{{ $err }}</p>
                                    @endforeach
                                
                                    
                                @endif
                                <form action="{{ route('save_user') }}" method="POST">
                                    @csrf
                                <div class=" order-2 order-sm-1">
                                    <div class="row">
                                        <div class="col-6 py-20">
                                             <label class="text-dark"> الاسم الاول </label>
                                             <input type="text" name="first_name" class="form-control" placeholder="الاسم الاول" >
                                        </div>
                                        <div class="col-6 py-20">
                                            <label class="text-dark"> الاسم الثاني </label>
                                            <input type="text" name="middle_name" class="form-control" placeholder="الاسم الثاني" >
                                       </div>
                                       <div class="col-6 py-20">
                                        <label class="text-dark"> اللقب </label>
                                        <input type="text" name="last_name" class="form-control" placeholder="اللقب" >
                                   </div>
                                        <div class="col-6 py-20">
                                            <label class="text-dark"> البريد الالكتروني  </label>
                                            <input type="text" name="email" class="form-control" placeholder="البريد الالكتروني" >
                                       </div>
                                       <div class="col-6 py-20">
                                        <label class="text-dark"> كلمة السر </label>
                                        <input type="text" name="password" class="form-control" placeholder="كلمة السر" >
                                   </div>
                                   <div class="col-6 py-20">
                                    <label class="text-dark">  تاكيد كلمة السر </label>
                                    <input type="text" name="confirm_password" class="form-control" placeholder=" تاكيد كلمة السر" >
                               </div>

                                       
                                        <div class="col-6">
                                            <label>الصلاحيات</label>
                                            <select class="form-control" name="roles">
                                               <option value="Super Admin">Super admin</option>
                                               <option value="Contnet Admin">Content Admin</option>
                                           
                                               
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label>الحالة</label>
                                            <select class="form-control" name="is_active">
                                                <option value="1">مفعل</option>
                                                <option value="0">غير مفعل</option>
                                            </select>
                                        </div>
                                      

                                    </div>

                                </div>

                                    

                                

                                
                            
                            <div class="card-body pt-50">
                                <!-- invoice subtotal -->
                                <hr>
                                <div class="invoice-subtotal pt-50">
                                    <div class="row">
                                        
                                       
                                           

                                                <li class="list-group-item border-0 pb-0">
                                                    <input type="submit" name="submit" class="btn btn-primary btn-block subtotal-preview-btn" value="إضافة مستخدم">
                                                </li>
                                           
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                 

                    
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->


@endsection