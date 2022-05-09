@extends('website.layouts.master')

@section('content')
 <!--start contuct form-->
 <section class=" mt-5 container justify-content-center pt-4 pb-4 d-flex justify-content-around">
     <div >
    <div class="row section-header text-center p-4">
      @if (session('flash'))
      <p style="color: green" class="display-1">{{ session('flash') }}</p>
        
      @endif
      <div class="col-12">
          <h2 class="display-1 mt-5 fw-bold">  تواصل معنا</h2>
      </div>
    </div>
    <form class=" row container g-3 fs-3" action="{{ route('send_contact_message') }}" method="POST">
      @csrf
   
      <div class="mb-3 ">
        <label for="inputPassword4" class="form-label"> اسمك</label>
        <input placeholder="اسمك" type="text" class="form-control p-3 fs-3" id="inputUsername4" name="name">
      </div>
      <div class="mb-3 ">
        <label for="inputPassword4" class="form-label"> البريد الالكتروني</label>
        <input placeholder="البريد الالكتروني" type="email" class="form-control p-3 fs-3" id="inputEmail4" name="email">
      </div>
      <div class="mb-3 ">
        <label for="inputPassword4" class="form-label"> الموضوع</label>
        <input placeholder="..." type="text" class="form-control p-3 fs-3" id="inputSubject4" name="subject">
      </div>
      <div class="mb-3">
        <label for="inputEmail4" class="form-label">اكتب رسالة</label>
        <textarea name="message" id="" cols="30" rows="10" class="form-control p-3 fs-3" placeholder="اكتب هنا..."></textarea>
      </div>
      <div class="col-12">
        <input type="submit" class="btn btn-success" value="ارسال"> 
      </div><hr>
    </form>
    </div>
   
    <div class="w-50 mt-5 h-50  bg-success text-white p-5 fs-4 ">
        <h2 class="display-2">معلومات التواصل</h2>
        <i class="fas fa-envelope-open-text mt-5"></i>&nbsp;&nbsp;<span>wasel@gmail.com</span><br>
        <i class="fas fa-clock mt-4"></i>&nbsp;&nbsp;<span>9:00AM - 12:00PM</span><br>
        <i class="fas fa-phone mt-4"></i>&nbsp;&nbsp;<span>+967 777-777-777</span>

    </div>

  </section>
  <!--end contuct form-->
@endsection