	@extends('layouts.auth.app')	
	@section('auth-form')
	<div class="main-wrapper log-wrap">
		
		<div class="row">
		
			<!-- Login Banner -->
			<div class="col-md-6 login-bg">
				<div class="owl-carousel login-slide owl-theme">
					<div class="welcome-login">
						<div class="login-banner">
							<img src="assets/img/login-img.png" class="img-fluid" alt="Logo">
						</div>
						<div class="mentor-course text-center">
							<h2>Welcome to <br>DreamsLMS Courses.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</div>
					</div>
					<div class="welcome-login">
						<div class="login-banner">
							<img src="assets/img/login-img.png" class="img-fluid" alt="Logo">
						</div>
						<div class="mentor-course text-center">
							<h2>Welcome to <br>DreamsLMS Courses.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</div>
					</div>
					<div class="welcome-login">
						<div class="login-banner">
							<img src="assets/img/login-img.png" class="img-fluid" alt="Logo">
						</div>
						<div class="mentor-course text-center">
							<h2>Welcome to <br>DreamsLMS Courses.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /Login Banner -->
			
			<div class="col-md-6 login-wrap-bg">		
			
				<!-- Login -->
				<div class="login-wrapper">
					<div class="loginbox">
						<div class="img-logo">
							<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
							<div class="back-home">
								<a href="index.html">Back to Home</a>
							</div>
						</div>
						<h1>Login</h1>
						<form action="{{route('login.store')}}" method="POST">
							@csrf
							<div class="input-block">
								<label class="form-control-label">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Enter your email address">
								@error('email')
    								<div class="text-danger">{{ $message }}</div>
								@enderror
							</div>
							
							<div class="input-block">
								<label class="form-control-label">Password</label>
								<div class="pass-group" id="passwordInput">																	
									<input type="password" name="password" class="form-control pass-input" placeholder="Enter your password">
									@error('password')
										<div class="text-danger">{{ $message }}</div>
									@enderror
									<span class="toggle-password feather-eye"></span>
									<span class="pass-checked"><i class="feather-check"></i></span>
								</div>
								<div  class="password-strength" id="passwordStrength">
									<span id="poor"></span>
									<span id="weak"></span>
									<span id="strong"></span>
									<span id="heavy"></span>
								</div>
								<div id="passwordInfo"></div>	
								
							</div>

					
							<div class="d-grid">
								<button class="btn btn-primary btn-start" type="submit">Login</button>
							</div>
						</form>
					</div>
					<div class="google-bg text-center">
						<span><a href="#">Or sign in with</a></span>
						<div class="sign-google">
							<ul>
								<li><a href="#"><img src="assets/img/net-icon-01.png" class="img-fluid" alt="Logo"> Sign In using Google</a></li>
								<li><a href="#"><img src="assets/img/net-icon-02.png" class="img-fluid" alt="Logo">Sign In using Facebook</a></li>
							</ul>
						</div>
						<p class="mb-0">Already have an account? <a href="login.html">Sign in</a></p>
					</div>
				</div>
				<!-- /Login -->
				
			</div>
			
		</div>
	   
   </div>
	@endsection
