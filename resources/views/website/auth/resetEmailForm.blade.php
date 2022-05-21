@extends('website.layouts.master')

  
@section('content')
  <section class=" mt-5 container justify-content-center pt-5 justify-content-around">
<main class="login-form mt-5">
  
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header fs-3">
      إعادة ارسال الايميل من جديد
                    </div>
                  <div class="card-body">
  
                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                 
                    @endif
                    @if(session()->has('error'))

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>فشل!</strong>     {{ session()->get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  
                  
                  @endif
  
                      <form action="{{ route('reset_email_again') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                             
                              <div class="col-md-6">
                                <label for="email_address" class="col-md-4 col-form-label fs-5 fw-bold">عنوان البريد الالكتروني</label>
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                 إرسال رابط 
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
</section>

@endsection