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
                                                    <label>الشركة</label>
                                                    <input type="text" class="form-control" placeholder="Company name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mt-1">
                                                        <thead>
                                                            <tr>
                                                                <th>Module Permission</th>
                                                                <th>Read</th>
                                                                <th>Write</th>
                                                                <th>Create</th>
                                                                <th>Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>المستخدمين</td>
                                                                <td>
                                                                    <div class="checkbox"><input type="checkbox" id="users-checkbox1" class="checkbox-input" checked>
                                                                        <label for="users-checkbox1"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="checkbox"><input type="checkbox" id="users-checkbox2" class="checkbox-input"><label for="users-checkbox2"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="checkbox"><input type="checkbox" id="users-checkbox3" class="checkbox-input"><label for="users-checkbox3"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="checkbox"><input type="checkbox" id="users-checkbox4" class="checkbox-input" checked>
                                                                        <label for="users-checkbox4"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>التجار</td>
                                                                <td>
                                                                    <div class="checkbox"><input type="checkbox" id="users-checkbox5" class="checkbox-input"><label for="users-checkbox5"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="checkbox"><input type="checkbox" id="users-checkbox6" class="checkbox-input" checked>
                                                                        <label for="users-checkbox6"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="checkbox"><input type="checkbox" id="users-checkbox7" class="checkbox-input"><label for="users-checkbox7"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="checkbox"><input type="checkbox" id="users-checkbox8" class="checkbox-input" checked>
                                                                        <label for="users-checkbox8"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>المشرفين</td>
                                                                <td>
                                                                    <div class="checkbox"><input type="checkbox" id="users-checkbox9" class="checkbox-input" checked>
                                                                        <label for="users-checkbox9"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="checkbox"><input type="checkbox" id="users-checkbox10" class="checkbox-input" checked>
                                                                        <label for="users-checkbox10"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="checkbox"><input type="checkbox" id="users-checkbox11" class="checkbox-input"><label for="users-checkbox11"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="checkbox"><input type="checkbox" id="users-checkbox12" class="checkbox-input"><label for="users-checkbox12"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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