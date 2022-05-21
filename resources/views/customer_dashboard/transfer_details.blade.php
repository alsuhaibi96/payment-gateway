
@extends('layout.customer_dashboard')
@section('transfer')
    active
@endsection

@section('header')
<span class="nav navbar-nav float-left">
    <b>
فاتورة التحويل
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
     
        <!-- Column selectors with Export Options and print table -->
        <section id="column-selectors">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                           اخر عمليات التحويل بين الحسابات
                            </h4>
                        </div>
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table table-striped dataex-html5-selectors">

                                    <thead>
                                        <tr>
                                            <th>اسم المرسل</th>
                                            <th>اسم المستلم</th>
                                            <th>ايميل المستلم</th>
                                            <th>رقم هاتف المستلم</th>
                                            <th>المبلغ</th>
                                            <th>العملة</th>
                                            <th>التاريخ</th>
                                            <th>الوصف</th>
                                            <th>الضريبة</th>


                                        
                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 12px">
                                        
                                @foreach ($items as $data)
    
                                   
                                        <tr>
                                        <td>{{ $items['sender_name'] }}</td>
                                        <td>{{ $items['receiver_name'] }}</td>
                                        <td>{{ $items['receiver_email'] }}</td>
                                        <td>{{ $items['receiver_phone_number'] }}</td>
                                        <td>{{ $items['money_transferred'] }}</td>
                                        <td>{{ $items['currency'] }}</td>
                                        <td>{{ $items['transferring_date'] }}</td>
                                        <td>{{ $items['description'] }}</td>
                                        <td>{{ $items['tax'] }}</td>

                                     


                                            
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

<!-- END: Content-->
@endsection