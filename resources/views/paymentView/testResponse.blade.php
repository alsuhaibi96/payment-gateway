<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ url('assets/web/css/test.css') }}">
    <link rel="stylesheet" href="{{ url('assets/web/css/test_media_query.css')}}">

    <title>Success Page</title>
</head>

<body>
    <div class="payment-done-container " style="margin-top: 50px">
        <div class="payment-done-inner-container">
            <div class="sign-check-container">
                <div class="sign-check"></div>
            </div>
            <br>
            {{-- <h2 class="done-payment-caption">{{  $status  }}</h2> --}}
            <div class="done-payment-paragraph-container">
                <p class="done-payment-paragraph">
                    شكراً لك , عملية الدفع اكتملت بنجاح.
                    {{-- <br> تم إرسال رسالة تأكيد الى --}}

                </p>
                {{-- <a class="payment-done-email" href="mailto:example@gmail.com">
                    example@gmail.com
                                </a> --}}
            </div>

            <h3 class="payment-details-caption">تفاصيل الطلب</h3>
        
   
            <hr class="payment-done-line">
            <div class="payment-details-container">
                <div class="payment-details-row">
                    <label>اجمالي الفاتورة</label><span style="text-align: center">   {{ $paid_amount[0] }}</span>
                </div>
                <div class="payment-details-row">
                    <label>تاريخ الطلب</label><span style="text-align: center">{{ $created_at[0] }}</span>
                </div>
                <div class="payment-details-row">
                    <label>نوع البطاقة</label><span >{{ $card_type }}</span>
                </div>
                <div class="payment-details-row">
                    <label>صاحب البطاقة</label><span style="text-align: center">{{ $card_holder }}</span>
                </div>
     
            </div>
            <div class="payment-btn-container">
                <button class="payment-done-btn" onclick="location.reload();">تم</button>
            </div>
        </div>

    </div>

    </div>
    </div>

</body>

</html>