@extends('layouts.authentication.master')
@section('title', 'Unlock')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <!-- Unlock page start-->
    <div class="authentication-main mt-0">
      <div class="row">
        <div class="col-md-12 p-0">
          <div class="auth-innerright auth-minibox">
            <div class="authentication-box auth-minibox1">
              <div class="text-center"><img src="{{asset('assets/images/other-images/cuba-logo1.png')}}" alt=""></div>
              <div class="card mt-4 p-4 mb-0">
                <form class="theme-form">
                  <div class="form-group">
                    <label class="col-form-label">Enter your Password</label>
                    <input class="form-control" type="password" placeholder="*******">
                  </div>
                  <div class="form-group row mb-2">
                    <div class="col-md-3">
                      <button class="btn btn-primary" type="submit">Unlock</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Unlock page end-->
  </div>
</div>
@endsection

@section('script')
@endsection