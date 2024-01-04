@include('Web::layouts.master')

<section class="login">
            <div class="container">
                <div class="card border-0 w-500 mx-auto">
                    <div class="d-flex flex-column align-items-center mb-4">
                        <div class="profile-picture">
                            <img src="{{asset('web-assets/Images/user.webp')}}" height="60px" class="of-contain" alt="">
                        </div>
                        <h3 class="font-lg mt-3 fw-bold">تسجيل الدخول</h3>
                    </div>
                    <form  action="{{route('auth.postLogin')}}" method="post" >
@csrf
                        <div class="form-group text-start position-relative">
                            <label class="fw-bold fs-sm mb-3" for="mobile_code">رقم الجوال</label>
                            <input type="tel" id="mobile_code" class="form-control" value="" name="mobile">
                            <select name="country_code" id="country_code">
{{--                                <option value="" selected="selected" disabled="disabled">+000</option>--}}
                                @foreach($countries as $country)
                                    <option value="{{$country->dial_code}}" @if(old('country_code') == $country->dial_code || $country->id == 178)selected @endif>{{$country->dial_code}}</option>

                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn bg-primary text-acent form-control">دخول</button>
                        </div>
                    </form>
                    <div class="mt-5">
                        <h3 class="text-center-sm text-secondary letter-spacing-normal font-normal fw-bold">لا تمتلك حساب مسبقا ؟ <a class="text-primary font-normal fw-bold" href="{{route('auth.register')}}">تسجيل ضمان جديد</a></h3>
                    </div>
                </div>
            </div>



</section>


