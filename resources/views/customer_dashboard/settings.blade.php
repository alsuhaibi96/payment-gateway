@extends('layout.customer_dashboard')

@section('header')
<span class="nav navbar-nav float-left">
    <b>
    إعدادت الحساب الشخصي
    </b>
</span>
@endsection

@section('settings')
    active
@endsection

@section('content')




        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <!-- app account View Page -->
                    <section class="invoice-edit-wrapper">

                        <div class="row">
                            <!-- account view page -->
                            <div class="col-xl-9 col-md-8 col-12">
                                <div class="card">
                                    <div class="card-body pb-0 mx-25">

                                        <!-- name and email -->
                                        <div class="row mb-2">
                                            <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                                <span class="text-dark"><b> اعداد الملف الشخصي </b> </span>
                                            </div>
                                        </div>
                                        <div class=" order-2 order-sm-1">
                                            <div class="row">
                                                <div class="col-6 py-20">
                                                     <label class="text-dark">الاسم الاول </label>
                                                     <input type="text" class="form-control" placeholder="Mo'khtar Mohammed Ghaleb" >
                                                </div>
                                                <div class="col-6 py-20">
                                                    <label class="text-dark"> الاسم الثاني </label>
                                                    <input type="text" class="form-control" placeholder="الاسم الثاني" >
                                               </div>

                                            </div>

                                        </div>

                                            <div class="order-2 order-sm-1">
                                                <div class="row">
                                                   <div class="col-6 py-20">
                                                       <label class="text-dark"> اللقب </label>
                                                       <input type="text" class="form-control fs-6" placeholder="اللقب">
                                                   </div>


                                                <div class="col-6 py-20">
                                                    <label class="text-dark"> البريد الالكتروني </label>
                                                    <input type="text" class="form-control fs-6" placeholder="البريد الالكتروني" >
                                                 </div>
                                             </div>
                                            </div>


                                        <hr>

                                         <!-- address-->
                                         <div class="row my-2">
                                            <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                                <span class="text-dark"><b>  العناوين </b> </span>
                                            </div>
                                        </div>
                                        <div class=" order-2 order-sm-1">
                                            <div class="row">
                                                <div class="col-6 py-20">
                                                     <label class="text-dark"> العنوان الاول </label>
                                                     <input type="text" class="form-control" placeholder="العنوان الاول" >
                                                </div>

                                                <div class="col-6 py-20">
                                                    <label class="text-dark"> العنوان الثاني </label>
                                                    <input type="text" class="form-control" placeholder=" العنوان الاول" >
                                               </div>

                                            </div>

                                        </div>

                                            <div class="order-2 order-sm-1">
                                                <div class="row">
                                                   <div class="col-6">
                                                       <label class="text-dark"> رقم الجوال </label>
                                                       <input type="text" class="form-control fs-6" placeholder="00967-71234567">
                                                   </div>




                                             </div>
                                            </div>


                                        <hr>
                                        <div class="col-lg-5 col-md-7  col-12">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item  border-0 pb-0">

                                                 <img  class="rounded" style="width: 100px;" src="{{url('assets/web/images/avater.jpg')}}" alt="">
                                                </li>
                                                <li class="list-group-item border-0 pb-0">
                                                    <button class="btn btn-primary btn-block subtotal-preview-btn">اضافة صورة جديدة</button>
                                                </li>
                                            </ul>
                                        </div>


                                    </div>
                                    <div class="card-body pt-50">
                                        <!-- account subtotal -->
                                        <hr>
                                        <div class="invoice-subtotal pt-50">
                                            <div class="row">




                                                        <li class="list-group-item border-0 pb-0">
                                                            <button class="btn btn-primary btn-block subtotal-preview-btn">تحديث الملف الشخصي</button>
                                                        </li>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <!-- password card model -->
                            <div class="col-xl-9 col-md-8 col-12">
                                <div class="card">
                                    <div class="card-body pb-0 mx-25">

                                        <!-- name and email -->
                                        <div class="row mb-2">
                                            <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                                <span class="text-dark"><b> اعداد  كلمة السر </b> </span>
                                            </div>
                                        </div>
                                        <div class=" order-2 order-sm-1">
                                            <div class="row">
                                                <div class="col-12 py-20 mb-2">
                                                     <label class="text-dark">قم بتأكيد كلمة مرورك الحالية </label>
                                                     <input type="text" class="form-control" placeholder="كلمة السر الحالية" >
                                                     <hr>
                                                </div>

                                                <div class="col-12 py-20">
                                                    <label class="text-dark"> أدخل كلمة المرور الجديدة (حافظ على أمان حسابك. لا تستخدم اسمك.) </label>
                                                    <input type="text" class="form-control" placeholder="كلمة السر الجديدة" >
                                               </div>

                                            </div>

                                        </div>

                                            <div class="order-2 order-sm-1">
                                                <div class="row">
                                                   <div class="col-12 py-20">
                                                    <label class="text-dark">قم بتأكيد كلمة مرورك الجديدة </label>

                                                       <input type="text" class="form-control fs-6" placeholder="تأكيد كلمة السر">
                                                   </div>



                                             </div>
                                            </div>









                                    </div>
                                    <div class="card-body pt-50">
                                        <!-- account subtotal -->
                                        <hr>
                                        <div class="invoice-subtotal pt-50">
                                            <div class="row">




                                                        <li class="list-group-item border-0 pb-0">
                                                            <button class="btn btn-primary btn-block subtotal-preview-btn">تغيير كلمة السر</button>
                                                        </li>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- password card model -->
                                <div class="col-xl-9 col-md-8 col-12">
                                    <div class="card">
                                        <div class="card-body pb-0 mx-25">

                                            <!-- name and email -->
                                            <div class="row mb-2">
                                                <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                                    <span class="text-dark"><b> التحقق بخطوتين </b> </span>
                                                </div>



                                            </div>











                                        </div>
                                        <div class="card-body pt-50">
                                            <div class="col-12 py-20">
                                                <p>أضف طبقة أمان إضافية إلى حسابك باستخدام رمز أمان يُستخدم لمرة واحدة بالإضافة إلى كلمة المرور الخاصة بك في كل مرة تقوم فيها بتسجيل الدخول.</p>
                                           </div>
                                           <div class="col-3">
                                            <div class="input-group-text">
                                                <label for="yer" class="text-dark"> أرسل لي رمزًا </label>
                                                <input name="currency" id="YER" type="radio" aria-label="yer" required>
                                            </div>
                                        </div>

                                            <hr>
                                            <div class="invoice-subtotal pt-50">
                                                <div class="row">




                                                            <li class="list-group-item border-0 pb-0">
                                                                <button class="btn btn-primary btn-block subtotal-preview-btn">إعداد</button>
                                                            </li>

                                                </div>
                                            </div>
                                        </div>


                    </section>

                </div>
            </div>
        </div>

        <!-- END: Content-->

        <!-- Tec Suppoort -->
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@endsection
