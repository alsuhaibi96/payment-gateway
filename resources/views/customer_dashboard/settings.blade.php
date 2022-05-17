@extends('layout.customer_dashboard')
@section('settings')
    active
@endsection
@section('header')
<span class="nav navbar-nav float-left">
    <b>
    إعدادت الحساب الشخصي
    </b>
</span>
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
                                        @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @elseif (session('wrong'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('wrong') }}
                                        </div>
                                    @endif

                                        <!-- name and email -->
                                        <div class="row mb-2">
                                            <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                                <span class="text-dark"><b> تعديل الصورة </b> </span>
                                            </div>
                                        </div>
                                        <!-- users edit media object start -->
                                        
                                    <div class="media mb-2">
                                        <a class="mr-2" href="javascript:void(0);">
                                            @if(isset(Auth::user()->profile->avatar))

                                             <img src="{{ asset('images/'. Auth::user()->profile->avatar) }}"alt="users avatar" class="users-avatar-shadow rounded-circle w-2"   style="object-fit: cover;">                                           
                                            @else
                                            <img src="{{ url('assets/web/images/avatar.jpg') }}"alt="users avatar" class="users-avatar-shadow rounded-circle" style="object-fit: cover">                                          


                                            @endif
                                        </a>
                                      
                                    </div>   
                                    <div class="col-12 px-0 d-flex mb-5">
                                    
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-primary mr-25">تغيير</a>
                                        
                                    </div>
                                        <div class="media-body">
                                            
                                           
                                            {{-- start model of change image --}}
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">تعديل الصورة</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route("editImage") }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="card-body">
                                                               
                                                            <input type="file" name="avatar" id="">
                                                            
                                                            
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                                      <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                                                    </form>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              {{-- end model --}}
                                           
                                            
                                        </div>
                                    </div>

                                     <!-- name and email -->
                                     <div class="row mb-2">
                                        <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                            <span class="text-dark"><b> تعديل الملف الشخصي </b> </span>
                                        </div>
                                    </div>


                                        <form action="{{ route('editProfile') }}" method="post">
                                            @csrf
                                        <div class=" order-2 order-sm-1">
                                            <div class="row">
                                                <div class="col-6 py-20">
                                                     <label class="text-dark">الاسم الاول </label>
                                                     <input type="text" class="form-control" placeholder="Mo'khtar Mohammed Ghaleb"name="first_name" value="{{Auth::user()->first_name }}" >
                                                </div>
                                                <div class="col-6 py-20">
                                                    <label class="text-dark"> الاسم الثاني </label>
                                                    <input type="text" class="form-control" placeholder="الاسم الثاني" name="middle_name" value="{{Auth::user()->middle_name }}" >
                                               </div>

                                            </div>
                                        </div>

                                            <div class="order-2 order-sm-1">
                                                <div class="row">
                                                   <div class="col-6 py-20">
                                                       <label class="text-dark"> اللقب </label>
                                                       <input type="text" class="form-control fs-6" placeholder="اللقب" name="last_name" value="{{Auth::user()->last_name }}">
                                                   </div>


                                                <div class="col-6 py-20">
                                                    <label class="text-dark"> البريد الالكتروني </label>
                                                    <input type="text" class="form-control fs-6" placeholder="البريد الالكتروني" name="email" value="{{Auth::user()->email }}">
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
                                                    <label class="text-dark"> العنوان الثاني </label>

                                                    <input type="text" class="form-control" placeholder=" العنوان الاول"  >

                                                    <input type="text" class="form-control" placeholder=" العنوان الاول"  >

                                               </div>

                                            </div>

                                        </div>

                                            <div class="order-2 order-sm-1">
                                                <div class="row">
                                                   <div class="col-6">
                                                       <label class="text-dark"> رقم الجوال </label>

                                                       <input type="text" class="form-control fs-6" placeholder="00967-71234567" >

                                                   </div>

                                                  
                                                   

                                             </div>
                                            </div>


                                        <hr>
                                     
                                            
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
                                    </form>
                                    </div>
                                </div>
                            </div>
                           
                        </div>


                          
                        <div class="row">
                            <!-- password card model -->
                            <div class="col-xl-9 col-md-8 col-12">
                                <div class="card">
                                    <div class="card-body pb-0 mx-25">

                                        <!-- change password -->
                                        <div class="row mb-2">
                                            <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                                <span class="text-dark"><b> {{ __('تغيير كلمة المرور') }} </b> </span>
                                            </div>
                                        </div>
                                        <form action="{{ route('update-password') }}" method="POST">
                                            @csrf
                                            <div class="card-body">
                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @elseif (session('error'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ session('error') }}
                                                    </div>
                                                @endif
                                        <div class=" order-2 order-sm-1">
                                            <div class="row">
                                                <div class="col-12 py-20 mb-2">
                                                     <label class="text-dark">قم بتأكيد كلمة مرورك الحالية </label>
                                                     <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput" placeholder="كلمة السر الحالية" >
                                                         @error('old_password')
                                                          <span class="text-danger">{{ $message }}</span>
                                                         @enderror
                                                     <hr>
                                                </div>
                                                
                                                <div class="col-12 py-20">
                                                    <label  for="newPasswordInput"  class="text-dark"> أدخل كلمة المرور الجديدة (حافظ على أمان حسابك. لا تستخدم اسمك.) </label>
                                                    <input  name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput" placeholder="كلمة السر الجديدة" >
                                                    @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                               </div>

                                            </div>

                                        </div>

                                            <div class="order-2 order-sm-1">
                                                <div class="row">
                                                   <div class="col-12 py-20">
                                                    <label for="confirmNewPasswordInput" class="text-dark">قم بتأكيد كلمة مرورك الجديدة </label>

                                                       <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput" placeholder="تأكيد كلمة السر">
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
                                                            <button type="submit" class="btn btn-primary btn-block subtotal-preview-btn">تغيير كلمة السر</button>
                                                        </li>
                                                   
                                            </div>
                                        </div>
                                    </div>
                                 </form>
                                </div>
                            </div>
                        </div>
                    </div>
                            <div class="row">
                                <!-- authentication card model -->
                                <div class="col-xl-9 col-md-8 col-12">
                                    <div class="card">
                                        <div class="card-body pb-0 mx-25">
    
                                           
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
                                    </div>
                                </div>
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
