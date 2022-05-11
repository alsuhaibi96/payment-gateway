@extends('layout.dashboard_master')


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

                            <!-- Options and filter dropdown button-->
                            <div class="action-dropdown-btn d-none">
                                <div class="dropdown invoice-filter-action">
                                    <button class="btn border dropdown-toggle mr-1" type="button" id="invoice-filter-btn"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Filter Invoice
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="invoice-filter-btn">
                                        <a class="dropdown-item" href="javascript:;">Downloaded</a>
                                        <a class="dropdown-item" href="javascript:;">Sent</a>
                                        <a class="dropdown-item" href="javascript:;">Partial Payment</a>
                                        <a class="dropdown-item" href="javascript:;">Paid</a>
                                    </div>
                                </div>
                                <div class="dropdown invoice-options">
                                    <button class="btn border dropdown-toggle mr-2" type="button" id="invoice-options-btn"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Options
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="invoice-options-btn">
                                        <a class="dropdown-item" href="javascript:;">Delete</a>
                                        <a class="dropdown-item" href="javascript:;">Edit</a>
                                        <a class="dropdown-item" href="javascript:;">View</a>
                                        <a class="dropdown-item" href="javascript:;">Send</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table invoice-data-table dt-responsive nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="    font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;">
                                                رقم الفاتورة
                                            </th>
                                            <th style="    font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;">الكمية</th>
                                            <th style="    font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;">السعر</th>
                                            <th style="    font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;">التاريخ</th>
                                            <th style="    font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;"> العميل</th>
                                            <th style="    font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;">المنتج</th>

                                            <th style="    font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;">الحالة</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="{{ route('show_invoice')}}"> <span class="align-middle"> INV-00223 </span>
                                                </a>
                                            </td>
                                            <td><span class="invoice-amount align-middle"> 5</span></td>
                                            <td><span class="invoice-amoun">$459.30</span></td>
                                            <td><span class="text-muted">28-04-19</span></td>
                                            <td><small class="invoice-customer">محمد أحمد</small></td>
                                            <td>
                                                <span class="text-muted"> RangeRover</span>
                                            </td>
                                            <td><span class="badge badge-light-danger badge-pill " style="font-family:
                                                    font-family: 'Amiri', serif;
                                                    font-family: 'Changa', sans-serif;
                                                    font-family: 'Tajawal', sans-serif;
                                                        ">غير مدفوعة</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{ route('show_invoice')}}"> <span class="align-middle"> INV-00223 </span>
                                                </a>
                                            </td>
                                            <td><span class="invoice-amount align-middle"> 5</span></td>
                                            <td><span class="invoice-amoun">$459.30</span></td>
                                            <td><span class="text-muted">28-04-19</span></td>
                                            <td><small class="invoice-customer">محمد أحمد</small></td>
                                            <td>
                                                <span class="text-muted"> RangeRover</span>
                                            </td>
                                            <td><span class="badge badge-light-success badge-pill " style="font-family:
                                                font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;
                                                    "> مدفوعة</span></td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <a href="{{ route('show_invoice')}}"> <span class="align-middle"> INV-00223 </span>
                                                </a>
                                            </td>
                                            <td><span class="invoice-amount align-middle"> 5</span></td>
                                            <td><span class="invoice-amoun">$459.30</span></td>
                                            <td><span class="text-muted">28-04-19</span></td>
                                            <td><small class="invoice-customer">محمد أحمد</small></td>
                                            <td>
                                                <span class="text-muted"> RangeRover</span>
                                            </td>
                                            <td><span class="badge badge-light-success badge-pill " style="font-family:
                                                font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;
                                                    "> مدفوعة</span></td>
                                        </tr>
                                        <tr>


                                            <td>
                                                <a href="{{ route('show_invoice')}}"> <span class="align-middle"> INV-00223 </span>
                                                </a>
                                            </td>
                                            <td><span class="invoice-amount align-middle"> 5</span></td>
                                            <td><span class="invoice-amoun">$459.30</span></td>
                                            <td><span class="text-muted">28-04-19</span></td>
                                            <td><small class="invoice-customer">محمد أحمد</small></td>
                                            <td>
                                                <span class="text-muted"> RangeRover</span>
                                            </td>
                                            <td><span class="badge badge-light-success badge-pill " style="font-family:
                                                font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;
                                                    "> مدفوعة</span></td>
                                        </tr>
                                        <tr>


                                            <td>
                                                <a href="{{ route('show_invoice')}}"> <span class="align-middle"> INV-00223 </span>
                                                </a>
                                            </td>
                                            <td><span class="invoice-amount align-middle"> 5</span></td>
                                            <td><span class="invoice-amoun">$459.30</span></td>
                                            <td><span class="text-muted">28-04-19</span></td>
                                            <td><small class="invoice-customer">محمد أحمد</small></td>
                                            <td>
                                                <span class="text-muted"> RangeRover</span>
                                            </td>
                                            <td><span class="badge badge-light-warning badge-pill " style="font-family:
                                                font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;
                                                    "> جزئياً مدفوعة</span></td>
                                        </tr>
                                        <tr>


                                            <td>
                                                <a href="{{ route('show_invoice')}}"> <span class="align-middle"> INV-00223 </span>
                                                </a>
                                            </td>
                                            <td><span class="invoice-amount align-middle"> 5</span></td>
                                            <td><span class="invoice-amoun">$459.30</span></td>
                                            <td><span class="text-muted">28-04-19</span></td>
                                            <td><small class="invoice-customer">محمد أحمد</small></td>
                                            <td>
                                                <span class="text-muted"> RangeRover</span>
                                            </td>

                                            <td><span class="badge badge-light-danger badge-pill " style="font-family:
                                                font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;
                                                    ">غير مدفوعة</span></td>
                                        </tr>
                                        <tr>


                                            <td>
                                                <a href="{{ route('show_invoice')}}"> <span class="align-middle"> INV-00223 </span>
                                                </a>
                                            </td>
                                            <td><span class="invoice-amount align-middle"> 5</span></td>
                                            <td><span class="invoice-amoun">$459.30</span></td>
                                            <td><span class="text-muted">28-04-19</span></td>
                                            <td><small class="invoice-customer">محمد أحمد</small></td>
                                            <td>
                                                <span class="text-muted"> RangeRover</span>
                                            </td>

                                            <td><span class="badge badge-light-danger badge-pill " style="font-family:
                                                font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;
                                                    ">غير مدفوعة</span></td>
                                        </tr>
                                        <tr>


                                            <td>
                                                <a href="{{ route('show_invoice')}}"> <span class="align-middle"> INV-00223 </span>
                                                </a>
                                            </td>
                                            <td><span class="invoice-amount align-middle"> 5</span></td>
                                            <td><span class="invoice-amoun">$459.30</span></td>
                                            <td><span class="text-muted">28-04-19</span></td>
                                            <td><small class="invoice-customer">محمد أحمد</small></td>
                                            <td>
                                                <span class="text-muted"> RangeRover</span>
                                            </td>
                                            <td><span class="badge badge-light-success badge-pill " style="font-family:
                                                font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;
                                                    "> مدفوعة</span></td>
                                        </tr>
                                        <tr>


                                            <td>
                                                <a href="{{ route('show_invoice')}}"> <span class="align-middle"> INV-00223 </span>
                                                </a>
                                            </td>
                                            <td><span class="invoice-amount align-middle"> 5</span></td>
                                            <td><span class="invoice-amoun">$459.30</span></td>
                                            <td><span class="text-muted">28-04-19</span></td>
                                            <td><small class="invoice-customer">محمد أحمد</small></td>
                                            <td>
                                                <span class="text-muted"> RangeRover</span>
                                            </td>
                                            <td><span class="badge badge-light-warning badge-pill " style="font-family:
                                                font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;
                                                    ">  جزئياً مدفوعة</span></td>
                                        </tr>
                                        <tr>


                                            <td>
                                                <a href="{{ route('show_invoice')}}"> <span class="align-middle"> INV-00223 </span>
                                                </a>
                                            </td>
                                            <td><span class="invoice-amount align-middle"> 5</span></td>
                                            <td><span class="invoice-amoun">$459.30</span></td>
                                            <td><span class="text-muted">28-04-19</span></td>
                                            <td><small class="invoice-customer">محمد أحمد</small></td>
                                            <td>
                                                <span class="text-muted"> RangeRover</span>
                                            </td>
                                            <td><span class="badge badge-light-success badge-pill " style="font-family:
                                                font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;
                                                    "> مدفوعة</span></td>
                                        </tr>
                                        <tr>


                                            <td>
                                                <a href="{{ route('show_invoice')}}"> <span class="align-middle"> INV-00223 </span>
                                                </a>
                                            </td>
                                            <td><span class="invoice-amount align-middle"> 5</span></td>
                                            <td><span class="invoice-amoun">$459.30</span></td>
                                            <td><span class="text-muted">28-04-19</span></td>
                                            <td><small class="invoice-customer">محمد أحمد</small></td>
                                            <td>
                                                <span class="text-muted"> RangeRover</span>
                                            </td>
                                            <td><span class="badge badge-light-success badge-pill " style="font-family:
                                                font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;
                                                    "> مدفوعة</span></td>
                                        </tr>
                                        <tr>


                                            <td>
                                                <a href="{{ route('show_invoice')}}"> <span class="align-middle"> INV-00223 </span>
                                                </a>
                                            </td>
                                            <td><span class="invoice-amount align-middle"> 5</span></td>
                                            <td><span class="invoice-amoun">$459.30</span></td>
                                            <td><span class="text-muted">28-04-19</span></td>
                                            <td><small class="invoice-customer">محمد أحمد</small></td>
                                            <td>
                                                <span class="text-muted"> RangeRover</span>
                                            </td>
                                            <td><span class="badge badge-light-danger badge-pill " style="font-family:
                                                font-family: 'Amiri', serif;
                                                font-family: 'Changa', sans-serif;
                                                font-family: 'Tajawal', sans-serif;
                                                    ">غير مدفوعة</span></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection
