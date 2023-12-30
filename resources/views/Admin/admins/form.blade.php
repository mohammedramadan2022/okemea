<div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationCustom01">Name</label>
        <input class="form-control @error('name') is-invalid @enderror" value="{{$admin->name ?? ''}}"
               id="validationCustom01" name="name" type="text" placeholder="Name" required="">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="valid-feedback">Looks good!</div>
    </div>

</div>
<div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationCustom01">User Name</label>
        <input class="form-control @error('username') is-invalid @enderror" value="{{$admin->username ?? ''}}"
               id="validationCustom01" name="username" type="text" placeholder="username" required="">
        @error('username')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="valid-feedback">Looks good!</div>
    </div>

</div>
<div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationCustom01">Password </label>
        <input class="form-control @error('password') is-invalid @enderror" value=""
               id="validationCustom01" name="password" type="password" placeholder="Password">
        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="valid-feedback">Looks good!</div>
    </div>

</div>
<div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationCustom01">Password Confirm </label>
        <input class="form-control @error('password_confirmation') is-invalid @enderror" value=""
               id="validationCustom01" name="password_confirmation" type="password" placeholder="Password Again" >
        @error('password_confirmation')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="valid-feedback">Looks good!</div>
    </div>

</div>
<button class="btn btn-primary" type="submit">Submit</button>
