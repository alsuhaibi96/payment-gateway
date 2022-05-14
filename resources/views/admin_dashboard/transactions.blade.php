@extends('layout.admin_dashboard')


@section('header')
<span class="nav navbar-nav float-left">
    <b>
 العمليات
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
                                <label for="users-list-role">المستخدمين</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-role">
                                        <option value="">Any</option>
                                        <option value="User">عميل</option>
                                        <option value="Staff">تاجر</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-status">العمليات</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-status">
                                        <option value="">Any</option>
                                        <option value="Active">سحب</option>
                                        <option value="Close">اضافة</option>
                                        <option value="Banned">تحويل</option>
                                    </select>
                                </fieldset>
                            </div>
                           
                        </div>
                    </form>
                </div>
                <div class="transaction-list-table">
                    <div class="card">
                        <div class="card-body">
                            <!-- datatable start -->
                            <div class="table-responsive">
                                <table id="users-list-datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th>الاسم</th>
                                            <th>العملية</th>
                                            <th>التاريخ</th>
                                            <th>المبلغ</th>
                                            <th>المتبقي</th>
                                            <th>الصلاحيات</th>
                                            <th>الحالة</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                     
                                       
                                      
                                       
                                         
                                       
                                       
                                       
                                       
                                        <tr>
                                            <td>320</td>
                                            <td></td>
                                            <td></td>
                                            <td>Hoyt Ellison</td>
                                            <td>03/05/2020</td>
                                            <td>User </td>
                                            <td><span class="badge badge-light-success">Active</span></td>
                                           
                                        </tr>
                                        <tr>
                                            <td>321</td>
                                            <td></td>
                                            <td>Damon Berry</td>
                                            <td>02/09/2019</td>                                            
                                            <td>Staff</td>
                                            <td><span class="badge badge-light-danger">Banned</span></td>     
                                        <td></td>                                   </tr>
                                        <tr>
                                            <td>322</td>
                                            <td>Kelsie Dunlap</td>
                                            <td>05/11/2019</td>
                                            <td>Yes</td>
                                            <td>User </td>
                                            <td></td>
                                            <td></td>
                                           
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                            <!-- datatable ends -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- transactions list ends -->

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection