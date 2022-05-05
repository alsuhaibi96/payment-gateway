@extends('website.layouts.loginAndregMaster')


@section('title')
 إنشاء حساب
@endsection



@section('content')
    <!--start signIn form-->
    <section class="login-form container justify-content-center pt-4 pb-4  ">
      <div class="row section-header text-center p-4">
        <div class="col-12">
            <h2>إنشاء حساب جديد</h2>
        </div>
      </div>
      <form class="login-form row container g-3s" action="{{ route('register_customer') }}" method="POST" enctype="multipart/form-data" >
        @csrf
         <div class="row">

          <div class="col-md-3">
            <label for="name" class="form-label">الاسم الاول</label>
            <input name="firstName" placeholder="الاسم الاول" type="text" class="form-control @error('firstName') is-invalid @enderror" id="" value="{{ old('firstName') }}">
                                            @error('firstName') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>

          <div class="col-md-3">
            <label for="name" class="form-label">الاسم الاوسط</label>
            <input name="middleName" placeholder="الاسم الاوسط" type="text" class="form-control @error('middleName') is-invalid @enderror" id="" value="{{ old('middleName') }}">
            @error('middleName') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>

          <div class="col-md-3">
            <label for="name" class="form-label">اللقب</label>
            <input name="lastName" placeholder="اللقب" type="text" class="form-control @error('lastName') is-invalid @enderror" id="" value="{{ old('lastName') }}">
            @error('lastName') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
         </div>

         <div class="row">
          <div class="col-md-3">
            <label for="inputEmail4" class="form-label"> البريد الالكتروني</label>
            <input name="email" placeholder="البريد الالكتروني" type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" value="{{ old('email') }}">
            @error('email') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
         </div>

        <div class="row">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">كلمة المرور</label>
            <input name="password" placeholder="كلمة المرور " type="password" class="form-control @error('password') is-invalid @enderror" id="inputEmail4" value="{{ old('password') }}">
            @error('password') <span id="exampleInputEmail1-error" class="error invalid-feedback ">{{ $message }}</span> @enderror
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">تاكيد كلمة المرور</label>
            <input name="confirm_password" placeholder="تاكيد كلمة المرور" type="password" class="form-control @error('confirm_password') is-invalid @enderror" id="inputEmail4" value="{{ old('confirm_password') }}">
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
