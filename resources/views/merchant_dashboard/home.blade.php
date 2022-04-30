@extends('layout.dashboard_master')

@section('content')

                <li class=" nav-item"><a href="#"> <i class="fas fa-desktop"> </i><span class="menu-title text-truncate" data-i18n="Dashboard">لوحة التحكم</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="eCommerce"> رصيدك الحالي</span>  <span class="badge badge-light-danger badge-pill badge-round float-right mr-50 ml-auto"> 89k Y.R </span></a>
                        </li>
                        <li class="active"><a class="d-flex align-items-center" href="{{ route('home') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Analytics">عرض الإحصائيات</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="{{ route('index') }}"> <i class="fas fa-house"></i> <span class="menu-title text-truncate" data-i18n="Email"> الرئيسية - Home</span></a>
                </li>
                <li class=" nav-item"><a href="#"> <i class="fas fa-money-bill"></i>  <span class="menu-title text-truncate" data-i18n="Chat">المدفوعات - Payments</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('invoice'); }}">  <i class="fas fa-file-invoice-dollar"></i>  <span class="menu-title text-truncate" data-i18n="Todo">الفواتير - Invoice</span></a>
                </li>
                <li class=" nav-item"><a href="#">  <i class="fas fa-gear">  </i>  <span class="menu-title text-truncate" data-i18n="Calendar">إعدادات - Settings </span></a>
                </li>

                <li class=" navigation-header text-truncate"><span data-i18n="Forms &amp; Tables">الدعم الفني</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="fas fa-bug"></i> <span class="menu-title text-truncate" data-i18n="Form Layout"> الإبلاغ عن مشكلة</span></a>
                </li>
        </div>
    </div>
    <!-- END: Main Menu-->

    <div class="col-xl-12 col-12 dashboard-users-success">
        <div class="card text-center">
            <div class="card-body py-1">
                <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                    <i class="fas fa-money-bill"></i>
                </div>
                <div class="text-muted line-ellipsis">المدفوعات</div>
                <h3 class="mb-0">1.2k</h3>
            </div>
        </div>
    </div>


    <div class="col-xl-12 col-12 dashboard-users-danger">
        <div class="card text-center">
            <div class="card-body py-1">
                <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <div class="text-muted line-ellipsis">الفواتير</div>
                <h3 class="mb-0">540</h3>
            </div>
        </div>
    </div>

@endsection
