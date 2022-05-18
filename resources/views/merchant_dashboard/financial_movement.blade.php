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

        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus">
                    <div class="cal-icon">
                        <input class="form-control floating " type="date">
                    </div>
                    <label class="focus-label">From</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus">
                    <div class="cal-icon">
                        <input class="form-control floating date" type="date">
                    </div>
                    <label class="focus-label">To</label>
                </div>
            </div>
        </div>
        <!-- /Search Filter -->
        <section id="column-selectors" style="padding: 0;">
            <div class="row">
                <div class="col-md-12">
                    <div class=" table">
                        <table class="table">
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
                                @foreach($movements->sortBy('Reference') as $movement)
                                <tr>
                                    <td>{{$movement->transaction_date}}</td>

                                    <td>{{$movement->DescriptionOrAccountTitle}}</td>
                                    <td>{{$movement->AmountDebit}}</td>
                                    <td>{{$movement->AmountCredit}}</td>
                                    <td>{{$movement->Reference}}</td>
                                    <td>{{$movement->IsLine}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- /Page Content -->

    </div>
    <!-- /Page Wrapper -->
</div>
@endsection