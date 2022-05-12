@extends('layout.customer_dashboard')


@section('header')
<span class="nav navbar-nav float-left">
    <b>
 الفواتير
    </b>
</span>
@endsection

@section('invoices')
    active
@endsection

@section('content')



    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <!-- create invoice button-->
            <div class="invoice-create-btn mb-1">
                <a href="downloadpdf.php?file=filehere" class="btn btn-primary glow invoice-create" role="button"
                    aria-pressed="true">
                    <i class="fas fa-download"></i>
                    تنزيل التقرير
                </a>
            </div>


            <div class="content-body">
                <!-- Activity Card Starts-->
                <div class="col-xl-12 col-md-12 col-12">
                    <div class="card">
                        <!-- invoice list -->
                        <section class="invoice-list-wrapper">

                            <div class="table-responsive">
                                <table class="table invoice-data-table dt-responsive nowrap" >
                                    <thead>
                                        <tr>
                                            <th style="font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;">
                                                    <span class="align-middle"> رقم الفاتورة</span>
                                                </th>
                                                <th style="font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;">المبلغ</th>
                                                <th style="font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;">التاريخ</th>
                                                <th style="font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;">العميل</th>
                                                <th style="font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;">العلامات</th>
                                                <th style="font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;">الحالة</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>


                                                <td>
                                                    <a href="{{ route('show_customer_invoice')}}">INV-00956</a>
                                                </td>
                                                <td><span class="invoice-amount">$459.30</span></td>
                                                <td><small class="text-muted">12-08-19</small></td>
                                                <td><span class="invoice-customer">Pixinvent PVT. LTD</span></td>
                                                <td>
                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                    <small class="text-muted">Technology</small>
                                                </td>
                                                <td><span class="badge badge-light-danger badge-pill">UNPAID</span></td>

                                            </tr>
                                            <tr>


                                                <td>
                                                    <a href="{{ route('show_customer_invoice')}}">INV-00349</a>
                                                </td>
                                                <td><span class="invoice-amount">$125.00</span></td>
                                                <td><small class="text-muted">08-08-19</small></td>
                                                <td><span class="invoice-customer">Volkswagen</span></td>
                                                <td>
                                                    <span class="bullet bullet-primary bullet-sm"></span>
                                                    <small class="text-muted">Car</small>
                                                </td>
                                                <td><span class="badge badge-light-success badge-pill">PAID</span></td>

                                            </tr>
                                            <tr>


                                                <td>
                                                    <a href="{{ route('show_customer_invoice')}}">INV-00853</a>
                                                </td>
                                                <td><span class="invoice-amount">$10,503</span></td>
                                                <td><small class="text-muted">02-08-19</small></td>
                                                <td><span class="invoice-customer">Chevron Corporation</span></td>
                                                <td>
                                                    <span class="bullet bullet-dark bullet-sm"></span>
                                                    <small class="text-muted">Corporation</small>
                                                </td>
                                                <td><span class="badge badge-light-danger badge-pill">UNPAID</span></td>

                                            </tr>
                                            <tr>


                                                <td>
                                                    <a href="{{ route('show_customer_invoice')}}">INV-00452</a>
                                                </td>
                                                <td><span class="invoice-amount">$90</span></td>
                                                <td><small class="text-muted">28-07-19</small></td>
                                                <td><span class="invoice-customer">Alphabet</span></td>
                                                <td>
                                                    <span class="bullet bullet-info bullet-sm"></span>
                                                    <small class="text-muted">Electronic</small>
                                                </td>
                                                <td><span class="badge badge-light-warning badge-pill">Partially Paid</span></td>

                                            </tr>
                                            <tr>


                                                <td>
                                                    <a href="{{ route('show_customer_invoice')}}">INV-00123</a>
                                                </td>
                                                <td><span class="invoice-amount">$15,900</span></td>
                                                <td><small class="text-muted">23-07-19</small></td>
                                                <td><span class="invoice-customer">Toyota Motor</span></td>
                                                <td>
                                                    <span class="bullet bullet-primary bullet-sm"></span>
                                                    <small class="text-muted">Car</small>
                                                </td>
                                                <td><span class="badge badge-light-success badge-pill">PAID</span></td>

                                            </tr>
                                            <tr>


                                                <td>
                                                    <a href="{{ route('show_customer_invoice')}}">INV-00853</a>
                                                </td>
                                                <td><span class="invoice-amount">$115.06</span></td>
                                                <td><small class="text-muted">24-06-19</small></td>
                                                <td><span class="invoice-customer">Samsung Electronics</span></td>
                                                <td>
                                                    <span class="bullet bullet-info bullet-sm"></span>
                                                    <small class="text-muted">Electronic</small>
                                                </td>
                                                <td><span class="badge badge-light-success badge-pill">PAID</span></td>

                                            </tr>
                                            <tr>


                                                <td>
                                                    <a href="{{ route('show_customer_invoice')}}">INV-00153</a>
                                                </td>
                                                <td><span class="invoice-amount">$1,090</span></td>
                                                <td><small class="text-muted">23-05-19</small></td>
                                                <td><span class="invoice-customer">Pixinvent PVT. LTD</span></td>
                                                <td>
                                                    <span class="bullet bullet-dark bullet-sm"></span>
                                                    <small class="text-muted">Corporation</small>
                                                </td>
                                                <td><span class="badge badge-light-danger badge-pill">UNPAID</span></td>

                                            </tr>
                                            <tr>


                                                <td>
                                                    <a href="{{ route('show_customer_invoice')}}">INV-00788</a>
                                                </td>
                                                <td><span class="invoice-amount">$555.50</span></td>
                                                <td><small class="text-muted">10-06-19</small></td>
                                                <td><span class="invoice-customer">ExxonMobil</span></td>
                                                <td>
                                                    <span class="bullet bullet-warning bullet-sm"></span>
                                                    <small class="text-muted">Mobile</small>
                                                </td>
                                                <td><span class="badge badge-light-danger badge-pill">UNPAID</span></td>

                                            </tr>
                                            <tr>


                                                <td>
                                                    <a href="{{ route('show_customer_invoice')}}">INV-00326</a>
                                                </td>
                                                <td><span class="invoice-amount">$8,563</span></td>
                                                <td><small class="text-muted">06-01-19</small></td>
                                                <td><span class="invoice-customer">Wells Fargo</span></td>
                                                <td>
                                                    <span class="bullet bullet-danger bullet-sm"></span>
                                                    <small class="text-muted">Food</small>
                                                </td>
                                                <td><span class="badge badge-light-success badge-pill">PAID</span></td>

                                            </tr>
                                            <tr>


                                                <td>
                                                    <a href="{{ route('show_customer_invoice')}}">INV-00759</a>
                                                </td>
                                                <td><span class="invoice-amount">$10,960.20</span></td>
                                                <td><small class="text-muted">22-05-19</small></td>
                                                <td><span class="invoice-customer">Ping An Insurance</span></td>
                                                <td>
                                                    <span class="bullet bullet-dark bullet-sm"></span>
                                                    <small class="text-muted">Corporation</small>
                                                </td>
                                                <td><span class="badge badge-light-warning badge-pill">Partially Paid</span></td>

                                            </tr>
                                            <tr>


                                                <td>
                                                    <a href="{{ route('show_customer_invoice')}}">INV-00999</a>
                                                </td>
                                                <td><span class="invoice-amount">$886.90</span></td>
                                                <td><small class="text-muted">12-05-19</small></td>
                                                <td><span class="invoice-customer">Apple</span></td>
                                                <td>
                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                    <small class="text-muted">Electronic</small>
                                                </td>
                                                <td><span class="badge badge-light-danger badge-pill">UNPAID</span></td>

                                            </tr>
                                            <tr>


                                                <td>
                                                    <a href="{{ route('show_customer_invoice')}}">INV-00223</a>
                                                </td>
                                                <td><span class="invoice-amount">$459.30</span></td>
                                                <td><small class="text-muted">28-04-19</small></td>
                                                <td><span class="invoice-customer">Communications</span></td>
                                                <td>
                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                    <small class="text-muted">Technology</small>
                                                </td>
                                                <td><span class="badge badge-light-success badge-pill">PAID</span></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
