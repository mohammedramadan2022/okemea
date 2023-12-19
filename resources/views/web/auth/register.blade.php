@extends('Web::layouts.master')

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
                    <input type="text" name="name" id="name" class="form-control" value="">
                </div>
                <div class="form-group text-start">
                    <label class="fw-bold fs-sm mb-1" for="email">البريد الإلكتروني</label>
                    <input type="email" name="email" id="email" class="form-control" value="">
                </div>
                <div class="form-group text-start">
                    <label class="fw-bold fs-sm mb-1" for="country">الدولة</label>
                    <select name="country_id" class="form-control form-select" id="country_id">
                        <option selected="true" disabled="disabled" value="">إختر الدولة</option>
                        @foreach($countries as $country)
                            <option value="{{$country->id}}"
                                    data-country_code="{{$country->country_code}}">{{$country->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group text-start">
                    <label class="fw-bold fs-sm mb-1" for="city">المدينة</label>
                    <select name="city_id" class="form-control form-select" id="city">
                        <option selected="true" disabled="disabled" value="">إختر المدينة</option>

                    </select>
                </div>
                <div class="form-group text-start position-relative">
                    <label class="fw-bold fs-sm mb-1" for="mobile_code">رقم الجوال</label>
                    <input type="tel" id="mobile_code" class="form-control" value="" name="mobile">
                    <select name="country_code" id="country_code">
                        <option value="" selected="selected" disabled="disabled">+000</option>
                        @foreach($countries as $country)
                            <option value="{{$country->country_code}}">{{$country->country_code}}</option>

                        @endforeach


                    </select>
                </div>
                <div class="form-group">
                    <button class="btn bg-primary text-acent form-control letter-spacing-normal">التسجيل</button>
                </div>
            </form>
        </div>
    </div>
</section>


@section('scripts')

    <script>


        $(document).ready(function () {
            $(document).on('change', '#country_id', function () {
                var country_id = $(this).val();

                var country_code = $(this).find(':selected').data('country_code');


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

                        $('#city').empty().append(response.view);
                    }
                });


            })


        })

    </script>
@endsection




