<option selected="true" disabled="disabled" value="">إختر المدينة</option>

@foreach($cities as $city)

    <option value="{{$city->id}}" @if(auth()->guard('web')->check() && auth()->guard('web')->user()->city_id == $city->id) selected @endif>{{$city->city}}</option>
@endforeach
