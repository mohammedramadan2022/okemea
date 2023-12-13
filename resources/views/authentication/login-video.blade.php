@extends('layouts.authentication.master')
@section('title', 'Login BG Video')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="page-wrapper">
  <div class="container-fluid p-0">
    <!-- login page with video background start-->
    <div class="auth-bg-video">
      <video id="bgvid" poster="{{asset('assets/images/other-images/coming-soon-bg.jpg')}}" playsinline="" autoplay="" muted="" loop="">
        <source src="{{asset('assets/video/auth-bg.mp4')}}" type="video/mp4">
      </video>
      <div class="authentication-box">
        <div class="mt-4">
          <div class="card-body">
            <div class="cont text-center">
              <div> 
                <form class="theme-form">
                  <h4>LOGIN</h4>
                  <h6>Enter your Username and Password</h6>
                  <div class="form-group">
                    <label class="col-form-label pt-0">Your Name</label>
                    <input class="form-control" type="text" required="">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <input class="form-control" type="password" required="">
                  </div>
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label for="checkbox1">Remember me</label>
                  </div>
                  <div class="form-group row mt-3 mb-0">
                    <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
                  </div>
                  <div class="login-divider"></div>
                  <div class="social mt-3">
                    <div class="row btn-showcase">
                      <div class="col-md-4 col-sm-6">
                        <button class="btn social-btn btn-fb">Facebook</button>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <button class="btn social-btn btn-twitter">Twitter</button>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <button class="btn social-btn btn-google">Google + </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="sub-cont">
                <div class="img">
                  <div class="img__text m--up">
                    <h2>New User?</h2>
                    <p>Sign up and discover great amount of new opportunities!</p>
                  </div>
                  <div class="img__text m--in">
                    <h2>One of us?</h2>
                    <p>If you already has an account, just sign in. We've missed you!</p>
                  </div>
                  <div class="img__btn"><span class="m--up">Sign up</span><span class="m--in">Sign in</span></div>
                </div>
                <div>
                  <form class="theme-form">
                    <h4 class="text-center">NEW USER</h4>
                    <h6 class="text-center">Enter your Username and Password For Signup</h6>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="First Name">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Last Name">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="User Name">
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="password" placeholder="Password">
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <button class="btn btn-primary" type="submit">Sign Up</button>
                      </div>
                      <div class="col-sm-8">
                        <div class="text-left mt-2 m-l-20">Are you already user?  <a class="btn-link text-capitalize" href="{{route('login')}}">Login</a></div>
                      </div>
                    </div>
                    <div class="form-divider"></div>
                    <div class="social mt-3">
                      <div class="row btn-showcase">
                        <div class="col-sm-4">
                          <button class="btn social-btn btn-fb">Facebook</button>
                        </div>
                        <div class="col-sm-4">
                          <button class="btn social-btn btn-twitter">Twitter</button>
                        </div>
                        <div class="col-sm-4">
                          <button class="btn social-btn btn-google">Google +</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- login page with video background end-->
  </div>
</div>
@endsection

@section('script')
@endsection