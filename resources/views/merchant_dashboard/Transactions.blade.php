@extends('layout.merchant_dashboard')
@section('Transactions')
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
        <!-- Column selectors with Export Options and print table -->
        <section id="column-selectors">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                          تقارير احدث المعاملات
                            </h4>
                        </div>
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table table-striped dataex-html5-selectors">

                                    <thead>
                                        <tr>
                                            <th>المعرف</th>
                                            <th>النوع</th>
                                            <th>الاجمالي</th>
                                            <th>العملة</th>
                                            <th>من حساب</th>
                                            <th>الى حساب</th>
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
                                            <td>{{$transaction->status}}</td>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    {{-- <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Currency</th>
                                            <th>From Acount</th>
                                            <th>To Acount</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot> --}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Column selectors with Export Options and print table -->
    </div>
</div>

<!-- END: Content-->
@endsection