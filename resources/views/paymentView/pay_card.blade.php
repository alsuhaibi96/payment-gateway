<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" href="/favicon.ico">
    <title>Checkout</title>
    <link href="{{ url('assets/web/css/app.f33fcc29.css') }}" rel="preload" as="style">

    <link href="{{ url('assets/web/css/app.f33fcc29.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <link id="avast_os_ext_custom_font" href="chrome-extension://eofcbnmajmjmplflapaojjnihcjkigck/common/ui/fonts/fonts.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        button.btn[data-v-5f0b9ba1] {
            display: inline-block;
            font-weight: 300;
            line-height: 1.25;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            cursor: pointer;
            letter-spacing: 1px;
            transition: all .15s ease
        }
        
        button.btn.btn-sm[data-v-5f0b9ba1] {
            padding: .4rem .8rem;
            font-size: .8rem;
            border-radius: .2rem
        }
        
        button.btn.btn-primary[data-v-5f0b9ba1] {
            color: #fff;
            background-color: #45C8F1;
            border-color: #45C8F1
        }
        
        button.btn.btn-outline-primary[data-v-5f0b9ba1] {
            color: #45C8F1;
            background-color: transparent;
            border-color: #45C8F1
        }
        
        button.btn.btn-danger[data-v-5f0b9ba1] {
            color: #fff;
            background-color: #FF4949;
            border-color: #FF4949
        }
        
        .text-muted[data-v-5f0b9ba1] {
            color: #8492A6
        }
        
        .text-center[data-v-5f0b9ba1] {
            text-align: center
        }
        
        .drop-down-enter[data-v-5f0b9ba1],
        .drop-down-leave-to[data-v-5f0b9ba1] {
            transform: translateX(0) translateY(-20px);
            transition-timing-function: cubic-bezier(0.74, 0.04, 0.26, 1.05);
            opacity: 0
        }
        
        .drop-down-enter-active[data-v-5f0b9ba1],
        .drop-down-leave-active[data-v-5f0b9ba1] {
            transition: all .15s
        }
        
        .move-left-enter[data-v-5f0b9ba1],
        .move-left-leave-to[data-v-5f0b9ba1] {
            transform: translateY(0) translateX(-80px);
            transition-timing-function: cubic-bezier(0.74, 0.04, 0.26, 1.05);
            opacity: 0
        }
        
        .move-left-enter-active[data-v-5f0b9ba1],
        .move-left-leave-active[data-v-5f0b9ba1] {
            transition: all .15s
        }
        
        .no-tr[data-v-5f0b9ba1] {
            transition: none !important
        }
        
        .no-tr *[data-v-5f0b9ba1] {
            transition: none !important
        }
        
        .overlay[data-v-5f0b9ba1] {
            position: fixed;
            background: rgba(220, 220, 220, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            transition: all 0.2s ease;
            opacity: 0;
            visibility: hidden
        }
        
        .overlay .modal[data-v-5f0b9ba1] {
            transition: all 0.2s ease;
            opacity: 0;
            transform: scale(0.6);
            overflow: hidden
        }
        
        .overlay.show[data-v-5f0b9ba1] {
            opacity: 1;
            visibility: visible
        }
        
        .overlay.show .modal[data-v-5f0b9ba1] {
            opacity: 1;
            transform: scale(1)
        }
        
        .panel[data-v-5f0b9ba1] {
            padding: 6px 10px;
            display: flex;
            width: 100%;
            box-sizing: border-box;
            align-items: center;
            border-radius: 4px;
            position: relative;
            border: 1px solid #eaf7ff;
            background: #f7fcff;
            outline: none;
            transition: all 0.07s ease-in-out
        }
        
        .btn[data-v-5f0b9ba1] {
            cursor: pointer;
            box-sizing: border-box
        }
        
        .light-btn[data-v-5f0b9ba1] {
            padding: 6px 10px;
            display: flex;
            width: 100%;
            box-sizing: border-box;
            align-items: center;
            border-radius: 4px;
            position: relative;
            border: 1px solid #eaf7ff;
            background: #f7fcff;
            outline: none;
            cursor: pointer;
            transition: all 0.07s ease-in-out
        }
        
        .light-btn[data-v-5f0b9ba1]:hover {
            background: #e0f4ff;
            border-color: #8acfff
        }
        
        .shake[data-v-5f0b9ba1] {
            animation: shake-data-v-5f0b9ba1 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
            transform: translate3d(0, 0, 0)
        }
        
        @keyframes shake-data-v-5f0b9ba1 {
            10%,
            90% {
                transform: translate3d(-1px, 0, 0)
            }
            20%,
            80% {
                transform: translate3d(2px, 0, 0)
            }
            30%,
            50%,
            70% {
                transform: translate3d(-4px, 0, 0)
            }
            40%,
            60% {
                transform: translate3d(4px, 0, 0)
            }
        }
        
        .pulse[data-v-5f0b9ba1] {
            animation: pulse-data-v-5f0b9ba1 2s ease infinite
        }
        
        @keyframes pulse-data-v-5f0b9ba1 {
            0% {
                opacity: .7
            }
            50% {
                opacity: .4
            }
            100% {
                opacity: .7
            }
        }
        
        .flash-once[data-v-5f0b9ba1] {
            animation: flash-once 3.5s ease 1
        }
        
        @keyframes fade-up-data-v-5f0b9ba1 {
            0% {
                transform: translate3d(0, 10px, 0);
                opacity: 0
            }
            100% {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }
        
        .fade-in[data-v-5f0b9ba1] {
            animation: fade-in-data-v-5f0b9ba1 .3s ease-in-out
        }
        
        @keyframes fade-in-data-v-5f0b9ba1 {
            0% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }
        
        .spin[data-v-5f0b9ba1] {
            animation-name: spin-data-v-5f0b9ba1;
            animation-duration: 2000ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear
        }
        
        @keyframes spin-data-v-5f0b9ba1 {
            from {
                transform: rotate(0deg)
            }
            to {
                transform: rotate(360deg)
            }
        }
        
        .bounceIn[data-v-5f0b9ba1] {
            animation-name: bounceIn-data-v-5f0b9ba1;
            transform-origin: center bottom;
            animation-duration: 1s;
            animation-fill-mode: both;
            animation-iteration-count: 1
        }
        
        @keyframes bounceIn-data-v-5f0b9ba1 {
            0%,
            20%,
            40%,
            60%,
            80%,
            100% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
            }
            0% {
                opacity: 1;
                -webkit-transform: scale3d(0.8, 0.8, 0.8);
                transform: scale3d(0.8, 0.8, 0.8)
            }
            20% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1)
            }
            40% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9);
                transform: scale3d(0.9, 0.9, 0.9)
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(1.03, 1.03, 1.03);
                transform: scale3d(1.03, 1.03, 1.03)
            }
            80% {
                -webkit-transform: scale3d(0.97, 0.97, 0.97);
                transform: scale3d(0.97, 0.97, 0.97)
            }
            100% {
                opacity: 1;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }
        
        @keyframes dots-data-v-5f0b9ba1 {
            0%,
            20% {
                color: rgba(0, 0, 0, 0);
                text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0), 0.5em 0 0 rgba(0, 0, 0, 0)
            }
            40% {
                color: #8492A6;
                text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0), 0.5em 0 0 rgba(0, 0, 0, 0)
            }
            60% {
                text-shadow: 0.25em 0 0 #8492A6, 0.5em 0 0 rgba(0, 0, 0, 0)
            }
            80%,
            100% {
                text-shadow: .25em 0 0 #8492A6, .5em 0 0 #8492A6
            }
        }
        
        @keyframes recording-data-v-5f0b9ba1 {
            0% {
                box-shadow: 0px 0px 5px 0px rgba(173, 0, 0, 0.3)
            }
            65% {
                box-shadow: 0px 0px 5px 5px rgba(173, 0, 0, 0.3)
            }
            90% {
                box-shadow: 0px 0px 5px 5px rgba(173, 0, 0, 0)
            }
        }
        
        body[data-v-5f0b9ba1] {
            margin: 0;
            font-size: 100%;
            color: #3C4858
        }
        
        a[data-v-5f0b9ba1] {
            text-decoration: none;
            color: #45C8F1
        }
        
        h1[data-v-5f0b9ba1],
        h2[data-v-5f0b9ba1],
        h3[data-v-5f0b9ba1],
        h4[data-v-5f0b9ba1] {
            margin-top: 0
        }
        
        svg[data-v-5f0b9ba1] {
            outline: none
        }
        
        .container_selected_area[data-v-5f0b9ba1] {
            display: none;
            visibility: hidden;
            padding: 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 2147483647
        }
        
        .container_selected_area.active[data-v-5f0b9ba1] {
            visibility: visible;
            display: block
        }
        
        .container_selected_area .label[data-v-5f0b9ba1] {
            font-family: "Didact Gothic Regular", sans-serif;
            font-size: 22px;
            text-align: center;
            padding-top: 15px
        }
        
        .container_selected_area .area[data-v-5f0b9ba1] {
            display: none;
            position: fixed;
            z-index: 2147483647;
            border: 1px solid #1e83ff;
            background: rgba(30, 131, 255, 0.1);
            box-sizing: border-box
        }
        
        .container_selected_area .area.active[data-v-5f0b9ba1] {
            display: block;
            top: 0;
            left: 0
        }
        
        .hide[data-v-5f0b9ba1] {
            display: none
        }
    </style>
