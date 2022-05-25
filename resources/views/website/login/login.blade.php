@extends('website.layouts.master')


@section('title')
تسجيل الدخول
@endsection

@section('signin')
class="active"
@endsection


@section('content')
<!--start signIn form-->
<section></section>
<br>

<section class="login-form container  mt-5 justify-content-center pt-4 pb-4 col-md-6 col-10 " style="background:#eee; height: 100%; border-radius:10px; margin:20px auto;">
  <div class="row section-header text-center mt-5 p-4">
    <div class="col-12">
      <h2 class="display-3 fw-bold"> تسجيل الدخول</h2>
    </div>
  </div>

  <div class=" mb-0">
    @if(session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>نجاح!</strong> {{ session()->get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>


    @endif

    @if(session()->has('message'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>فشل!</strong> {{ session()->get('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>


    @endif


@if(session()->has('resendLink'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>فشل!</strong>   
    <span> لم يتم تأكيد الايميل ! لإعادة ارسال رسالة تفعيل الايميل اضغط <a href="{{ route('reset_email_again') }}">هنا</a></span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>


@endif


  </div>
  <form autocomplete="off" class="login-form row container g-3" action="{{route('customLogin')}}" method="POST">

    @csrf

    <div class="col-md-6 fs-3">
      <label for="inputPassword4" class="form-label"> البريد الالكتروني</label>
      <input style="text-transform: none"  name="email" placeholder="البريد الالكتروني" type="email" class="form-control fs-3" id="inputEmail4">
    </div>

    <div class="mb-3 col-md-6 fs-3">
      <label for="inputEmail4" class="form-label">كلمة المرور</label>
      <input style="text-transform: none"  name="password" placeholder="كلمة المرور " type="password" class="form-control mb-3 fs-3" id="inputEmail4">
      <a href="{{ route('forget.password.get') }}" style="font-size: 15px"> نسيت كلمة المرور ؟ </a>
    </div>
    <div class="col-12 mt-5" >
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn login-btn " style="flex-direction: row;-ms-flex-align: center;">تسجيل الدخول</button>
    
   
   </div>
     <p class="mb-0  d-flex justify-content-center" data-v-e9c818fa="" style="padding: 10px 10px; font-size:14px!important ;">
                  لايوجد حساب ! 
                        <a href="{{ route('registeration') }}" style="color: var(--green); font-size:14px;" data-v-e9c818fa="">
                              تسجيل حساب  
                        </a>
                    </p>
    </div>
  </form>

</section>
<!--end login form-->
@endsection