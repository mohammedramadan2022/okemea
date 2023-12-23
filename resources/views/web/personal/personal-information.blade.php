@extends('Web::layouts.master')
@section('styles')
    <link href="{{ asset('web-assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>

@endsection
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

                    <div class="row d-sm-flex">
                        <div class="col-md-3 col-lg-3 col-xl-3 col-12 order-2-sm d-flex align-items-end pb-4">
{{--                            <form action="" class="verify">--}}
                                <button type="button"
                                        class="btn btn-info m-1 waves-effect waves-info"
                                        id="sendCode">{{__('Send Code')}}

                                </button>


                                <a
                                    class="btn btn-info m-1 waves-effect waves-info"
                                    href="javascript:void(0);" id="verifyCode" hidden
                                    data-toggle="modal" data-target="#modal">
                                    &nbsp;&nbsp;{{__('Verify Code')}}<i
                                        class="fa fa-edit"></i>
                                </a>
                                <div id="countdown-number" >

                                </div>
{{--                            </form>--}}
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
                                        <form action="{{route('update-personal-information')}}" method="post">
                                            @csrf
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
                                                                @if(auth()->user()->city->country_id == $country->id) selected @endif>{{$country->country_name}}</option>

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
                                                        <option value="{{$country->dial_code}}" @if(auth()->user()->country_code == $country->dial_code) selected @endif>{{$country->dial_code}}</option>

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
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div id="modal" class="modal fade show" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-info">
                        <i class="fa fa-edit"></i>&nbsp;&nbsp;التحقق من الهاتف
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <span class="font-13">
                            كل الحقول التى بجانبها علامة ال
                            &nbsp;&nbsp;<small class="fa fa-asterisk text-danger"></small>&nbsp;&nbsp;
                            يجب عليك إدخالها إجباري
                        </span>
                    </div>

                    <form method="post" action="" id="editForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            {{-- duration --}}
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="edit-duration">الهاتف</label>&nbsp;&nbsp;<small
                                        class="fa fa-asterisk text-danger"></small>
                                    <div class="input-group">
                                        <input type="text" min="0" class="form-control" name="mobile"
                                               id="verify_mobile" placeholder="رقم الجوال">

                                    </div>
                                </div>
                            </div>
                            {{-- offer-money --}}
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="edit-offer-money">كود التفعيل </label>&nbsp;&nbsp;<small
                                        class="fa fa-asterisk text-danger"></small>
                                    <div class="input-group">
                                        <input type="text" min="0" step="any" class="form-control" name="code"
                                               id="verify_code" placeholder="كود التفعيل">

                                    </div>
                                </div>
                            </div>

                            {{-- provider-money --}}

                        </div>

                        <div class="text-right">
                            <a type="submit" class="btn btn-info btn-lg waves-effect" id="verifyCodeSubmit">
                                <span>تحقق</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@stop

@section('scripts')

    <script src="{{ asset('web-assets/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>

        $(document).on('click', '#sendCode', function () {

            var mobile = $('#mobile_code').val();
            var country_code = $('#country_code').val();
            console.log(mobile_code)
            var route = "{{route('ajax-sendVerificationCode')}}"
            var CSRF_TOKEN = "{{csrf_token()}}";
            $.ajax({
                url: route,
                type: "GET",
                dataType: "json",
                data: {_token: CSRF_TOKEN, mobile , country_code},
                success: function (response) {
                    $('#verify_mobile').val(mobile);

                    $('#sendCode').text("{{__('Resend Code')}}")


                    Swal.fire(
                        'Good job!',
                        'Code sent to your Mobile',
                        'success'
                    )
                    counter();
                    //start countdown timer
                    $('#verifyCode').removeAttr('hidden')

                }, error: function (response) {
                    $.each(response.responseJSON.errors, function (key, val) {
                        Swal.fire(
                            'Fail!',
                            key + " :" + val[0],
                            'error'
                        )

                    })
                }
            });


        });
        function getCities() {
            var country_id = $('#country_id').val();
            var country_code = $('#country_id').find(':selected').data('country_code');
            console.log(country_code, 7777)
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


        function counter() {
            $('#sendCode').prop('disabled', true)
            $('#verify_code').prop('disabled', false)
            $("#countdown-number").addClass('counter')
            var countDownDate = new Date();
            countDownDate.setMinutes(countDownDate.getMinutes() + 2);

            var x = setInterval(function () {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("countdown-number").innerHTML = `${seconds} :${minutes}`;
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("countdown-number").innerHTML = "";
                    $("#countdown-number").removeClass('counter')
                    $('#sendCode').prop('disabled', false)
                    $('#verify_code').prop('disabled', true)

                }
            }, 1000);
        }
    </script>
@endsection
