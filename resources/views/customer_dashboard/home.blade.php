@extends('layout.customer_dashboard')

@section('home')
    active
@endsection

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
                <!-- Filtering Analytics-->
                <section id="dashboard-analytics">
                    <div class="row">

                        <div class="content-header row">
                        </div>
                        <div class="content-body">
                            <div class="col-md-12 col-sm-12">
                                <div class="row card mt-2 ">
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <span class=" col-xl-6 col-md-6 col-sm-6 my-2">   عرض الإحصائيات </span>
                                            <div class="col-xl-3 col-md-3 col-sm-3 dropdown">


                                                <b class="text-dark">  للعام </b>
                                                <button class="mb-1 btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    2020
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonSec">
                                                    <a class="dropdown-item" href="javascript:;">2020</a>
                                                    <a class="dropdown-item" href="javascript:;">2019</a>
                                                    <a class="dropdown-item" href="javascript:;">2018</a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-3 col-sm-3 dropdown">
                                                <b class="text-dark">  للشهر </b>
                                                <button class="mb-1 btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    يناير
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonSec" style="max-height:400px;
                                                overflow-y: scroll;">
                                                    <a class="dropdown-item" href="javascript:;">يناير</a>
                                                    <a class="dropdown-item" href="javascript:;">فبراير</a>
                                                    <a class="dropdown-item" href="javascript:;">مارس</a>
                                                    <a class="dropdown-item" href="javascript:;">ابريل</a>
                                                    <a class="dropdown-item" href="javascript:;">مايو</a>
                                                    <a class="dropdown-item" href="javascript:;">يونيو</a>
                                                    <a class="dropdown-item" href="javascript:;">يوليو</a>
                                                    <a class="dropdown-item" href="javascript:;">اغسطس</a>
                                                    <a class="dropdown-item" href="javascript:;">سبتمبر</a>
                                                    <a class="dropdown-item" href="javascript:;">اكتوبر</a>
                                                    <a class="dropdown-item" href="javascript:;">نوفمبر</a>
                                                    <a class="dropdown-item" href="javascript:;">ديسمبر</a>
                                                </div>
                                            </div>
<!--
                                            <div class="col-xl-3 dropdown">
                                                <b class="text-dark">  للشهر </b>
                                                <select class="mb-1 btn btn-sm btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButtonSec" data-toggle="dropdown" aria-expanded="false" >
                                                    <option class="dropdown-item " value="10" >10</option>
                                                    <option class="dropdown-item" value='20'>20</option>
                                                    <option class="dropdown-item" value='30'>30</option>
                                                    <option class="dropdown-item" value='-1'>All</option>
                                                </select>
                                            </div>
                                        -->

                                        </div>



                                        </div>


                                </div>

                            </div>
                        </div>


                        <!-- Transaction Analytics-->
                        <div class="col-md-12 col-sm-12">
                            <div class="card">

                                <div class="card-body pb-1">
                                    <div class="d-flex justify-content-around align-items-center flex-wrap">
                                        <div class="sessions-analytics ">
                                            <i class="bx bx-trending-up align-middle"></i>
                                            <span class="align-middle text-muted">تحويل رصيد</span>
                                            <div class="d-flex">
                                                <div id="radial-warning-chart"></div>
                                                <h5 class="mt-1 ml-25"> 109K Y.R</h5>
                                            </div>
                                        </div>
                                        <div class="bounce-rate-analytics">
                                            <i class="bx bx-pie-chart-alt align-middle mr-25"></i>
                                            <span class="align-middle text-muted">عمليات شراء</span>
                                            <div class="d-flex">
                                                <div id="radial-danger-chart"></div>
                                                <h5 class="mt-1 ml-25"> 40K Y.R</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="analytics-bar-chart" class="my-75"></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 ">
                            <div class="row">
                                <!-- تحويل خلال الشهر -->
                                <div class="col-xl-12 col-12">
                                    <div class="card h-100">
                                        <div class="card-body text-center pb-0">
                                            <h5> <b>  80 </b> </h5>
                                            <span class="text-muted fs-10">عملية تحويل خلال الشهر </span>
                                            <div id="success-line-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                <div class="col-xl-3 col-md-6 col-sm-12 ">
                    <div class="row">
                         <!-- عمليات خلال الشهر-->
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
                                <!-- المتبقي من الرصيد-->
                                <div class="col-xl-12 col-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
                                            <div class="conversion-title">
                                                <h4 class="card-title"> <small> المتبقي من الرصيد</small> </h4>

                                            </div>
                                            <div class="conversion-rate">
                                                <h5> {{ Auth::user()->bank_accounts->balance . ' ريال ' }}</h5>
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
                                <!-- صرفيات -->
                                <div class="col-12">
                                    <div class="card pt-1">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar bg-rgba-primary m-0 p-25 mr-75 mr-xl-2">
                                                    <div class="avatar-content">
                                                        <i class="bx bx-user text-primary font-medium-2"></i>
                                                    </div>
                                                </div>
                                                <div class="total-amount">
                                                    <h5 class="mb-0">190k</h5>
                                                    <small class="text-muted">صرفيات</small>
                                                </div>
                                            </div>
                                            <div id="primary-line-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- إيداعات -->
                                <div class="col-12">
                                    <div class="card pt-1">
                                        <div class="card-body d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar bg-rgba-warning m-0 p-25 mr-75 mr-xl-2">
                                                    <div class="avatar-content">
                                                        <i class="bx bx-dollar text-warning font-medium-2"></i>
                                                    </div>
                                                </div>
                                                <div class="total-amount">
                                                    <h5 class="mb-0">250k</h5>
                                                    <small class="text-muted">إيداعات</small>
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

