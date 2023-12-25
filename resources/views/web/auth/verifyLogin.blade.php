@include('Web::layouts.master')

<section class="login">
    <div class="container">
        <div class="card border-0 w-500 mx-auto">
            <div class="d-flex flex-column align-items-center mb-4">

                <h3 class="font-lg fw-bold">تسجيل الدخول</h3>
                <h3 class="font-lg mt-2 fw-bold">تم إرسال رمز التحقق الرجاء كتابة الرقم في الأسفل</h3>
                <h6 class="mt-4 font-normal fw-normal direction-ltr">{{$user->country_code}}-{{$user->mobile}}</h6>
            </div>
            <div class="verification-code">
                <form action="{{route('auth.post.verifyLogin')}}" method="post">
                    @csrf


                    <div class="verification-code--inputs d-flex align-items-center justify-content-center direction-ltr mb-4">
                        <input type="text" name="verificationCode" maxlength="4" autofocus/>

                    </div>
{{--                    <input type="hidden" id="verificationCode" name="verificationCode"/>--}}
                    <div class="form-group text-center resend-link resend-link-1-div">
                        <a href="#"
                           class="resend_otp resend-link-1 text-primary letter-spacing-normal fw-bold font-regular">إعادة
                            إرسال الرمز</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn bg-primary text-acent letter-spacing-normal mt-3 form-control">
                            تحقق
                        </button>
                    </div>

                    <div class="form-group">
                        <div class="btnGroup">
                            <span class="timer">
                              <h4 class="font-regular fw-bold letter-spacing-normal text-center" id="counter"></h4>
                            </span>
                            <div class="form-group text-center resend-link">

                                <p id="countdown"></p>

                                <a href="#"
                                   class="resend_otp resend-link-2 btn bg-primary text-acent form-control letter-spacing-normal fw-regular font-normal">إعادة
                                    إرسال الرمز</a>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="user_id" value="{{$user->id}}">

                </form>
            </div>
        </div>
    </div>
</section>

@section('scripts')

    <script>
        // Set the countdown time in seconds
        $(document).ready(function () {
         
        });
    </script>
@endsection