</head>

<body>
    <div id="app">
        <div>
            <div class="lg:min-h-screen bg-white lg:pt-0 pt-10 mx-auto px-4 flex flex-wrap justify-center">
                <div class="mt-auto mb-auto w-px flex lg:space-x-2/12 lg:flex-row md:flex-col flex-col w-px sm:w-full relative z-40" style="width: 920px;">
                    <div class="flex-1 mx-0 my-0 w-full md:w-1/2 md:mx-auto relative">
                        <div class="flex flex-row space-x-8 md:space-x-0">
                            <div class="flex flex-1 md:w-max-content md:flex-none my-auto"><button href="https://storelm.com/ar/cancelation" class="flex items-center focus:outline-none"><svg id="Capa_1" version="1.1" viewBox="0 0 31.494 31.494" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px" class="fill-current text-black w-4"><path d="M10.273,5.009c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571l-8.047,8.047h26.554
                                  c0.619,0,1.127,0.492,1.127,1.111c0,0.619-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587
                                  c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,5.009z"></path></svg><img src="https://merchant.thawani.om/logos/1635661883nma1g0xz.jy2.jpeg" alt="" class="ml-2 w-6 h-6 rounded-full"><span class="text-sm truncate relative left-3">Wasl Payment</span></button></div>
                            <div class="flex-1 items-center text-right my-auto md:hidden"><button type="button" class="group inline-flex items-center space-x-2 text-base leading-5 focus:outline-none transition ease-in-out duration-150"><span class="text-sm">More details</span><svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150"><path clip-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" fill-rule="evenodd"></path></svg></button></div>
                        </div>
                        <div class="overflow-hidden sm:rounded-md mt-10 hidden md:block">
                            <ul class="md-10">
                                <li>
                                    <div class="block focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                                        <div class="flex items-center py-2">
                                            <div class="min-w-0 flex-auto flex items-center">
                                                <div class="min-w-0 flex-auto" >
                                                    <div>


                                                        <div> 
                                                            
                                                            @foreach ($products as $product)
                                                            <span class="text-sm leading-5 font-medium text-indigo-600 truncate">{{ $product->product_name}}</span>
                                                         
                                                            
                                                            <span class="truncate text-xs leading-5 text-gray-500"> x {{ $product->quantity}}</span>
                                                            <br>
                                                            @endforeach
                                                            
                                          
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-auto text-right" >
                                                <div class="md:block">
                                                    <div>
                                                        <!---->

                                                        @foreach ($products as $product)
                                                        <div class="text-sm leading-5 text-gray-900">{{ $product->product_name}}</div>

                                                        @endforeach


                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="total-sm" class="border-t border-gray-200">
                                    <div class="block focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                                        <div class="flex items-center py-2">
                                            <div class="min-w-0 flex-1 flex items-center">
                                                <div class="min-w-0 flex-1 md:grid md:grid-cols-2 md:gap-4">
                                                    <div>
                                                        <div><span class="text-sm leading-5 font-bold text-gray-800 truncate">Total</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-1 text-right">
                                                <div class="md:block">
                                                    <div>
                                                        @foreach ($invoice_data as $item )
                                                        <div class="text-sm font-bold leading-5 text-gray-900">{{ $item->total_amout }}</div>
                                                        @endforeach
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="lg:block hidden absolute bottom-0">
                            <div data-v-4d1ff736="" class="powered-by flex items-center justify-center h-24 lg:h-0">
                                <div data-v-4d1ff736=""><span data-v-4d1ff736="" class="text-xs text-gray-500">Powered by</span></div>
                                <div data-v-4d1ff736=""><img data-v-4d1ff736="" src="/img/thawani-long.82dc676a.svg" alt="" class="w-25 h-8 block"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 mx-0 my-0 w-full md:w-1/2 md:mx-auto">
                        <div>
                            <div class="mb-5 mt-10 md:mt-5 lg:mt-0">
                                <h2 class="text-2xl tracking-tight leading-10" dir="rtl">ادفع بواسطة البطاقة</h2>
                            </div>
                            <span dir="rtl">
                               <form action="{{ route('Payment_confirmation')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @foreach ($invoice_data as $item )
                                <input type="hidden" name="merchant_id" value="{{ $item->user_id}}">
                                <input type="hidden" name="invoice_referance" value="{{ $item->invoice_referance}}">
                                <input type="hidden" name="product_name" value="{{ $product->product_name}}">
                                <input type="hidden" name="total_amount" value="{{ $item->total_amout}}">
                                <input type="hidden" name="currency" value="{{ $item->currency}}">
                                <input type="hidden" name="success_url" value="{{$item->success_url}}">
                                  @endforeach
    



                                    <div class="mb-5"><fieldset ><legend class="block text-sm font-medium leading-5 text-gray-700"  >بيانات البطاقة </legend><div class="mt-1 bg-white rounded-md shadow-sm relative"><span><p id="email-error" class="absolute bottom-20 right-0 text-xs text-red-600 text-right normal-case">  </p><div class="relative">
                                        <input id="card_number" type="text" autocomplete="off" value="{{ old('card_number') }}" placeholder="رقم البطاقة" 
                                        class="form-input relative block w-full rounded-none rounded-t-md bg-transparent focus:z-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5" maxlength="16" name="card_number" >

                                        @if($errors->has('card_number'))
                                        <span class="error invalid-feedback " style="font-size: 10px;color:red">{{ $errors->first('card_number') }}</span>
                                    @endif

                                <span  class="absolute inset-y-0 left-0 pr-3 flex items-center pointer-events-none">
                                    <svg  clip-rule="evenodd" fill-rule="evenodd" viewBox="0 0 560 400" xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" ><path d="m286.87 176.71c-.228 17.993 16.036 28.034 28.287 34.004 12.588 6.126 16.816 10.054 16.768 15.531-.096 8.384-10.042 12.083-19.35 12.227-16.24.252-25.681-4.384-33.188-7.891l-5.849 27.373c7.531 3.472 21.476 6.499 35.938 6.631 33.944 0 56.152-16.756 56.273-42.736.132-32.971-45.607-34.797-45.295-49.535.108-4.468 4.372-9.237 13.717-10.45 4.624-.612 17.392-1.081 31.866 5.585l5.681-26.484c-7.783-2.835-17.789-5.55-30.244-5.55-31.95 0-54.423 16.984-54.604 41.295m139.44-39.013c-6.198 0-11.423 3.616-13.753 9.165l-48.49 115.777h33.92l6.75-18.654h41.451l3.916 18.654h29.896l-26.089-124.942zm4.744 33.752 9.789 46.916h-26.809zm-185.31-33.752-26.737 124.942h32.322l26.725-124.942zm-47.817 0-33.644 85.04-13.609-72.308c-1.597-8.071-7.903-12.732-14.906-12.732h-54.999l-.769 3.628c11.291 2.45 24.119 6.402 31.89 10.63 4.756 2.582 6.114 4.84 7.675 10.978l25.776 99.706h34.161l52.369-124.942z" fill="#1a1f71"></path></svg><svg clip-rule="evenodd" fill-rule="evenodd" viewBox="0 0 560 400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-9 w-9"><clipPath id="a"><path clip-rule="evenodd" d="m125.758 80h308.483v240h-308.483z"></path></clipPath><g clip-path="url(#a)"><path d="m428.163 316.746v.616h.575c.108.002.215-.025.309-.078.076-.054.12-.143.115-.236.004-.092-.039-.179-.115-.23-.093-.056-.2-.083-.309-.079h-.575zm.581-.437c.247-.015.491.056.691.201.163.133.253.336.243.546.007.18-.064.355-.195.479-.154.134-.348.215-.552.23l.771.879h-.594l-.709-.873h-.23v.873h-.497v-2.333h1.08zm-.154 3.14c.261.003.519-.05.758-.154.23-.099.439-.241.617-.418.177-.177.319-.386.418-.617.202-.489.202-1.038 0-1.527-.1-.23-.242-.439-.418-.617-.178-.177-.387-.319-.617-.418-.241-.098-.498-.148-.758-.145-.264-.002-.526.047-.771.145-.235.097-.45.239-.631.418-.557.571-.719 1.424-.412 2.16.094.231.234.441.412.617.182.178.396.32.631.418.244.104.506.156.771.154m0-4.473c.678-.001 1.329.265 1.813.74.233.228.418.5.546.801.266.622.266 1.328 0 1.951-.131.298-.316.57-.546.8-.237.227-.512.41-.813.54-.316.134-.656.203-1 .201-.347.002-.691-.066-1.012-.201-.304-.127-.582-.31-.819-.54-.23-.238-.413-.519-.538-.826-.266-.623-.266-1.329 0-1.952.127-.3.313-.572.546-.8.234-.234.512-.417.819-.54.32-.135.665-.203 1.012-.2m-236.183-8.987c0-4.449 2.916-8.105 7.68-8.105 4.553 0 7.626 3.498 7.626 8.105 0 4.608-3.073 8.106-7.626 8.106-4.764 0-7.68-3.656-7.68-8.106m20.496 0v-12.663h-5.505v3.085c-1.746-2.28-4.394-3.709-7.996-3.709-7.095 0-12.663 5.565-12.663 13.294s5.565 13.294 12.663 13.294c3.6 0 6.25-1.432 7.996-3.71v3.074h5.499v-12.665zm186.003 0c0-4.449 2.915-8.105 7.681-8.105 4.558 0 7.626 3.498 7.626 8.105 0 4.608-3.068 8.106-7.626 8.106-4.764 0-7.681-3.656-7.681-8.106m20.502 0v-22.827h-5.51v13.249c-1.746-2.28-4.394-3.709-7.995-3.709-7.096 0-12.664 5.565-12.664 13.294s5.565 13.294 12.664 13.294c3.601 0 6.249-1.432 7.995-3.71v3.074h5.51zm-138.182-8.366c3.547 0 5.826 2.225 6.407 6.141h-13.135c.588-3.656 2.807-6.141 6.729-6.141m.11-4.935c-7.419 0-12.609 5.398-12.609 13.294 0 8.05 5.398 13.294 12.978 13.294 3.812 0 7.305-.952 10.377-3.548l-2.698-4.079c-2.122 1.696-4.824 2.648-7.365 2.648-3.547 0-6.777-1.643-7.571-6.201h18.797c.054-.684.109-1.375.109-2.116-.055-7.892-4.935-13.294-12.021-13.294m66.463 13.294c0-4.45 2.915-8.105 7.679-8.105 4.554 0 7.626 3.498 7.626 8.105s-3.072 8.106-7.626 8.106c-4.764 0-7.681-3.656-7.681-8.106m20.496 0v-12.654h-5.502v3.085c-1.752-2.28-4.394-3.709-7.996-3.709-7.095 0-12.663 5.565-12.663 13.294s5.565 13.294 12.663 13.294c3.602 0 6.244-1.432 7.996-3.71v3.074h5.503v-12.665zm-51.582 0c0 7.68 5.346 13.294 13.506 13.294 3.812 0 6.353-.848 9.1-3.018l-2.644-4.45c-2.067 1.485-4.237 2.28-6.632 2.28-4.395-.054-7.626-3.232-7.626-8.106s3.231-8.05 7.626-8.105c2.389 0 4.559.794 6.632 2.279l2.644-4.449c-2.752-2.171-5.292-3.019-9.1-3.019-8.16 0-13.506 5.613-13.506 13.294m70.967-13.294c-3.176 0-5.244 1.485-6.674 3.71v-3.07h-5.456v25.314h5.511v-14.19c0-4.189 1.8-6.517 5.399-6.517 1.178-.017 2.348.2 3.442.637l1.697-5.188c-1.218-.48-2.807-.691-3.922-.691m-147.554 2.648c-2.648-1.746-6.298-2.648-10.323-2.648-6.414 0-10.543 3.074-10.543 8.104 0 4.127 3.074 6.674 8.735 7.468l2.6.37c3.019.424 4.444 1.219 4.444 2.648 0 1.958-2.005 3.075-5.77 3.075-3.813 0-6.565-1.219-8.42-2.649l-2.587 4.293c3.019 2.224 6.832 3.285 10.961 3.285 7.311 0 11.548-3.443 11.548-8.263 0-4.45-3.335-6.777-8.844-7.571l-2.595-.377c-2.383-.308-4.292-.788-4.292-2.485 0-1.85 1.8-2.964 4.82-2.964 3.231 0 6.359 1.218 7.892 2.17l2.383-4.45zm71.03-2.644c-3.176 0-5.244 1.486-6.668 3.71v-3.079h-5.456v25.314h5.505v-14.19c0-4.189 1.8-6.517 5.399-6.517 1.178-.017 2.348.2 3.442.637l1.697-5.188c-1.218-.48-2.807-.691-3.922-.691m-46.973.635h-9.002v-7.679h-5.565v7.679h-5.134v5.032h5.134v11.548c0 5.873 2.28 9.371 8.792 9.371 2.389 0 5.141-.74 6.887-1.957l-1.59-4.714c-1.643.952-3.443 1.432-4.874 1.432-2.752 0-3.65-1.697-3.65-4.237v-11.439h9.002zm-82.302 25.321v-15.887c0-5.983-3.813-10.009-9.959-10.063-3.232-.054-6.565.952-8.898 4.504-1.746-2.807-4.498-4.504-8.366-4.504-2.704 0-5.346.794-7.415 3.759v-3.13h-5.509v25.314h5.552v-14.036c0-4.394 2.437-6.729 6.201-6.729 3.655 0 5.505 2.383 5.505 6.674v14.088h5.565v-14.036c0-4.394 2.54-6.729 6.194-6.729 3.759 0 5.553 2.383 5.553 6.674v14.088z" fill="#231f20"></path><path d="m431.302 234.43v-3.702h-.964l-1.115 2.54-1.109-2.54h-.967v3.702h.684v-2.789l1.043 2.406h.71l1.042-2.412v2.795h.679zm-6.116 0v-3.068h1.234v-.625h-3.153v.625h1.234v3.068z" fill="#f79410"></path><path d="m321.733 250.306h-83.423v-149.923h83.425z" fill="#ff5f00"></path><path d="m243.599 175.348c0-30.412 14.24-57.503 36.413-74.962-16.781-13.232-37.548-20.418-58.918-20.386-52.654 0-95.336 42.688-95.336 95.348 0 52.659 42.682 95.347 95.336 95.347 21.37.032 42.138-7.154 58.92-20.386-22.172-17.456-36.415-44.548-36.415-74.961" fill="#eb001b"></path><path d="m434.28 175.348c0 52.659-42.682 95.347-95.335 95.347-21.373.031-42.143-7.154-58.928-20.386 22.18-17.459 36.42-44.548 36.42-74.961 0-30.414-14.24-57.503-36.42-74.962 16.784-13.232 37.554-20.417 58.926-20.386 52.654 0 95.336 42.688 95.336 95.348" fill="#f79410"></path></g></svg></span></div>
                        </span>
                        <div class="-mt-px flex">
                            <div class="w-1/2 flex-1 min-w-0 relative"><span>
                                <input  value="{{ old('expiration_yy') }}" type="text" inputmode="numeric" autocomplete="off" name="expiration_yy" maxlength="5" aria-label="Card expiration date" placeholder="MM / YY" class="form-input relative block w-full rounded-none rounded-bl-md bg-transparent focus:z-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                
                                @if($errors->has('expiration_yy'))
                                <span class="error invalid-feedback" style="font-size: 10px;color:red">{{ $errors->first('expiration_yy') }}</span>
                            @endif
                                <p id="date-error" class="absolute left-0 text-xs text-red-600 text-right normal-case">  </p></span></div>
                           
                           
                              
                                <div class="-ml-px flex-1 min-w-0"><span>
                                    <input  value="{{ old('cvv') }}" type="password" name="cvv" maxlength="3" inputmode="numeric" aria-label="Card CVV" autocomplete="new-password" placeholder="CVV" class="form-input relative block w-full rounded-none rounded-br-md bg-transparent focus:z-10 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    
                                @if($errors->has('cvv'))
                                <span class="error invalid-feedback" style="font-size: 10px;color:red">{{ $errors->first('cvv') }}</span>
                            @endif
                                    
                                    <p id="cvv-error" class="absolute right-0 text-xs text-red-600 text-right normal-case">  </p></span></div>
                        </div>
                    </div>
                    </fieldset>
                </div>
                <div class="mt-10"><label for="holder" class="block text-sm font-medium leading-5 text-gray-700">الاسم على البطاقة</label>
                    <div class="mt-1 relative rounded-md shadow-sm relative"><span>
                        <input  value="{{ old('card_holder') }}" id="holder" placeholder="" name="card_holder" class="form-input block w-full sm:text-sm sm:leading-5">
                        @if($errors->has('card_holder'))
                        <span class="error invalid-feedback" style="font-size: 10px;color:red">{{ $errors->first('card_holder') }}</span>
                    @endif
                        
                        <p id="holder-error" class="absolute bottom-10 right-0 text-xs text-red-600 text-right normal-case">  </p></span></div>
                </div>
                <!---->
               
                <p class="text-red-600 text-sm font-medium leading-5 normal-case" style="display: none;">Your payment has failed, please try again.</p>
                <div class="mt-7 md:mb-0"><span class="block w-full rounded-md shadow-sm"><button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md transition duration-150 ease-in-out text-white  bg-green-500 hover:bg-green-400 focus:outline-none focus:bg-green-600 focus:shadow-outline-green active:bg-green-600"><span> 0.250 YER </span>
                    <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" style="display: none;">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" class="opacity-25"></circle>
                <path d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z" fill="currentColor" class="opacity-75"></path>
                </svg><span style="display: none;"> Processing </span><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-3 h-5 w-5 text-white fill-current" style="display: none;"><path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path></svg>
                    <span style="display: none;"> Successful </span>
                    </button>
                    </span>
                </div>
                <div class="text-center mt-6 md:mb-0"><a href="{{ route('viewCancel') }}" class="text-sm focus:outline-none border-none text-red-500" 
                     >الغاء</a></div>
                     {{-- onclick="window.location='{{ URL::previous() }}'" --}}
                </form>
                </span>
                <div class="lg:hidden block">
                    <div data-v-4d1ff736="" class="powered-by flex items-center justify-center h-24">
                        <div data-v-4d1ff736=""><span data-v-4d1ff736="" class="text-xs text-gray-500">Powered by</span></div>
                        <div data-v-4d1ff736=""><img data-v-4d1ff736="" src="/img/thawani-long.82dc676a.svg" alt="" class="w-25 h-8 block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="lg:min-h-screen bg-white w-1/2 absolute right-0 top-0 shadow-xl"></div>
    <div class="absolute top-20 inset-x-0 transition transform origin-top-right md:hidden z-40" style="display: none;">
        <div class="rounded-lg shadow-md">
            <div aria-labelledby="main-menu" aria-orientation="vertical" role="menu" class="rounded-lg bg-white shadow-xs overflow-hidden">
                <div class="overflow-hidden sm:rounded-md px-11">
                    <ul class="md-10">
                        <li>
                            <div class="block focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                                <div class="flex items-center py-2">
                                    <div class="min-w-0 flex-auto flex items-center">
                                        <div class="min-w-0 flex-auto">
                                            <div>
                                                <div>
                                                    <!-- <span class="text-sm leading-5 font-medium text-indigo-600 truncate">ساعات</span> -->

                                                    @foreach ($products as $product)
                                                    <span class="truncate text-xs leading-5 text-gray-500">{{ $product->quantity}}</span> @endforeach




                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-auto text-right">
                                        <div class="md:block">
                                            <div>
                                                <!---->
                                                <div class="text-sm leading-5 text-gray-900">0.250 YER</div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="total-sm" class="border-t border-gray-200">
                            <div class="block focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                                <div class="flex items-center py-2">
                                    <div class="min-w-0 flex-1 flex items-center">
                                        <div class="min-w-0 flex-1 md:grid md:grid-cols-2 md:gap-4">
                                            <div>
                                                <div><span class="text-sm leading-5 font-bold text-gray-800 truncate">Total</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 text-right">
                                        <div class="md:block">
                                            <div>
                                                <div class="text-sm font-bold leading-5 text-gray-900">0.250 YER</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="fixed z-50 inset-0 overflow-y-auto" style="display: none;">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div><span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&ZeroWidthSpace;
            <div aria-labelledby="modal-headline" aria-modal="true" role="dialog" class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left shadow-xl overflow-hidden transform transition-all sm:my-8 sm:align-middle w-full sm:max-w-md sm:w-full sm:p-6">
                <div class="sm:block absolute top-0 right-0 pt-4 pr-4"><button aria-label="Close" type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></button></div>
                <div class="mt-5 sm:mt-6 overflow-x-auto"><iframe frameborder="0" width="390" height="400" name="payment-iframe"></iframe></div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div id="scrnli_recorder_root"></div>

    <div data-v-5f0b9ba1="" class="container_selected_area" style="cursor: url(&quot;chrome-extension://ijejnggjjphlenbhmjhhgcdpehhacaal/assets/images/cursor-imagen.svg&quot;) 9 9, crosshair;">
        <div data-v-5f0b9ba1="" class="area"></div>
    </div>


    <script>
        //Put our input DOM element into a jQuery Object
var $jqDate = jQuery('input[name="expiration_yy"]');

//Bind keyup/keydown to the input
$jqDate.bind('keyup','keydown', function(e){

  //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
    if(e.which !== 8) { 
        var numChars = $jqDate.val().length;
        if(numChars === 2){
            var thisVal = $jqDate.val();
            thisVal += '/';
            $jqDate.val(thisVal);
        }
  }
});
        </script>
</body>

</html>