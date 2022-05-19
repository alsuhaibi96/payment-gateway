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
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Column selectors with Export Options and print table -->
            <section id="column-selectors" style="padding: 30px 0;">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    last Invoice
                                </h4>
                            </div>
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table  dataex-html5-selectors">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>order_reference</th>
                                                <th>Total Amount</th>
                                                <th>Currency</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($Invoices->count() == 0)
                                            <tr>
                                                <td colspan="8">No products to display.</td>
                                            </tr>

                                            @foreach($Invoices as $invoice)
                                            <tr>
                                                <td>{{$invoice->id}}</td>
                                                <td>{{$invoice->orders_invoice->invoice_referance}}</td>
                                                <td>{{$invoice->amount_due}}</td>
                                                <td>{{$invoice->orders_invoice->currency}}</td>
                                                <td>
                                                    @foreach (json_decode($invoice->orders_invoice->products,true) as $product)
                                                    {{$product['product_name']}}.,
                                                    @endforeach
                                                </td>

                                                <td>{{$invoice->created_at->toDateString()}}</td>
                                                <td>{{$invoice->status}}</td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="edit-invoice.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="invoice-view.html"><i class="fa fa-eye m-r-5"></i> View</a>
                                                            <a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a>
                                                            <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>


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
            <!-- Column selectors with Export Options and print table -->

        </div>

    </div>
</div>
@endsection