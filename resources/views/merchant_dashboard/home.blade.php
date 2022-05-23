@extends('layout.merchant_dashboard')


@section('header')
<span class="nav navbar-nav float-left">
    <b>
        عرض الإحصائيات
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
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row">
                    <!-- Website Analytics Starts-->
                    <div class="col-md-12 col-sm-12">
                        <div class="card">

                            <div class="card-body pb-1">
                                <div class="d-flex justify-content-around align-items-center flex-wrap">
                                    <div class="user-analytics ">
                                        <i class="fas fa-circle-minus"></i>
                                        <span class="align-middle text-muted"> اجمالي المبيعات</span>
                                        <div class="d-flex">
                                            <div id="radial-success-chart"></div>
                                            @foreach($Total_sales as $item)
                                            @if($item->acount_name =='sales')
                                            <h5 class="mt-1 ml-25">{{$item->Balance}}≈ $</h5>
                                            @endif

                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="sessions-analytics ">
                                        <i class="bx bx-trending-up align-middle mr-25"></i>
                                        <span class="align-middle text-muted">اجمالي الرصيد البنكي</span>
                                        <div class="d-flex">
                                            <div id="radial-warning-chart"></div>
                                            
                                            @foreach($Total_sales as $item)
                                                @if($item->acount_name =='bank_exchange')
                                                <h5 class="mt-1 ml-25">{{$item->Balance}}≈ $</h5>
                                                @endif

                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="bounce-rate-analytics">
                                        <i class="bx bx-pie-chart-alt align-middle mr-25"></i>
                                        <span class="align-middle text-muted">عمليات شراء</span>
                                        <div class="d-flex">
                                            <div id="radial-danger-chart"></div>
                                            @foreach($Total_sales as $item)
                                                @if($item->acount_name =='purchases')
                                                <h5 class="mt-1 ml-25">{{$item->Balance}}≈ $</h5>
                                                @endif

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div id="analytics-bar-chart" class="my-75"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 dashboard-referral-impression">
                        <div class="row">
                            <!-- Referral Chart Starts-->
                            <div class="col-xl-12 col-12">
                                <div class="card">
                                    <div class="card-body text-center pb-0">
                                        <h5> <b> 11 </b> </h5>
                                        <span class="text-muted fs-10">عملية تحويل خلال الشهر </span>
                                        <div id="success-line-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-12 dashboard-referral-impression">
                        <div class="row">
                            <!-- Impression Radial Chart Starts-->
                            <div class="col-xl-12 col-12">
                                <div class="card">
                                    <div class="card-body donut-chart-wrapper">
                                        <div id="donut-chart" class="d-flex justify-content-center"></div>
                                        <ul class="list-inline d-flex justify-content-around mb-0">
                                            <li> <span class="bullet bullet-xs bullet-primary mr-50"></span>تحويل</li>
                                            <li> <span class="bullet bullet-xs bullet-info mr-50"></span>شراء</li>
                                            <li> <span class="bullet bullet-xs bullet-warning mr-50"></span>سحب</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-12 col-sm-12">
                        <div class="row">
                            <!-- Conversion Chart Starts-->
                            <div class="col-xl-12 col-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
                                        <div class="conversion-title">
                                            <h4 class="card-title"> <small>  اجمالي الفواتير </small> </h4>

                                        </div>
                                        <div class="conversion-rate">
                                            <h5>{{$Total_Invoice}}</h5>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <div id="bar-negative-chart" class="negative-bar-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-12 col-sm-12">
                        <div class="row">
                            
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-rgba-warning m-0 p-25 mr-75 mr-xl-2">
                                                <div class="avatar-content">
                                                    <i class="bx bx-dollar text-warning font-medium-2"></i>
                                                </div>
                                            </div>
                                            <div class="total-amount">
                                                <h5 class="mb-0">{{$Total_transaction}}</h5>
                                                <small class="text-muted">اجمالي المعاملات</small>
                                            </div>
                                        </div>
                                        <div id="warning-line-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->


<div class="sidenav-overlay"></div>
<div class="drag-target"></div>



@endsection