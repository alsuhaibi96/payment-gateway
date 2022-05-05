@extends('website.layouts.loginAndregMaster')


@section('title')
    تسجيل الدخول
@endsection



@section('content')
        <!--start signIn form-->
    <section class="login-form container justify-content-center pt-4 pb-4 col-6">

      <div class="row section-header text-center p-4">
        <div class="col-12">
            <h2 class="display-3 fw-bold"> تسجيل الدخول</h2>
        </div>
      </div>

      <div class=" mb-0">
        @if(session()->has('success'))

      <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>نجاح!</strong>     {{ session()->get('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


  @endif

  @if(session()->has('message'))

  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>فشل!</strong>     {{ session()->get('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>


@endif

</div>
      <form autocomplete="off" class="login-form row container g-3" action="{{route('customLogin')}}" method="POST">

      @csrf

        <div class="mb-3 w-50 fs-3">
          <label for="inputPassword4" class="form-label"> البريد الالكتروني</label>
          <input name="email" placeholder="البريد الالكتروني" type="email" class="form-control fs-3" id="inputEmail4">
        </div>

        <div class="mb-3 w-50 fs-3">
          <label for="inputEmail4" class="form-label">كلمة المرور</label>
          <input name="password" placeholder="كلمة المرور " type="password" class="form-control fs-3" id="inputEmail4">
          <a href="{{ route('forget.password.get') }}"> نسيت كلمة المرور ؟ </a>
        </div>
        <div class="col-12">
          <button type="submit" class="btn login-btn">تسجيل الدخول</button>
        </div><hr>
      </form>

    </section>
    <!--end login form-->
@endsection

