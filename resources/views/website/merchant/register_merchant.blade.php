@extends('website.layouts.master')


@section('title')
 إنشاء حساب
@endsection

@section('signup')
 class="active"
@endsection

@section('content')
<section ></section>
    <!--start signIn form-->
    <section class="login-form container justify-content-center pt-4 pb-4  " style="    margin: 50px; border-radius: 10px;">
      <div class="row section-header text-center p-4">
        <div class="col-12">
            <h2 class="display-3  fw-bold">إنشاء حساب مؤسسي </h2>
        </div>
      </div>
      <form class="login-form row container g-3s" action="{{ route('register_merchant') }}" method="POST" enctype="multipart/form-data" >
        @csrf
         <div class="row mb-3 ">

          <div class="col-md-6">
            <label for="name" class="form-label fs-4">الاسم الاول</label>
            <input name="firstName" placeholder="الاسم الاول" type="text" class="form-control fs-4 @error('firstName') is-invalid @enderror" id="" value="{{ old('firstName') }}">
            @error('firstName') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>

          <div class="col-md-6">
            <label for="name" class="form-label fs-4">الاسم الاوسط</label>
            <input name="middleName" placeholder="الاسم الاوسط" type="text" class="form-control fs-4 @error('middleName') is-invalid @enderror" id="" value="{{ old('middleName') }}">
            @error('middleName') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="name" class="form-label fs-4" >اللقب</label>
            <input name="lastName" placeholder="اللقب" type="text" class="form-control fs-4 @error('lastName') is-invalid @enderror" id="" value="{{ old('lastName') }}">
            @error('lastName') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
         
         
         
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label fs-4"> البريد الالكتروني</label>
            <input name="email" placeholder="البريد الالكتروني" type="email" class="form-control fs-4 @error('email') is-invalid @enderror" id="inputEmail4" value="{{ old('email') }}">
            @error('email') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
         </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label fs-4">كلمة المرور</label>
            <input name="password" placeholder="كلمة المرور " type="password" class="form-control fs-4 @error('password') is-invalid @enderror" id="inputEmail4" value="{{ old('password') }}">
            @error('password') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label fs-4">تاكيد كلمة المرور</label>
            <input name="confirm_password" placeholder="تاكيد كلمة المرور" type="password" class="form-control fs-4 @error('confirm_password') is-invalid @enderror" id="inputEmail4" value="{{ old('confirm_password') }}">
            @error('confirm_password') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
        </div>
          <div class="col-12">
            <button type="submit" class="btn login-btn">إنشاء حساب جديد</button>
          </div><hr>
        </form>
    </section>
    <!--end login form-->

@endsection
