@extends('layout.admin_dashboard')


@section('header')
<span class="nav navbar-nav float-left">
    <b>
الابلاغ عن مشكلة
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
            <!-- report of problem Page -->
            <section class="invoice-edit-wrapper">
                <div class="row">
                    <!-- question page -->
                    <div class="col-xl-9 col-md-8 col-12">
                        <div class="card">
                            <div class="card-body pb-0 mx-75">



                                <!-- logo and title -->
                                <div class="row my-2">
                                   <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-start">
                                       <span class="text-dark"><b> FAQ - الأسئلة المتكررة </b> </span>
                                   </div>
                               </div>
                               <div class=" order-2 order-sm-1">
                                   <div class="row">
                                       <div class="col-12 py-20" style="letter-spacing: 0.5px; line-height: 1.8;">
                                            <label class="text-primary" style="font-weight: bold"> كيف يمكنني الاستفادة من خدمة وصل؟ </label>
                                            <label class="text-dark"> يمكنك الاستفادة كعميل أو كتاجر.
                                            <br>
                                            كعميل ، يمكنك القيام بعمليات الشراء من المواقع الأخرى وتحويل رصيد من حسابك إلى أي حساب آخر وعرض احصائيات حول المبلغ الذي تم صرفه خلال العام أو الشهر.
                                            <br>
                                            كتاجر، يمكنك عرض المدفوعات والفواتير ومعرفة العملاء الذين قاموا بالشراء من منتجاتك وإحصائيات الشراء.
                                            </label>
                                       </div>

                                   </div>

                               </div>



                               <hr>

                               <div class=" order-2 order-sm-1">
                                <div class="row">
                                    <div class="col-12 py-20" style="letter-spacing: 0.5px; line-height: 1.8;">
                                         <label class="text-primary" style="font-weight: bold"> ما هي البيانات التي يحصل عليها "وصل" من التاجر؟ </label>
                                         <label class="text-dark">  يحصل وصل على بيانات المدفوعات أثناء الشراء، ويتم تمريرها من خلال الفاتورة أهم ما يحصل عليه هو بيانات عن المنتج الذي تم شراءه ومن المشتري
                                         <br>

                                         <br>
                                         لمزيد من التفاصيل حول عملية ربط الموقع مع التاجر يمكنك متابعة التوثيق: <a href="https://waslpayment.com/document"> <b> Docs </b> </a>
                                         </label>
                                    </div>

                                </div>

                            </div>
                               <hr>

                               <div class=" order-2 order-sm-1">
                                <div class="row">
                                    <div class="col-12 py-20" style="letter-spacing: 0.5px; line-height: 1.8;">
                                         <label class="text-primary" style="font-weight: bold"> ما مدى أمنية "وصل" في الفترة الحالية؟ </label>
                                         <label class="text-dark"> "وصل" حالياً في الفترة التجريبية لذا فإن الأمنية تعد غير كاملة لكننا نعمل على تطوير موقع "وصل" حتى يصل لمرحلة كاملة من الأمنية
                                         <br>

                                         <br>

                                         </label>
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
@endsection