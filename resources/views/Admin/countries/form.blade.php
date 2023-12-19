<div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationCustom01">Name</label>
        <input class="form-control @error('name') is-invalid @enderror" value="{{$country->name ?? ''}}" id="validationCustom01" name="name" type="text" placeholder="Name" required="">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="valid-feedback">Looks good!</div>
    </div>

</div><div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationCustom01">Country Code</label>
        <input class="form-control @error('name') is-invalid @enderror" value="{{$country->country_code ?? ''}}" id="validationCustom01" name="country_code" type="text" placeholder="Country Code" required="">
        @error('country_code')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="valid-feedback">Looks good!</div>
    </div>

</div>
<button class="btn btn-primary" type="submit">Submit</button>
