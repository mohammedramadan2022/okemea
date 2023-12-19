



<form method="POST" action="{{ isset($city) ? route('cities.update', $city->id) : route('cities.store') }}">
    @csrf
    @if(isset($city))
        @method('PUT')
    @endif

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlSelect9">Country</label>
                <select class="form-control digits @error('country_id') is-invalid @enderror" name="country_id" id="exampleFormControlSelect9">
                    <option value="">select country</option>
                    @foreach($countries as $country)
                        <option {{ isset($city) && $city->country_id == $country->id ? 'selected' : '' }} value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach


                </select>

                @error('country_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="valid-feedback">Looks good!</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Name</label>
            <input class="form-control @error('name') is-invalid @enderror" value="{{$city->name ?? ''}}" id="validationCustom01" name="name" type="text" placeholder="Name" required="">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="valid-feedback">Looks good!</div>
        </div>

    </div>

    <button class="btn btn-primary" type="submit">{{ isset($city) ? 'Update' : 'Create' }}</button>
</form>
