@extends('Web::layouts.master')

@section('content')
    <section class="login">
        <div class="container">
            <div class="card border-0 w-500 mx-auto">
                <div class="d-flex flex-column align-items-center mb-4">
                    <div class="profile-picture">
                        <img src="{{asset('web-assets/Images/user.webp')}}" height="60px" class="of-contain" alt="">
                    </div>
                    <h3 class="font-lg mt-3 fw-bold">تسجيل حساب جديد</h3>
                </div>

                <form action="{{route('auth.postRegister')}}" method="post">
                    @csrf
                    <div class="form-group text-start">
                        <label class="fw-bold fs-sm mb-1" for="name">إسمك الكريم</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group text-start">
                        <label class="fw-bold fs-sm mb-1" for="email">البريد الإلكتروني</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group text-start countrey-select">
                        <label class="fw-bold fs-sm mb-1" for="country">الدولة</label>
                        <select class="form-control form-select" id="country_id"
                                name="country_id">
                            <option selected="true" disabled="disabled" value="">إختر الدولة
                            </option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}"
                                        @if($country->id == 178 || $country->id == old('country_id')) selected
                                        @endif data-country_code= {{$country->dial_code}}>{{$country->name_ar}}</option>
                            @endforeach
                        </select>
                        @error('country_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group text-start countrey-select">
                        <label class="fw-bold fs-sm mb-1" for="city">المدينة</label>
                        <select name="city_id" class="form-control form-select city" id="city1">
                            <option selected="true" disabled="disabled" value="">إختر المدينة
                            </option>

                        </select>


                        @error('city_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group text-start position-relative">
                        <label class="fw-bold fs-sm mb-1" for="mobile_code">رقم الجوال</label>
                        <input type="tel" id="mobile_code" class="form-control" value="{{old('mobile')}}" name="mobile">
                        <select name="country_code" id="country_code">
                            <option value="" selected="selected" disabled="disabled">+000</option>
                            @foreach($countries as $country)
                                <option value="{{$country->dial_code}}" @if(old('country_code') == $country->dial_code)selected @endif>{{$country->dial_code}}</option>

                            @endforeach
                        </select>

                        <div class="clearfix"></div>
                        @error('mobile')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @error('country_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror


                    </div>
                    <div class="form-group">
                        <button class="btn bg-primary text-acent form-control letter-spacing-normal">التسجيل</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
@section('scripts')

    <script>

        $(document).ready(function () {

            getCities();
            $(document).on('change', '#country_id', function () {

                getCities();

            })


        })


        function getCities() {
            var country_id = $('#country_id').find(':selected').val();
            var city_id = {{old('city_id') ?? 0 }};

            var country_code = $('#country_id').find(':selected').data('country_code');


            $('#country_code').val(country_code).change();

            console.log(country_code, country_id)
            var route = "{{route('ajax-getCountryCities' , ':id')}}";
            route = route.replace(':id', country_id );
            var CSRF_TOKEN = "{{csrf_token()}}";
            console.log(route)
            $.ajax({
                url: route,
                type: "get",
                dataType: "json",
                data: {_token: CSRF_TOKEN ,'city_id': city_id},
                success: function (response) {
                    console.log(response)

                    $('#city1').empty().append(response.view);
                }
            });

        }

    </script>
@endsection




