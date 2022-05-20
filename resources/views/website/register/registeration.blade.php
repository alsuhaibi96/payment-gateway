@extends('website.layouts.master')


@section('title')
إنشاء حساب
@endsection

@section('signup')
class="active"
@endsection


@section('content')
<section class=" mt-5"></section>
<!--Sign in form for speciftying if merchant or customer-->
<form action="{{ route('Signin') }}" method="POST"  style="background-color: #fff; " class="p-3">
    @csrf
    <div class="mt-5" style="margin-top: 120px ;margin-bottom: 90px;">
        <div class="up-card my-0 mt-5 my-sm-30 border-2  m-auto" data-v-e9c818fa="">
            <div class="text-center card mt-5 col-5 m-auto pt-5" data-v-e9c818fa="" style="border-radius: 15px; padding:30px 60px; width:80%;background:#eee;">
                <h2 class="display-rebrand fw-bold" data-v-e9c818fa="">انضم كحساب شخصي او حساب تجاري</h2>
                <div class="up-button-box-radio-group pb-10" data-v-e9c818fa="">
                    <fieldset data-v-e9c818fa="">
                        <div class="row card-body p-5 " style="justify-content: space-between;" data-v-e9c818fa="">
                            <div class="col-12 col-md-5 mt-10 col-md-offset-1 card mx-4 p-3 " data-v-e9c818fa="" style="border-radius: 10px;">
                                <div data-cy="button-box" class="up-button-box up-button-box-radio" data-v-e9c818fa="">
                                    <div class="up-radio"><label class="up-checkbox-label">
                                            <input id="client_radio" type="radio" checked value="1" name="radio1" style="width: 30px; height: 30px; line-height: 30px;" aria-labelledby="button-box-1" value="hire"> <span class="up-checkbox-replacement-helper">
                                                <!---->
                                                <!---->
                                            </span> </label></div>
                                    <div class="up-illustration mt-2 " data-v-e9c818fa="">
                                        <svg style="width: 50px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145 130" aria-hidden="true" role="img">
                                            <polygon points="145,18.601 73.396,10.394 72.487,18.338 71.58,10.422 0,18.622 12.049,123.807	72.489,116.884 132.95,123.809" fill="var(--illustration-color-13, #e8f1e8)"></polygon>
                                            <rect x="28.472" width="88.055" height="130" fill="var(--illustration-color-1, #d5e0d5)"></rect>
                                            <rect x="46.352" y="99.789" width="53.601" height="16.229" fill="var(--illustration-color-2, #23264b)"></rect>
                                            <path d="M98.925 40.338c0 14.554-11.802 26.361-26.354 26.361-14.56 0-26.36-11.807-26.36-26.361 0-14.552 11.801-26.355 26.36-26.355 14.552 0 26.354 11.804 26.354 26.355" fill="var(--illustration-color-11, #f7faf7)"></path>
                                            <path d="M81.664 37.781c0 4.764-3.865 8.633-8.626 8.633-4.769 0-8.629-3.869-8.629-8.633 0-4.763 3.86-8.633 8.629-8.633 4.761 0 8.626 3.87 8.626 8.633m-.971 9.439a12.184 12.184 0 01-6.476 2.661c-.396.043-.791.078-1.19.078-.402 0-.798-.035-1.194-.081a12.085 12.085 0 01-6.457-2.666A18.452 18.452 0 0055.05 59.997c4.66 4.154 10.781 6.706 17.519 6.706 7.108 0 13.541-2.832 18.285-7.409A18.44 18.44 0 0080.693 47.22" fill="var(--illustration-color-15, #9aaa97)"></path>
                                            <path d="M109.936 122.305l-6.063-6.059 5.198-3.309c.128-.121.063-.34-.11-.385l-18.143-6.512a.227.227 0 00-.281.271l6.518 18.149c.04.177.262.235.387.106l3.31-5.189 6.056 6.053c.16.162.424.162.584 0l2.545-2.545a.411.411 0 00-.001-.58z" fill="var(--white, #ffffff)"></path>
                                            <path d="M96.029 80.154H48.971a1.568 1.568 0 110-3.136H96.03c.867 0 1.566.701 1.566 1.568s-.7 1.568-1.567 1.568zm-3.102 9.319H52.075a1.568 1.568 0 110-3.135h40.852a1.567 1.567 0 110 3.135z" fill="var(--illustration-color-4, #beccbe)"></path>
                                        </svg>
                                    </div>
                                    <div id="button-box-1" class="up-button-box-labels">
                                        <div class="up-button-box-label  mt-4 ">
                                            <h4 data-v-e9c818fa="" style="font-size: 20px;">
                                                حساب شخصي
                                            </h4>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 mt-10 card mx-2  p-3" data-v-e9c818fa="" style="border-radius: 10px;">
                                <div data-cy="button-box" class="up-button-box up-button-box-radio" data-v-e9c818fa="">
                                    <div class="up-radio"><label class="up-checkbox-label">
                                            <input name="radio1" style="width: 30px; height: 30px; line-height:30px;" value="2" id="freelancer_radio" type="radio" aria-labelledby="button-box-2" value="work"> <span class="up-checkbox-replacement-helper">
                                                <!---->
                                                <!---->
                                            </span> </label></div>
                                    <div class="up-illustration mt-2" data-v-e9c818fa=""><svg style="width: 50px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145 130" aria-hidden="true" role="img">
                                            <path d="M125.657 123.228H57.062a1.55 1.55 0 01-1.553-1.555V8.328c0-.857.694-1.556 1.553-1.556h86.383c.857 0 1.556.698 1.556 1.556v95.436" fill="var(--illustration-color-2, #23264b)"></path>
                                            <path d="M108.203 30.291H72.431a1.612 1.612 0 010-3.222h35.772a1.611 1.611 0 010 3.222zm20.481 22.017H72.603a1.61 1.61 0 110-3.221h56.081a1.61 1.61 0 110 3.221zm-9.783 39.794H72.603a1.612 1.612 0 010-3.223h46.299a1.611 1.611 0 11-.001 3.223zm9.783-26.532H72.603a1.61 1.61 0 110-3.221h56.081a1.61 1.61 0 110 3.221zm0 13.268H72.603a1.611 1.611 0 010-3.221h56.081a1.61 1.61 0 110 3.221z" fill="var(--illustration-color-5, #434894)"></path>
                                            <polygon points="125.657,123.228 125.657,103.764 145,103.764" fill="var(--illustration-color-5, #2d3163)"></polygon>
                                            <path d="M55.515 96.132v-38.19a3.597 3.597 0 013.598-3.596h12.751c4.575 0 8.661-2.723 9.095-7.278.5-5.227-3.597-8.688-8.72-8.688H53.424a8.747 8.747 0 00-5.891 2.271L34.754 51.467l-.217.199a8.71 8.71 0 01-6.059 2.438H2.628v42.027h52.887z" fill="var(--illustration-color-13, #e8f1e8)"></path>
                                            <path d="M.809 98.674H29.34a1.62 1.62 0 001.623-1.616V53.236c0-.896-.728-1.621-1.623-1.621H.809a.809.809 0 00-.809.811v45.439c0 .444.36.809.809.809" fill="var(--illustration-color-1, #d5e0d5)"></path>
                                            <path d="M24.839 60.703a2.5 2.5 0 11-5 0 2.5 2.5 0 115 0" fill="var(--white, #ffffff)"></path>
                                        </svg></div>
                                    <div id="button-box-2" class="up-button-box-labels">
                                        <div class="up-button-box-label mt-4 ">
                                            <h4 data-v-e9c818fa="" style="font-size: 20px;">
                                                حساب مؤسسي
                                            </h4>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="mt-30" data-v-e9c818fa="" style="padding: .5rem 3rem;">
                    <button type="submit" type="button" style="width: 100%; padding:0.5rem!important; border-radius:5px!important;outline: none;border:none;" id="register_btn" class=" col-4 p-1 up-btn  rounded-3 m-auto mt-3 up-btn-primary width-md btn btn-primary" data-v-e9c818fa="">انشاء حساب </button>
                    <p class="mb-0 mt-3 mb-2 fs-3" data-v-e9c818fa="" style="padding: 10px 30px; font-size:2rem!important;">Already have an account? <a href="{{ route('login') }}" style="color: var(--green); font-size:26px;" data-v-e9c818fa="">
                            Log In
                        </a></p>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    document.getElementById('client_radio').onclick = function() {

        document.getElementById('register_btn').disabled = false;
    }
    document.getElementById('freelancer_radio').onclick = function() {
        document.getElementById('register_btn').disabled = false;
    }
</script>

@endsection