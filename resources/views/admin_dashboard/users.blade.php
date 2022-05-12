@extends('layout.admin_dashboard')


@section('header')
<span class="nav navbar-nav float-left">
    <b>
 عرض المستخدمين
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
            <!-- users list start -->
            <section class="users-list-wrapper">
                <div class="users-list-filter px-1">
                    <form>
                        <div class="row border rounded py-2 mb-2">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-verified">Verified</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-verified">
                                        <option value="">Any</option>
                                        <option value="Yes">نعم</option>
                                        <option value="No">لا</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-role">الصلاحيات</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-role">
                                        <option value="">Any</option>
                                        <option value="User">مستخدم</option>
                                        <option value="Staff">تاجر</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-status">الحالة</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-status">
                                        <option value="">Any</option>
                                        <option value="Active">النشطين</option>
                                        <option value="Close">Close</option>
                                        <option value="Banned">المحظورين</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                                <a href="{{ route('addUser') }}" class="btn btn-primary btn-block glow users-list-clear mb-0">إضافة مستخدم</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="users-list-table">
                    <div class="card">
                        <div class="card-body">
                            <!-- datatable start -->
                            <div class="table-responsive">
                                <table id="users-list-datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>البريد الالكتروني</th>
                                            <th>الاسم</th>
                                            <th>النشاطات الاخيرة</th>
                                            <th>verified</th>
                                            <th>الصلاحيات</th>
                                            <th>الحالة</th>
                                            <th>edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                     
                                       
                                      
                                       
                                         
                                       
                                       
                                       
                                       
                                        <tr>
                                            <td>320</td>
                                            <td><a href="../../../html/ltr/vertical-menu-template/app-users-view.html">hoyt0305</a>
                                            </td>
                                            <td>Hoyt Ellison</td>
                                            <td>03/05/2020</td>
                                            <td>Yes</td>
                                            <td>User </td>
                                            <td><span class="badge badge-light-success">Active</span></td>
                                            <td><a href="{{ route('editUser') }}"><i class="bx bx-edit-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>321</td>
                                            <td><a href="../../../html/ltr/vertical-menu-template/app-users-view.html">damon0209</a>
                                            </td>
                                            <td>Damon Berry</td>
                                            <td>02/09/2019</td>
                                            <td>No</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-light-danger">Banned</span></td>
                                            <td><a href="../../../html/ltr/vertical-menu-template/app-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>322</td>
                                            <td><a href="../../../html/ltr/vertical-menu-template/app-users-view.html">kelsie0511</a>
                                            </td>
                                            <td>Kelsie Dunlap</td>
                                            <td>05/11/2019</td>
                                            <td>Yes</td>
                                            <td>User </td>
                                            <td><span class="badge badge-light-warning">Close</span></td>
                                            <td><a href="../../../html/ltr/vertical-menu-template/app-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                            <!-- datatable ends -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- users list ends -->

        </div>
    </div>
</div>
<!-- END: Content-->


@endsection