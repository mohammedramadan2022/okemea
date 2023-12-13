@extends('layouts.authentication.master')
@section('title', 'Login')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="page-wrapper">
	<div class="container-fluid p-0">
		<!-- login page start-->
		<div class="authentication-main no-bg">
			<div class="row">
				<div class="col-md-12">
					<div class="auth-innerright">
						<div class="authentication-box">
							<div class="mt-4">
								<div class="card-body">
									<div class="cont text-center">
										<div>
                                            <form method="POST" action="{{ route('auth.postLogin') }}">
                                                @csrf
												<h4>LOGIN</h4>
												<h6>Enter your Username and Password</h6>
												<div class="form-group">
													<label class="col-form-label pt-0">Your Name</label>
													<input class="form-control" type="text" required="" name="username">
												</div>
												<div class="form-group">
													<label class="col-form-label">Password</label>
													<input class="form-control" type="password" required="" name="password">
												</div>
												<div class="checkbox p-0">
													<input id="checkbox1" type="checkbox">
													<label for="checkbox1">Remember me</label>
												</div>
												<div class="form-group row mt-3 mb-0">
													<button class="btn btn-primary btn-block" type="submit">LOGIN</button>
												</div>
{{--												<div class="login-divider"></div>--}}

											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- login page end-->
	</div>
</div>
@endsection

@section('script')
@endsection
