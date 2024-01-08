@extends('Web::layouts.master')
@section('content')
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


                        <div
                            class="verification-code--inputs d-flex align-items-center justify-content-center direction-ltr mb-4">
                            <input type="text" name="verificationCode" maxlength="4" autofocus/>

                        </div>

                        <div
                            class="verification-code--inputs d-flex align-items-center justify-content-center direction-ltr mb-4">
                            <p style="color: black !important;"><span id="timer"></span></p>
                        </div>
                        <div class="form-group text-center resend-link">
                            <a href="#"
                               id="resendButton"
                               class="resend_otp  resend-link-1 text-primary letter-spacing-normal fw-bold font-regular">
                                اعاده ارسال الكود</a>
                        </div>
                        <div class="form-group">
                            <button type="submit"
                                    class="btn bg-primary text-acent letter-spacing-normal mt-3 form-control">
                                تحقق
                            </button>
                        </div>


                        <input type="hidden" name="user_id" id="user_id" value="{{$user->id}}">

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            var resendButton = document.getElementById('resendButton');
            $('#resendButton').prop('disabled', true);
            resendButton.style.cursor = "not-allowed"; // Set cursor style to not-allowed during countdown


        })
        var countdownTimer;

        function startCountdownTimer(duration, display) {
            var resendButton = document.getElementById('resendButton');
            $('#resendButton').prop('disabled', true);

            // resendButton.style.cursor = "not-allowed"; // Set cursor style to not-allowed during countdown

            var timer = duration, minutes, seconds;
            countdownTimer = setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (timer <= 0) {
                    clearInterval(countdownTimer);
                    $('#resendButton').prop('disabled', false);

                    resendButton.style.cursor = "pointer"; // Set cursor style back to pointer when countdown is over
                } else {
                    timer--;
                }
            }, 1000);
        }


        $(document).on('click','#resendButton' , function (e){
            e.preventDefault();
            resendCode();

        })

        function resendCode() {

            var userId = $('#user_id').val();

            var route = "{{route('ajax-sendVerificationCode')}}";
            var CSRF_TOKEN = "{{csrf_token()}}";
            console.log(route)
            $.ajax({
                url: route,
                type: "get",
                dataType: "json",
                data: {_token: CSRF_TOKEN, 'user_id': userId},
                success: function (response) {
                    console.log(response)
                    $('#resendButton').prop('disabled', true);

                    clearInterval(countdownTimer);
                    startCountdownTimer(60, document.getElementById("timer"));
                }
            });


        }
    </script>

    <script>
        startCountdownTimer(60, document.getElementById("timer"));
    </script>
@endsection




{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Email Verification</title>--}}
{{--    <script>--}}
{{--        var countdownTimer;--}}

{{--        function startCountdownTimer(duration, display) {--}}
{{--            var timer = duration, minutes, seconds;--}}
{{--            countdownTimer = setInterval(function () {--}}
{{--                minutes = parseInt(timer / 60, 10);--}}
{{--                seconds = parseInt(timer % 60, 10);--}}

{{--                minutes = minutes < 10 ? "0" + minutes : minutes;--}}
{{--                seconds = seconds < 10 ? "0" + seconds : seconds;--}}

{{--                display.textContent = minutes + ":" + seconds;--}}

{{--                if (--timer < 0) {--}}
{{--                    clearInterval(countdownTimer);--}}
{{--                    document.getElementById("verificationCodeForm").submit();--}}
{{--                }--}}
{{--            }, 1000);--}}
{{--        }--}}

{{--        function resendCode() {--}}
{{--            clearInterval(countdownTimer);--}}
{{--            startCountdownTimer(120, document.getElementById("timer"));--}}
{{--        }--}}
{{--    </script>--}}
{{--    --}}
{{--    --}}
{{--    --}}
{{--</head>--}}
{{--<body>--}}
{{--<form id="verificationCodeForm" method="post">--}}
{{--    <input type="hidden" name="code" value="123456">--}}
{{--</form>--}}
{{--<h1>Please enter the verification code sent to your email</h1>--}}
{{--<p><strong>Note:</strong> This verification code will expire in <span id="timer"></span>.</p>--}}
{{--<p><input type="text" name="verificationCode" placeholder="Enter Verification Code"></p>--}}
{{--<p><button type="submit">Verify</button></p>--}}
{{--<p><button type="button" onclick="resendCode()">Resend Code</button></p>--}}

{{--<script>--}}
{{--    startCountdownTimer(120, document.getElementById("timer"));--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}



