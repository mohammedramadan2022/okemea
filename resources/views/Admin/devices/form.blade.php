



<form method="POST" action="{{ isset($device) ? route('devices.update', $device->id) : route('devices.store') }}">
    @csrf
    @if(isset($device))
        @method('PUT')
    @endif

    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Name</label>
            <input class="form-control @error('name') is-invalid @enderror" value="{{$device->name ?? ''}}" id="validationCustom01" name="name" type="text" placeholder="Name" required="">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="valid-feedback">Looks good!</div>
        </div>

    </div>



    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Warranty</label>
            <input class="form-control @error('warranty') is-invalid @enderror" value="{{$device->warranty ?? 24}}" id="validationCustom01" name="warranty" type="number" min="1" placeholder="warranty" required="">
            @error('warranty')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="valid-feedback">Looks good!</div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-12">
            <h5>Status</h5>
        </div>
        <div class="col">
            <div class="form-group m-t-15 custom-radio-ml">

                <div class="radio radio-success">
                    <input id="radio55" type="radio" name="status" value="active" required {{isset($device) && $device->status =='active' ? 'checked' : ''}}>
                    <label for="radio55">Active<span class="digits"> </span></label>
                </div>

                <div class="radio radio-danger">
                    <input id="radio66" type="radio" name="status" value="inactive"  required {{isset($device) && $device->status =='inactive' ? 'checked' : ''}}>
                    <label for="radio66">Inactive<span class="digits"> </span></label>
                </div>
            </div>
        </div>

    </div>




    <button class="btn btn-primary" type="submit">{{ isset($city) ? 'Update' : 'Create' }}</button>
</form>
