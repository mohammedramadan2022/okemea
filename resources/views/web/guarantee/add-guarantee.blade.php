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
                           class="nav-link px-0 text-secondary bg-acent fw-regular letter-spacing-normal text-start"
                           id="profile-tab">المعلومات الشخصية</a>
                        <a href="{{route('add-guarantee')}}"
                           class="nav-link px-0 text-secondary bg-acent fw-regular letter-spacing-normal text-start  active"
                           id="add-new-device-tab">إضافة جهاز جديد</a>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 col-xl-9 col-12">
                    <div class="add-new-device">
                        <div class="mx-auto">
                            <div class="card profile-card border-0 text-center">
                                <h3 class="font-regular mt-3 fw-bold">الرجاء تعبئة النموذج</h3>
                                <div class="form-div">
                                    <form action="{{route('store-guarantee')}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group text-start countrey-select">
                                            <label class="fw-bold fs-sm mb-1" for="product_id">رقم الصنف</label>
                                            <select name="device_id" class="form-control form-select" id="device_id">
                                                <option selected="true" disabled="disabled" value="">إختر الجهاز
                                                </option>
                                                @foreach($devices as $device)
                                                    <option value="{{$device->id}}">{{$device->name}}</option>

                                                @endforeach
                                            </select>
                                            @error('device_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group text-start">
                                            <label class="fw-bold fs-sm mb-1" for="purchase_date">تاريخ الشراء</label>
                                            <input type="date" name="purchase_date" id="purchase_date"
                                                   class="form-control">

                                            @error('purchase_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group text-start">
                                            <label class="fw-bold fs-sm mb-1" for="invoice_image">صورة الفاتورة</label>
                                            <input type="file" id="invoice_image" name="invoice_image"
                                                   class="form-control">

                                            @error('invoice_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group text-start">
                                            <label class="fw-bold fs-sm mb-1" for="image">صورة الجهاز</label>
                                            <input type="file" id="image" name="image" class="form-control">

                                        </div>


                                        <div class="form-group text-start">
                                            <label class="fw-bold fs-sm mb-1" for="carton_image">صورة الكرتون</label>
                                            <input type="file" id="carton_image" name="carton_image"
                                                   class="form-control">
                                            @error('carton_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group text-start countrey-select">
                                            <label class="fw-bold fs-sm mb-1" for="country">الدولة</label>
                                            <select name="country" class="form-control form-select" id="country_id"
                                                    name="country_id">
                                                <option selected="true" disabled="disabled" value="">إختر الدولة
                                                </option>
                                                @foreach($countries as $country)
                                                    <option value="{{$country->id}}"
                                                            data-country_code= {{$country->dial_code}}>{{$country->country_name}}</option>
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
                                        <div class="form-group text-start">
                                            <label class="fw-bold fs-sm mb-1" for="notes">ملاحظات</label>
                                            <textarea name="notes" id="notes" cols="10" rows="5"
                                                      class="form-control"></textarea>
                                            @error('notes')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror


                                        </div>
                                        <div class="form-group">
                                            <button type="submit"
                                                    class="btn bg-primary text-acent form-control letter-spacing-normal">
                                                حفظ
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
    </section>

@stop

@section('scripts')
    <script>

        $(document).ready(function () {
            $(document).on('change', '#country_id', function () {
                var country_id = $(this).find(':selected').val();

                var country_code = $(this).find(':selected').data('country_code');


                $('#country_code').val(country_code).change();

                console.log(country_code, country_id)
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

                        $('#city1').empty().append(response.view);
                    }
                });


            })


        })

    </script>
@endsection
