@extends('layouts.master')

@section('content')

<section class="d-flex justify-content-evenly mt-5">
    <div class=" d-flex align-items-center flex-column mt-5">
        <h1 class="display-1">الملف الشخصي</h1>
        <img  src="{{ url('assets/web/images/avater.jpg') }}" class="rounded-circle" alt="">
        <p class="fs-3 text-center text-success mt-5">Roaa Tareq</p>
        <button type="submit" class=" bg-success px-5 py-2 rounded fs-3 text-white">Download new avater</button>
        <button type="submit" class=" border border-success mt-4 px-5 py-2 rounded fs-3 text-success">Delete the image</button>


    </div>
    <div class="mt-5 p-3 fs-3">
        <h1 class="display-1">تحديث المعلومات</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label pt-4">UserName</label>
                <input type="text" class="form-control p-3 fs-3" id="exampleFormControlInput1" placeholder="Roaa tareq">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label pt-4">Email address</label>
                <input type="email" class="form-control p-3 fs-3" id="exampleFormControlInput1" placeholder="roor3hakimi@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label pt-4">Phone number</label>
                <input type="text" class="form-control p-3 fs-3" id="exampleFormControlInput1" placeholder="777 777 777">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label pt-4">password</label>
                <input type="password" class="form-control p-3 fs-3" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <input type="submit" value="update" class="bg-success px-5 py-2 rounded fs-3 text-white">
              <input type="submit" value="cancel" class=" border border-success mt-4 px-5 py-2 rounded fs-3 text-success">

        </form>
    </div>

</section>
@endsection