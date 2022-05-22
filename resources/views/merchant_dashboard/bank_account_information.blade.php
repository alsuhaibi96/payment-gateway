@extends('layout.merchant_dashboard')
@section('bank_account')
active
@endsection
@section('header')
<span class="nav navbar-nav float-left">
    <b>
         الحساب البنكي
    </b>
</span>
@endsection
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <!-- Page Wrapper -->
    <div class="content-wrapper">
        <!-- Page Content -->
        <!-- Page Header -->
        <div class="content-header row">

        </div>

        <!-- /Page Content -->
        <div class="row" style="margin-top: 25px;">
            <!-- Basic with Icons -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">معلومات الحساب البنكي</h5>
                        <small class="float-end text-muted">الحساب البنكي</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_acount') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <input type="hidden" name="id"  value="{{$card_info->id}}">

                                <div class="col-sm-6">
                                    <label class="col-form-label" for="basic-icon-default-fullname">الاسم</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" value="{{$card_info->card_holder}}" name="card_holder" class="form-control" id="basic-icon-default-fullname" disabled placeholder="أسم العميل" disabled aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label class="col-form-label" for="basic-icon-default-company">رقم الحساب البنكي</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                        <input type="text" id="basic-icon-default-company" class="form-control" disabled value="{{$bank_acount->account_number}}" name="account_number" placeholder="رقم الحساب البنكي" disabled aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">معلومات بطاقة الائتمان</h5>
                                <small class="float-end text-muted">بطاقة الائتمان</small>
                            </div>

                            <div class="row mb-3">

                                <div class="col-sm-6">
                                    <label class="col-form-label" for="basic-icon-default-fullname">اسم حامل البطاقة</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" value="{{$card_info->card_holder}}" name="card_holder_name" disabled class="form-control" id="basic-icon-default-fullname" placeholder="اسم حامل البطاقة" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label class="col-form-label" for="basic-icon-default-company">رقم البطاقة</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                        <input type="text" value="{{$card_info->card_number}}" name="card_number" id="basic-icon-default-company" disabled class="form-control" placeholder="Ex:0101 0101 0101 1011" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-sm-6">
                                    <label class="col-form-label" for="basic-icon-default-fullname">cvv</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" value="{{$card_info->cvv}}" name="cvv" class="form-control" id="basic-icon-default-fullname" placeholder="Ex:123" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label class="col-form-label" for="basic-icon-default-company">تاريخ انهاء البطاقة</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                        <input id="basic-icon-default-company" name="expiration_yy" value="{{$card_info->expiration_yy.'/'.$card_info->expiration_mm}}" disabled placeholder="Ex:12\22" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" type="text" inputmode="numeric" autocomplete="off" name="expiration_yy" maxlength="5" aria-label="Card expiration date" class="form-control" />
                                    </div>
                                </div>
                            </div>


                            <div class="row justify-content-end">
                                <div class="col-sm-10" style="text-align: left;">
                                    <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <!-- /Page Wrapper -->
</div>
@endsection