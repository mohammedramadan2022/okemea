@php use Carbon\Carbon;use function PHPUnit\Framework\assertLessThan; @endphp
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
                           class="nav-link px-0 text-secondary bg-acent fw-regular letter-spacing-normal text-start active"
                           id="v-pills-home-tab">عرض الضمانات السابقة</a>
                        <a href="{{route('personal-information')}}"
                           class="nav-link px-0 text-secondary bg-acent fw-regular letter-spacing-normal text-start"
                           id="profile-tab">المعلومات الشخصية</a>
                        <a href="{{route('add-guarantee')}}"
                           class="nav-link px-0 text-secondary bg-acent fw-regular letter-spacing-normal text-start "
                           id="add-new-device-tab">إضافة جهاز جديد</a>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 col-xl-9 col-12">
                    <div class="tab-content w-100" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                             aria-labelledby="v-pills-home-tab" tabindex="0">
                            <div class="table-responsive mt-5">
                                <table class="table">
                                    <thead>
                                    <tr class="text-center border-bottom-0">
                                        <th class="font-xs bordered" scope="col">صورة المنتج</th>
                                        <th class="font-xs bordered" scope="col">صورة الفاتورة</th>
                                        <th class="font-xs bordered" scope="col">صورة الكرتون</th>
                                        <th class="font-xs bordered" scope="col">تاريخ الشراء</th>
                                        <th class="font-xs bordered" scope="col">تاريخ إنتهاء الضمان</th>
                                        <th class="font-xs bg-white border-0" scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($userDevices as $userDevice)

                                        <td class="py-3 bordered"><img
                                                src="{{url($userDevice->pivot->file_path.'/'.$userDevice->pivot->image)}}"
                                                height="70px" class="of-contain" alt=""></td>
                                        <td class="py-3 bordered"><img
                                                src="{{url($userDevice->pivot->file_path.'/'.$userDevice->pivot->invoice_image)}}"
                                                height="70px" class="of-contain" alt=""></td>
                                        <td class="py-3 bordered"><img
                                                src="{{url($userDevice->pivot->file_path.'/'.$userDevice->pivot->carton_image)}}"
                                                height="70px" class="of-contain" alt=""></td>
                                        <td class="font-xs py-3 bordered">{{$userDevice->pivot->purchase_date}}</td>
                                        <td class="py-3 bordered">
                                            <h5 class="font-xs fw-normal mb-0">{{Carbon::parse($userDevice->pivot->purchase_date)->addMonth($userDevice->warranty)->format('Y-m-d')}}</h5>
                                            <span class="remaining-date font-xs">{{Carbon::parse($userDevice->pivot->purchase_date)->addMonth($userDevice->warranty)->diffInMonths(now()->format('Y-m-d'))}} شهر و {{Carbon::parse($userDevice->pivot->purchase_date)->addMonth($userDevice->warranty)->diffInDays(now()->format('Y-m-d')) %30}} أيام</span>
                                        </td>
                                        <td class="border-0"><img src="assets/Images/credit.png" height="70px"
                                                                  class="of-contain" alt=""></td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
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

                        $('#city1').empty().append(response.view);
                    }
                });


            })


        })

    </script>
@endsection