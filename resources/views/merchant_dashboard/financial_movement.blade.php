@extends('layout.merchant_dashboard')
@section('header')
<span class="nav navbar-nav float-left">
    <b>
        عرض الإحصائيات
    </b>
</span>
@endsection
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <!-- Page Wrapper -->
    <div class="content-wrapper">
        <!-- Page Content -->
        <!-- Page Header -->
        <div class="content-header row">

        </div>


        <section id="column-selectors" style="padding: 0; margin:30px 0 0 0;">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive ">
                                <table class="table table-bordered  dataex-html5-selectors">
                                    <thead>
                                        <tr>
                                            <th data-orderable="false">transaction_date</th>
                                            <th data-orderable="false">DescriptionOrAccountTitle</th>
                                            <th>AmountDebit</th>
                                            <th>AmountCredit</th>
                                            <th>Reference</th>
                                            <th>IsLine</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($movements->count() == 0)
                                        <tr>
                                            <td colspan="6">No products to display.</td>
                                        </tr>
                                        @endif
                                        @foreach($movements->sortBy('Reference') as $movement)
                                        <tr>
                                            @if($movement->transaction_date !=null)
                                            <td rowspan="3">{{$movement->transaction_date}}</td>
                                            @endif

                                            @if($movement->DescriptionOrAccountTitle ==null)
                                            <td>------</td>
                                            @else
                                            <td>{{$movement->DescriptionOrAccountTitle}}</td>
                                            @endif

                                            @if($movement->AmountDebit ==null)
                                            <td>------</td>
                                            @else
                                            <td>{{$movement->AmountDebit}}</td>
                                            @endif

                                            @if($movement->AmountCredit ==null)
                                            <td>------</td>
                                            @else
                                            <td>{{$movement->AmountCredit}}</td>
                                            @endif

                                            @if($movement->Reference ==null)
                                            <td>------</td>
                                            @else
                                            <td>{{$movement->Reference}}</td>
                                            @endif

                                            @if($movement->IsLine ==null)
                                            <td>------</td>
                                            @else
                                            <td>{{$movement->IsLine}}</td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>





    </div>
    <!-- /Page Wrapper -->
</div>
@endsection