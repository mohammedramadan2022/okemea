@extends('layouts.authentication.master')
@section('title', 'Reset-Password')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <!-- Reset Password page start-->
    <div class="authentication-main mt-0">
      <div class="row">
        <div class="col-md-12 p-0">
          <div class="auth-innerright auth-minibox">
            <div class="authentication-box auth-minibox1">
              <div class="text-center"><img src="{{asset('assets/images/other-images/cuba-logo1.png')}}" alt=""></div>
              <div class="card mt-4 p-4">
                <form class="theme-form">
                  <h5 class="f-16 mb-3 f-w-600">CREATE YOUR PASSWORD</h5>
                  <div class="form-group">
                    <label class="col-form-label">New Password</label>
                    <input class="form-control" type="password" placeholder="*****">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Retype Password</label>
                    <input class="form-control" type="password" placeholder="*****">
                  </div>
                  <div class="form-group row mb-0">
                    <div class="col-md-2">
                      <button class="btn btn-primary" type="submit">Done</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Reset Password page end-->
  </div>
</div>
@endsection

@section('script')
@endsection