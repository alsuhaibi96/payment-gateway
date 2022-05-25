
@extends('layout.customer_dashboard')
@section('transfer_customer_details')
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
                                      @if(count($moneyTransfers)>=0)
                                      @foreach ($moneyTransfers as $data)
                                      <tr>
                                      <td>{{ $data->sender_name }}</td>
                                      <td>{{ $data->receiver_name }}</td>
                                      <td>{{ $data->receiver_email }}</td>
                                      <td>{{ $data->receiver_phone_number }}</td>
                                      <td>{{ $data->money_transferred }}</td>
                                      <td>{{ $data->currency  }}</td>
                                      <td>{{ $data->transferring_date  }}</td>
                                      <td>{{ $data->description  }}</td>
                                      <td>{{ $data->tax  }}</td>

                                   


                                          
                                      </tr>
                                 @endforeach
                                
                                      @else
                                      <tr>
                                          <td colspan="9" style="font-size: 20px;text-align: center">لايوجد عمليات تحويل !</td>
                                      </tr>
                                      @endif
                             

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