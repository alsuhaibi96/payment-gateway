@extends('layout.admin_dashboard')


@section('header')
<span class="nav navbar-nav float-left">
    <b>
 تقارير العمليات
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
            <!-- reports list start -->
            <section class="users-list-wrapper">
                <div class="users-list-filter px-1">
                    <form>
                        <div class="row border rounded py-2 mb-2">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-verified">date range</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-verified">
                                        <option value="">Any</option>
                                        <option value="Yes">نعم</option>
                                        <option value="No">لا</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-role">نوع العملية</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-role">
                                        <option value="">كل العمليات</option>
                                        <option value="User">مدفوعة</option>
                                        <option value="Staff">الرصيد</option>
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
                                <a href="#" class="btn btn-primary btn-block glow users-list-clear mb-0">تنزيل</a>
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
                                            <th>date range</th>
                                            <th>تاريخ الطلب</th>
                                            <th>النوع</th>
                                            <th>الصيغة</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                     
                                 
                                       
                                        <tr>
                                            <td>320</td>
                                            <td><a href="#">hoyt0305</a>
                                            </td>
                                            <td>Hoyt Ellison</td>
                                            <td>03/05/2020</td>
                                            <td>Yes</td>
                                            <td><span class="badge badge-light-success">تنزيل</span></td>
                                        </tr>
                                        <tr>
                                            <td>321</td>
                                            <td><a href="#">damon0209</a>
                                            </td>
                                            <td>Damon Berry</td>
                                            <td>02/09/2019</td>
                                            <td>No</td>
                                            
                                            <td><span class="badge badge-light-danger">تنزيل</span></td>
                                        </tr>
                                       
                                    
                                    </tbody>
                                </table>
                            </div>
                            <!-- datatable ends -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- reports list ends -->

        </div>
    </div>
</div>
<!-- END: Content-->


@endsection