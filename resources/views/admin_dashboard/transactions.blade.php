@extends('layout.admin_dashboard')
@section('trans')
    active
@endsection

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
                                            <th>ID</th>
                                            <th>النوع</th>
                                            <th>المبلغ</th>
                                            <th>العملة</th>
                                            <th>من حساب</th>
                                            <th>الى حساب</th>
                                            <th>التاريخ</th>
                                            <th>الحالة</th>
                                            
                                        </tr>
                                    </thead>
                                        <tbody>

                                            @foreach($transactions as $transaction)
                                            <tr>
                                                <td>{{$transaction->trans_id}}</td>
                                                <td>{{$transaction->type}}</td>
                                                <td>{{$transaction->amount}}</td>
                                                <td>{{$transaction->currency}}</td>
                                                @if(Auth::user()->hasRole('Customer'))
                                                <td>to my account</td>
                                                @else
                                                <td>{{$transaction->client_name}}</td>
                                                @endif
    
                                                @if(Auth::user()->hasRole('Merchant'))
                                                <td>to my account</td>
                                                @else
                                                <td>{{$transaction->merchant_name}}</td>
                                                @endif
                                                <td>{{ $transaction->created_at }}</td>
                                                <td><span class="badge badge-light-danger">{{$transaction->status}}</span></td>
   
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Amount</th>
                                                <th>Currency</th>
                                                <th>From Acount</th>
                                                <th>To Acount</th>
                                                <th>date</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
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