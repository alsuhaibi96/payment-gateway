@extends('layout.merchant_dashboard')
@section('financial')
    active
@endsection
@section('header')
<span class="nav navbar-nav float-left">
    <b>
      الحركة المالية
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
           
            <section class="invoice-list-wrapper">
              
               

        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus ">
                    
                    <fieldset class="form-group position-relative">
                        <label class="focus-label">From</label>
                        <input type="date" class="form-control pickadate-firstday" placeholder="Select Date">
                        
                    </fieldset>
                   
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <div class="form-group form-focus">
                   
                    <fieldset class="form-group position-relative">
                        <label class="focus-label">To</label>
                        <input type="date" class="form-control " >
                        
                    </fieldset>
                </div>
            </div>
        </div>
        <!-- /Search Filter -->
        <section id="column-selectors" style="padding: 30px 0;">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive p-25">
                        <table class="table  invoice-data-table  nowrap dataex-html5-selectors m-2">
                            <thead>
                                <tr>
                                    <th>transaction_date</th>
                                    <th>DescriptionOrAccountTitle</th>
                                    <th>AmountDebit</th>
                                    <th>AmountCredit</th>
                                    <th>Reference</th>
                                    <th>IsLine</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($movements as $movement)
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
                    

        <section id="column-selectors" style="padding: 0; margin:30px 0 0 0;">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <label for="dateRangePicker" class="form-label">فلترة حسب التاريخ</label>
                                <form action="{{ route('filter_financial_movement') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="input-group input-daterange" id="bs-datepicker-daterange">
                                            <input type="date" name="from" id="dateRangePicker" placeholder="FROM: MM/DD/YYYY" class="form-control" />
                                            <span class="input-group-text">to</span>
                                            <input type="date" name="to" placeholder="TO: MM/DD/YYYY" class="form-control " />
                                        </div>
                                        <input type="submit" value="تصفية" class="btn btn-success form-control">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body card-dashboard ">
                            <div class=" table-responsive p-25">
                                <table class="table table-bordered  dataex-html5-selectors" >
                                    <thead >
                                        <tr >
                                            <th data-orderable="false">transaction_date</th>
                                            <th data-orderable="false">DescriptionOrAccountTitle</th>
                                            <th>AmountDebit</th>
                                            <th>AmountCredit</th>
                                            <th>Reference</th>
                                            <th>IsLine</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @if ($movements->count() == 0)
                                        <tr>
                                            <td colspan="6" style="text-align: center;">لا يوجد اي حركة الى حد الان</td>
                                        </tr>
                                        @endif
                                        @foreach($movements->sortBy('Reference') as $movement)
                                        <tr>
                                            @if($movement->transaction_date !=null)
                                            <td rowspan="2  ">{{$movement->transaction_date}}</td>
                                            @endif

                                            @if($movement->DescriptionOrAccountTitle ==null)
                                            <td>------</td>
                                            @else
                                            <td>{{$movement->DescriptionOrAccountTitle}}</td>
                                            @endif

                                            @if($movement->AmountDebit ==null)
                                            <td>------</td>
                                            @else
                                            <td>{{$movement->AmountDebit}}</td>
                                            @endif

                                            @if($movement->AmountCredit ==null)
                                            <td>------</td>
                                            @else
                                            <td>{{$movement->AmountCredit}}</td>
                                            @endif

                                            @if($movement->Reference ==null)
                                            <td>------</td>
                                            @else
                                            <td>{{$movement->Reference}}</td>
                                            @endif

                                            @if($movement->IsLine ==null)
                                            <td>------</td>
                                            @else
                                            <td>{{$movement->IsLine}}</td>
                                            @endif
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





    </div>
    <!-- /Page Wrapper -->
</div>
@endsection