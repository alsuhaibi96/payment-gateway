@extends('layout.merchant_dashboard')
@section('key_genrator')
active
@endsection
@section('header')
<span class="nav navbar-nav float-left">
    <b>
         مفاتيح الامان
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
                        <h5 class="mb-0">معلومات المفاتيح</h5>
                        <small class="float-end text-muted">مفاتيح الامان</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('key_generat') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-form-label col-sm-1" for="basic-icon-default-fullname">المفتاح العام</label>
                                <div class="col-sm-11">

                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" autocorrect="off" autocapitalize="none" autocomplete="off" value="{{$public_key}}" disabled name="card_holder" class="form-control" id="basic-icon-default-fullname" placeholder="أسم العميل" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" style="text-transform: none;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-form-label col-sm-1" for="basic-icon-default-fullname">المفتاح الخاص</label>
                                <div class="col-sm-11">

                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input value="{{$private_key}}" type="text" autocapitalize="off"  disabled name="card_holder" class="form-control" id="basic-icon-default-fullname" placeholder="أسم العميل" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" style="text-transform: none;" />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10" style="text-align: left;">
                                    <button type="submit" class="btn btn-primary">توليد</button>
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