@extends('layout.dashboard_master')


@section('header')
    <span class="nav navbar-nav float-left">
        <b>
            عرض الإحصائيات
        </b>
    </span>
@endsection

@section('analytics')
    active
@endsection


@section('content')


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="row card mt-2">
                        <div class="col-xl-6">
                            <div class="dropdown">
                                <span class=" mx-2 ">   عرض الإحصائيات : <b class="text-dark">  للعام </b> </span>
                                <button class="mb-1 btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    2020
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonSec">
                                    <a class="dropdown-item" href="javascript:;">2020</a>
                                    <a class="dropdown-item" href="javascript:;">2019</a>
                                    <a class="dropdown-item" href="javascript:;">2018</a>
                                </div>
                            </div>
                            </div>
                            <div class="col-xl-6">

                                <div class="dropdown" style="margin-right: 110px ">
                                    <span class=" mx-2 ">  <b class="text-dark">  للشهر </b> </span>
                                    <button class="mb-1 btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        يناير
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonSec">
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
                            </div>
                    </div>

                    <!-- Activity Card Starts-->
                    <div class="col-xl-3 col-md-6 col-12 activity-card">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">المبيعات</h4>
                            </div>
                            <div class="card-body pt-1">
                                <div class="d-flex activity-content">
                                    <div class="avatar bg-rgba-primary m-0 mr-75">
                                        <div class="avatar-content">
                                            <i class="bx bx-bar-chart-alt-2 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="activity-progress flex-grow-1">
                                        <small class="text-muted d-inline-block mb-50">المبيعات المدفوعة</small>
                                        <small class="float-right">$5,659</small>
                                        <div class="progress progress-bar-primary progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                style="width:50%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex activity-content">
                                    <div class="avatar bg-rgba-success m-0 mr-75">
                                        <div class="avatar-content">
                                            <i class="bx bx-dollar text-success"></i>
                                        </div>
                                    </div>
                                    <div class="activity-progress flex-grow-1">
                                        <small class="text-muted d-inline-block mb-50"> المبيعات المفوترة</small>
                                        <small class="float-right">$8,963</small>
                                        <div class="progress progress-bar-success progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                                style="width:80%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex activity-content">
                                    <div class="avatar bg-rgba-warning m-0 mr-75">
                                        <div class="avatar-content">
                                            <i class="bx bx-stats text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="activity-progress flex-grow-1">
                                        <small class="text-muted d-inline-block mb-50">الميزانية الحالية</small>
                                        <small class="float-right">$14,150</small>
                                        <div class="progress progress-bar-warning progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                style="width:60%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-75">
                                    <div class="avatar bg-rgba-danger m-0 mr-75">
                                        <div class="avatar-content">
                                            <i class="bx bx-check text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="activity-progress flex-grow-1">
                                        <small class="text-muted d-inline-block mb-50">عدد المبيعات في الشهر</small>
                                        <small class="float-right">106</small>
                                        <div class="progress progress-bar-danger progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="30"
                                                style="width:30%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-12 dashboard-users-success">
                        <div class="card text-center">
                            <div class="card-body py-1">
                                <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                <div class="text-muted line-ellipsis">المدفوعات</div>
                                <h3 class="mb-0">540</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-12">
                                <div class="card">
                                    <div class="col-xl-12 col-12">
                                        <div class="card">
                                            <div class="card-body text-center pb-0">
                                                <h5> <b>  $2,093 </b> </h5>
                                                <span class="text-muted fs-10"> صافي الربح خلال الشهر </span>
                                                <div id="success-line-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-xl-3 col-12 dashboard-users-danger">
                        <div class="card text-center">
                            <div class="card-body py-1">
                                <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto mb-50">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </div>
                                <div class="text-muted line-ellipsis">الفواتير</div>
                                <h3 class="mb-0"> 1.2k </h3>
                            </div>
                        </div>

                       <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-rgba-danger m-0 p-25 mr-75 mr-xl-2">
                                            <div class="avatar-content">
                                                <i class="bx bx-trending-down text-danger align-middle"></i>
                                            </div>
                                        </div>
                                        <div class="total-amount">
                                            <h5 class="mb-0">$3,566</h5>
                                            <small class="text-muted">خسارة خلال الشهر</small>
                                        </div>
                                    </div>
                                    <div id="primary-line-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-rgba-success m-0 p-25 mr-75 mr-xl-2">
                                            <div class="avatar-content">
                                                <i class="bx bx-trending-up text-success align-middle"></i>
                                            </div>
                                        </div>
                                        <div class="total-amount">
                                            <h5 class="mb-0">$5,659</h5>
                                            <small class="text-muted">ربح خلال الشهر</small>
                                        </div>
                                    </div>
                                    <div id="warning-line-chart"></div>
                                </div>
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
