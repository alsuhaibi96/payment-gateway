@extends('layout.dashboard_master')

@section('header')
<span class="nav navbar-nav float-left">
    <b>
    تحويل رصيد
    </b>
</span>
@endsection


@section('content')

                <li class=" nav-item"><a href="#"> <i class="fas fa-desktop"> </i><span class="menu-title text-truncate" data-i18n="Dashboard">لوحة التحكم</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="eCommerce"> رصيدك الحالي</span>  <span class="badge badge-light-danger badge-pill badge-round float-right mr-50 ml-auto"> 89k Y.R </span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('home') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Analytics">عرض الإحصائيات</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="{{ route('index') }}"> <i class="fas fa-house"></i> <span class="menu-title text-truncate" data-i18n="Email"> الرئيسية - Home</span></a>
                </li>


                <li class=" nav-item"><a href="{{ route('addBalance') }}"> <i class="fas fa-circle-plus"></i> <span class="menu-title text-truncate" data-i18n="Colors">إضافة رصيد</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('withdraw') }}"> <i class="fas fa-circle-minus">  </i> <span class="menu-title text-truncate" data-i18n="Icons">سحب رصيد </span></a>
                </li>
                <li class="active nav-item"><a href="{{ route('transfer') }}"> <i class="fas fa-exchange-alt"></i> <span class="menu-title text-truncate" data-i18n="Card">تحويل رصيد</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('deposit') }}"> <i class="fas fa-money-check-alt"></i> <span class="menu-title text-truncate" data-i18n="Widgets">إيداع إلى حساب</span><span class="badge badge-light-primary badge-pill badge-round float-right ml-auto">New</span></a>
                </li>

                <li class=" navigation-header text-truncate"><span data-i18n="Forms &amp; Tables">الدعم الفني</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="fas fa-bug"></i> <span class="menu-title text-truncate" data-i18n="Form Layout"> الإبلاغ عن مشكلة</span></a>
                </li>
        </div>
    </div>
    <!-- END: Main Menu-->

@endsection
