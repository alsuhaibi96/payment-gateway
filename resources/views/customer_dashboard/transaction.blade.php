@extends('layout.customer_dashboard')

@section('transaction')
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

                        <!--Transactions List -->

                                <div class="table-responsive mt-2" >
                                    <div class="card">
                                         <table class="table">
                                            <thead>
                                                <tr>

                                                    <th>
                                                        <span class="align-middle">id</span>
                                                    </th>
                                                    <th>من حساب</th>
                                                    <th>المبلغ</th>
                                                    <th>العملة</th>
                                                    <th>الى حساب</th>
                                                    <th>النوع</th>
                                                    <th>الحالة</th>
                                                    <th>التاريخ</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>


                                                    <td>
                                                        <a href="app-invoice.html">INV-00956</a>
                                                    </td>
                                                    <td><span class="invoice-amount">$459.30</span></td>
                                                    <td><small class="text-muted">12-08-19</small></td>
                                                    <td><span class="invoice-customer">Pixinvent PVT. LTD</span></td>
                                                    <td>
                                                        <span class="bullet bullet-success bullet-sm"></span>
                                                        <small class="text-muted">Technology</small>
                                                    </td>
                                                    <td><span class="badge badge-light-danger badge-pill">UNPAID</span></td>
                                                    <td>
                                                        <div class="invoice-action">
                                                            <a  class="invoice-action-view mr-1">
                                                                <i class="bx bx-show-alt"></i>
                                                            </a>

                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>


                                                    <td>
                                                        <a href="app-invoice.html">INV-00349</a>
                                                    </td>
                                                    <td><span class="invoice-amount">$125.00</span></td>
                                                    <td><small class="text-muted">08-08-19</small></td>
                                                    <td><span class="invoice-customer">Volkswagen</span></td>
                                                    <td>
                                                        <span class="bullet bullet-primary bullet-sm"></span>
                                                        <small class="text-muted">Car</small>
                                                    </td>
                                                    <td><span class="badge badge-light-success badge-pill">PAID</span></td>
                                                    <td>
                                                        <div class="invoice-action">
                                                            <a href="app-invoice.html" class="invoice-action-view mr-1">
                                                                <i class="bx bx-show-alt"></i>
                                                            </a>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td>
                                                        <a href="app-invoice.html">INV-00853</a>
                                                    </td>
                                                    <td><span class="invoice-amount">$10,503</span></td>
                                                    <td><small class="text-muted">02-08-19</small></td>
                                                    <td><span class="invoice-customer">Chevron Corporation</span></td>
                                                    <td>
                                                        <span class="bullet bullet-dark bullet-sm"></span>
                                                        <small class="text-muted">Corporation</small>
                                                    </td>
                                                    <td><span class="badge badge-light-danger badge-pill">UNPAID</span></td>
                                                    <td>
                                                        <div class="invoice-action">
                                                            <a href="app-invoice.html" class="invoice-action-view mr-1">
                                                                <i class="bx bx-show-alt"></i>
                                                            </a>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td>
                                                        <a href="app-invoice.html">INV-00452</a>
                                                    </td>
                                                    <td><span class="invoice-amount">$90</span></td>
                                                    <td><small class="text-muted">28-07-19</small></td>
                                                    <td><span class="invoice-customer">Alphabet</span></td>
                                                    <td>
                                                        <span class="bullet bullet-info bullet-sm"></span>
                                                        <small class="text-muted">Electronic</small>
                                                    </td>
                                                     <td><span class="badge badge-light-success badge-pill">PAID</span></td>
                                                    <td>
                                                        <div class="invoice-action">
                                                            <a href="app-invoice.html" class="invoice-action-view mr-1">
                                                                <i class="bx bx-show-alt"></i>
                                                            </a>

                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr>


                                                    <td>
                                                        <a href="app-invoice.html">INV-00326</a>
                                                    </td>
                                                    <td><span class="invoice-amount">$8,563</span></td>
                                                    <td><small class="text-muted">06-01-19</small></td>
                                                    <td><span class="invoice-customer">Wells Fargo</span></td>
                                                    <td>
                                                        <span class="bullet bullet-danger bullet-sm"></span>
                                                        <small class="text-muted">Food</small>
                                                    </td>
                                                    <td><span class="badge badge-light-success badge-pill">PAID</span></td>
                                                    <td>
                                                        <div class="invoice-action">
                                                            <a href="app-invoice.html" class="invoice-action-view mr-1">
                                                                <i class="bx bx-show-alt"></i>
                                                            </a>

                                                        </div>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
