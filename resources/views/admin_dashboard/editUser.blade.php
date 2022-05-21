@extends('layout.admin_dashboard')


@section('header')
<span class="nav navbar-nav float-left">
    <b>
 تعديل المستخدم
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
                <!-- users edit start -->
                <section class="users-edit">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                        <i class="bx bx-user mr-25"></i><span class="d-none d-sm-block">حساب المستخدم</span>
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active fade show" id="account" aria-labelledby="account-tab" role="tabpanel">
                                   
                                    
                                    <!-- users edit account form start -->
                                    <form class="form-validate">
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>اسم المستخدم</label>
                                                        <input type="text" class="form-control" placeholder="Username" value="dean3004" name="username">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>اللقب</label>
                                                        <input type="text" class="form-control" placeholder="Name" value="Dean Stanley" name="name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>البريد الالكتروني</label>
                                                        <input type="email" class="form-control" placeholder="Email" value="deanstanley@gmail.com" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>الصلاحيات</label>
                                                    <select class="form-control">
                                                        <option>المستخدم</option>
                                                        <option>التاجر</option>
                                                        <option>المشرف</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>الحالة</label>
                                                    <select class="form-control">
                                                        <option>نشط</option>
                                                        <option>محظور</option>
                                                        <option>مقفل</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>كلمة السر</label>
                                                    <input type="text" class="form-control" placeholder="كلمة السر">
                                                </div>
                                            </div>
                                           
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ التغييرات</button>
                                                <button type="reset" class="btn btn-light">الغاء</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit account form ends -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection