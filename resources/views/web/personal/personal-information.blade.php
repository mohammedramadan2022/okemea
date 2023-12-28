@extends('Web::layouts.master')
@section('content')

    <section>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-3 col-lg-3 col-xl-3 col-12">
                    <div class="mb-4">
                        <h3 class="font-sm text-secondary letter-spacing-normal">مرحبا بكـ <span>محمد رمضان</span> | <a
                                href="#" class="text-secondary font-sm">تسجيل الخروج</a></h3>
                    </div>
                    <div class="nav flex-column nav-pills me-3 tab-links border-radius-5" id="v-pills-tab"
                         role="tablist" aria-orientation="vertical">
                        <a href="{{route('guarantees')}}"
                           class="nav-link px-0 text-secondary bg-acent fw-regular letter-spacing-normal text-start "
                           id="v-pills-home-tab">عرض الضمانات السابقة</a>
                        <a href="{{route('personal-information')}}"
                           class="nav-link px-0 text-secondary bg-acent fw-regular letter-spacing-normal text-start active"
                           id="profile-tab">المعلومات الشخصية</a>
                        <a href="{{route('add-guarantee')}}"
                           class="nav-link px-0 text-secondary bg-acent fw-regular letter-spacing-normal text-start "
                           id="add-new-device-tab">إضافة جهاز جديد</a>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 col-xl-9 col-12">
                    <form action="{{route('update-personal-information')}}" method="post">
                        @csrf
                    <div class="row d-sm-flex">
                        <div class="col-md-3 col-lg-3 col-xl-3 col-12 order-2-sm d-flex align-items-end pb-4">


                            <div class="clearfix"></div>
                            <div class="form-group text-center resend-link ">
                                <p style="color: black !important;"> <span id="timer"></span></p>

                                <a href=""onclick="resendCode()"
                                   class="resend_otp  btn bg-primary text-acent letter-spacing-normal fw-bold form-control verify   resend-link-1 text-primary letter-spacing-normal fw-bold font-regular">
                                تحقق</a>
                                <input type="text" class="form-control mt-3 text-center">

                            </div>



                        </div>
                        <div class="col-md-9 col-lg-9 col-xl-9 col-12">
                            <div class="mx-auto">
                                <div class="card profile-card border-0 text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="profile-picture">
                                            <img src="{{asset('web-assets/Images/user.webp')}}" height="60px" class="of-contain" alt="">
                                        </div>
                                        <h3 class="font-regular mt-3 fw-bold">تعديل البيانات</h3>
                                    </div>
                                    <div class="form-div">

                                            <div class="form-group text-start">
                                                <label class="fw-bold fs-sm mb-1" for="name">الإسم</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                       value="{{auth()->user()->name}}">


                                                @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group text-start">
                                                <label class="fw-bold fs-sm mb-1" for="email">البريد الإلكتروني</label>
                                                <input type="email" name="email" id="email" class="form-control"
                                                       value="{{auth()->user()->email}}">
                                                @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group text-start">
                                                <label class="fw-bold fs-sm mb-1" for="country">الدولة</label>
                                                <select name="country_id" class="form-control form-select"
                                                        id="country_id">
                                                    <option selected="true" disabled="disabled" value="">إختر الدولة
                                                    </option>
                                                    @foreach($countries as $country)
                                                        <option value="{{$country->id}}" data-country_code="{{$country->dial_code}}"
                                                                @if(auth()->user()->city->country_id == $country->id) selected @endif>{{$country->name_ar}}</option>

                                                    @endforeach


                                                </select>

                                                @error('country_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group text-start">
                                                <label class="fw-bold fs-sm mb-1" for="city">المدينة</label>
                                                <select name="city_id" class="form-control form-select" id="city_id">
                                                    <option selected="true" disabled="disabled" value="">إختر المدينة
                                                    </option>

                                                </select>

                                                @error('city_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group text-start position-relative">
                                                <label class="fw-bold fs-sm mb-1" for="mobile_code">رقم الجوال</label>
                                                <input type="tel" id="mobile_code" class="form-control" value="{{auth()->user()->mobile}}" name="mobile">
                                                <select name="country_code" id="country_code">
                                                    <option value="" selected="selected" disabled="disabled">+000</option>
                                                    @foreach($countries as $country)
                                                        <option value="{{$country->dial_code}}">{{$country->dial_code}}</option>

                                                    @endforeach


                                                </select>

                                                @error('mobile')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <button type="submit"
                                                        class="btn bg-primary text-acent form-control letter-spacing-normal">
                                                    تعديل البيانات
                                                </button>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@stop

@section('scripts')
    <script>
        var countdownTimer;

        function startCountdownTimer(duration, display) {

            var timer = duration, minutes, seconds;
            countdownTimer = setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(countdownTimer);
                    document.getElementById("verificationCodeForm").submit();
                }
            }, 1000);
        }

        function resendCode() {

            var userId = $('#user_id').val();




            var route = "{{route('ajax-sendVerificationCode')}}";
            var CSRF_TOKEN = "{{csrf_token()}}";
            console.log(route)
            $.ajax({
                url: route,
                type: "get",
                dataType: "json",
                data: {_token: CSRF_TOKEN , 'user_id': userId},
                success: function (response) {
                    console.log(response)

                }
            });






            clearInterval(countdownTimer);
            startCountdownTimer(120, document.getElementById("timer"));
        }
    </script>

    <script>


        $(document).ready(function () {
            getCities();
            $(document).on('change', '#country_id', function () {
                getCities();
            })

        })


        function getCities() {
            var country_id = $('#country_id').find(':selected').val();
            var country_code = $('#country_id').find(':selected').data('country_code');
            $('#country_code').val(country_code).change();
            var route = "{{route('ajax-getCountryCities' , ':id')}}";
            route = route.replace(':id', country_id);
            var CSRF_TOKEN = "{{csrf_token()}}";
            console.log(route)
            $.ajax({
                url: route,
                type: "get",
                dataType: "json",
                data: {_token: CSRF_TOKEN},
                success: function (response) {
                    console.log(response)
                    $('#city_id').empty().append(response.view);
                }
            });
        }
    </script>
@endsection
