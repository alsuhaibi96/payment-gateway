@extends('layout.customer_dashboard')
@section('transfer')
    active
@endsection

@section('header')
<span class="nav navbar-nav float-left">
    <b>
    تحويل رصيد
    </b>
</span>
@endsection


@section('content')

               

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay col-12"></div>
            <div class="content-wrapper col-12">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <!-- app invoice View Page -->
                    <section class="invoice-edit-wrapper">
                        <div class="row">
                            <!-- invoice view page -->
                            <div class="col-xl-9 col-md-8 col-sm-12 ">
                                <form action="{{ route('transfer_money') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                @if(session()->has('success'))

                                    <div class="alert alert-success alert-dismissible fade show mx-20 " role="alert">
                                        <strong>نجاح!</strong>     {{ session()->get('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                              
                              
                                @endif
                                        
                                <div class="card ">
                                    <div class="card-body pb-0 mx-25 ">
                

                                         <!-- logo and title -->
                                         <div class="row my-2">
                                            <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                                <span class="text-dark col-6"><b> بيانات المستلم </b> </span>
                                          </div>
                                        </div>
                                    

                                        <div class=" order-2 order-sm-1">
                                            <div class="row">
                                                <div class="col-6  py-20  has-validation">
                                                     <label class="text-dark"> البريد الالكتروني  </label>
                                                     <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني" value="{{ old('email') }}">
                                                  
                                                     @if($errors->has('email'))
                                                     <div class="" style="color: red;font-size: 12px" >
                                                        {{ $errors->first('email') }}
                                                      </div>
                                                     {{-- <span class="invalid-feedback"style="color: red;font-size: 12px" ></span> --}}
                                                     @endif
                                                </div>

                                               
                                                <div class="col-6">
                                                    <fieldset class="invoice-address form-group">
                                                        <label for=""> مبلغ التحويل </label>
                                                        <input onkeyup="callRestBalance()" type="number" name="transfer_money" class="form-control" placeholder="قيمة المبلغ بالدولار" value="{{ old('transfer_money') }}" id="balance">
                                                        @if($errors->has('transfer_money'))
                                                        <div class=""style="color: red;font-size: 12px">
                                                           {{ $errors->first('transfer_money') }}
                                                         </div>
                                                  
                                                         @elseif ($errors->has('customError'))
                                                         <div class=""style="color: red;font-size: 12px">
                                                            {{ $errors->first('customError') }}
                                                    
                                                          </div>
                                                          @endif
                                                    </fieldset>
                                                </div>

                                            </div>

                                        </div>

                                            

                                        <hr>

                                        <!-- invoice address and contact -->

                                       

                                        <div class="row invoice-info">
                                            <div class="row">
                                                
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-md-10 mt-25">


                                                <fieldset class="invoice-address form-group">
                                                    <textarea style="resize: none" class="form-control" rows="4" name="transfer_desc" placeholder="وصف / تفاصيل" value="{{ old('transfer_desc') }}"></textarea>
                                                    @if($errors->has('transfer_desc'))
                                                    <div class=""style="color: red;font-size: 12px" >
                                                       {{ $errors->first('transfer_desc') }}
                                                     </div>
                                                     @endif
                                                </fieldset>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="card-body pt-50">
                                        <!-- invoice subtotal -->
                                        <hr>
                                        <div class="invoice-subtotal pt-50 ">
                                            <div class="row">
                                                <div class="col-md-5 col-12">
                                                    <div class="d-flex justify-content-between py-50">
                                                        <span class="invoice-terms-title">إرسال نسخة عبر الإيميل</span>
                                                        <div class="custom-control custom-switch custom-switch-glow">
                                                            <input type="checkbox" class="custom-control-input" checked id="paymentTerm">
                                                            <label class="custom-control-label" for="paymentTerm">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-content-between py-50">
                                                        <span class="invoice-terms-title">المبلغ شامل الضريبة</span>
                                                        <div class="custom-control custom-switch custom-switch-glow">
                                                            <input type="checkbox" class="custom-control-input" checked id="paymentTerm">
                                                            <label class="custom-control-label" for="paymentTerm">
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-lg-6 col-md-7 offset-lg-2 col-12">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                            <span class="invoice-subtotal-title">رصيدك الحالي</span>
                                                            <input type="hidden"  id="current_balance" value=" {{Auth::user()->bank_accounts->balance }} ">  
                                                            <h6 class="invoice-subtotal-value mb-0" id="headline_test"> {{Auth::user()->bank_accounts->balance.' $' }}</h6>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                            <span class="invoice-subtotal-title">المبلغ المحوّل</span>
                                                            <h6 class="invoice-subtotal-value mb-0" id="transferred_id">{{ '0000000' .' $'}}</h6>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                            <span class="invoice-subtotal-title">ضريبة التحويل</span>
                                                            <h6 class="invoice-subtotal-value mb-0"> 50 $</h6>
                                                        </li>

                                                       
                                                    </ul>
                                                    <div class="col-12 border-0 pb-0">
                                                        <button class="btn btn-primary btn-block subtotal-preview-btn submit_transfer" type="submit" id="submit_transfer">تأكيد العملية</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          
                                </form>
                            </div>
                            <!-- invoice action  -->
                            {{-- <div class="col-xl-3 col-md-4 col-12">
                                <div class="card invoice-action-wrapper shadow-none border">
                                    <div class="card-body">
                                        <div class="invoice-action-btn mb-1">
                                            <button class="btn btn-primary btn-block invoice-send-btn">
                                                <i class="bx bx-send"></i>
                                                <span>إرسال العملية</span>
                                            </button>
                                        </div>
                                        
                                        
                                        <div class="invoice-action-btn mb-1">
                                            <button class="btn btn-light-primary btn-block">حفظ في المسوّدة</button>
                                        </div>
                                        <div class="invoice-action-btn mb-1">
                                            <button class="btn btn-success btn-block">
                                                <i class='bx bx-dollar'></i>
                                                <span> تحويل مبلغ آخر </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div> --}}
                        </div>
                    </section>

                </div>
            </div>
        </div>
        <!-- END: Content-->
<script>
$('.submit_transfer').click(function(){
return Confirm('هل انت متأكد ؟');
});

//to get how much left balance in the account
function callRestBalance(){
var balance=document.getElementById('balance').value;
var current_balance=document.getElementById('current_balance').value;transferred_id

current_balance-=balance;

    document.getElementById("headline_test").innerHTML=current_balance+' $';
    document.getElementById("transferred_id").innerHTML=balance+' $';


//    value.innerHTMl="hello";
}
</script>
@endsection
