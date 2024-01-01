@extends('layouts.auth.app')	
@section('auth-form')
<div class="main-wrapper log-wrap">
	
	<div class="row">
	
		<!-- Login Banner -->
		<div class="col-md-6 login-bg">
			<div class="owl-carousel login-slide owl-theme">
				<div class="welcome-login">
					<div class="login-banner">
						<img src="{{asset('assets/img/login-img.png')}}" class="img-fluid" alt="Logo">
					</div>
					<div class="mentor-course text-center">
						<h2>Welcome to <br>DreamsLMS Courses.</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					</div>
				</div>
				<div class="welcome-login">
					<div class="login-banner">
						<img src="{{asset('assets/img/login-img.png')}}" class="img-fluid" alt="Logo">
					</div>
					<div class="mentor-course text-center">
						<h2>Welcome to <br>DreamsLMS Courses.</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					</div>
				</div>
				<div class="welcome-login">
					<div class="login-banner">
						<img src="{{asset('assets/img/login-img.png')}}" class="img-fluid" alt="Logo">
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
						<img src="{{asset('assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
						<div class="back-home">
							<a href="{{route('home')}}">Back to Home</a>
						</div>
					</div>
					<h1>Sign up</h1>
					@if (session('success'))
						<p class="text-info">{{session('success')}}</p>
					@endif
					<form action="{{route('student.register')}}" method="POST">
						@csrf
						<div class="input-block">
							<label class="form-control-label">First Name</label>
							<input type="text" name="first_name" class="form-control" placeholder="Enter your Full Name">
						</div>
						@error('first_name')
    						<div class="text-danger">{{ $message }}</div>
						@enderror
						<div class="input-block">
							<label class="form-control-label">Last Name</label>
							<input type="text" name="last_name" class="form-control" placeholder="Enter your Full Name">
						</div>
						@error('last_name')
    						<div class="text-danger">{{ $message }}</div>
						@enderror
						<div class="input-block">
							<label class="form-control-label">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Enter your email address">
						</div>
						@error('email')
							<div class="text-danger">{{ $message }}</div>
						@enderror
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
						<div class="input-block">
							<label class="form-control-label">Phone</label>
							<input type="text" name="phone" class="form-control" placeholder="Enter your phone number">
						</div>
					
						<div class="input-block">
							<label class="form-control-label">Date of Birth</label>
							<input type="date" name="dob" class="form-control">
						</div>
					
						<div class="input-block">
							<label class="form-control-label">Country</label>
							<select name="country" class="form-control" id="countryDropdown">
								@foreach ($countries as $country)
									<option value="{{$country}}">{{$country}}</option>
								@endforeach
							</select>
						</div>
						@error('country')
							<div class="text-danger">{{ $message }}</div>
						@enderror

						<div class="input-block">
							<label class="form-control-label">Address</label>
							<input type="text" name="address" class="form-control" placeholder="Enter your adress">
						</div>

						<div class="input-block">
							<label class="form-control-label">Address 2</label>
							<input type="text" name="address2" class="form-control" placeholder="Enter your address line 2">
						</div>
						<div class="input-block">
							<label class="form-control-label">City</label>
							<input type="text" name="city" class="form-control" placeholder="Enter your city">
						</div>

						<div class="input-block">
							<label class="form-control-label">Zip Code</label>
							<input type="text" name="zip_code" class="form-control" placeholder="Enter your zip code">
						</div>
						

						<div class="form-check remember-me">
							<label class="form-check-label mb-0">
							  <input class="form-check-input" name="agree" type="checkbox" name="remember"> I agree to the <a href="term-condition.html">Terms of Service</a> and <a href="privacy-policy.html">Privacy Policy.</a>
							  	@error('agree')
									<div class="text-danger">{{ $message }}</div>
								@enderror
							</label>
						</div>
						
						<div class="d-grid">
							<button class="btn btn-primary btn-start" type="submit">Create Account</button>
						</div>
					</form>
				</div>
				<div class="google-bg text-center">
					<span><a href="#">Or sign in with</a></span>
					<div class="sign-google">
						<ul>
							<li><a href="#"><img src="{{asset('assets/img/net-icon-01.png')}}" class="img-fluid" alt="Logo"> Sign In using Google</a></li>
							<li><a href="#"><img src="{{asset('assets/img/net-icon-02.png')}}" class="img-fluid" alt="Logo">Sign In using Facebook</a></li>
						</ul>
					</div>
					<p class="mb-0">Already have an account? <a href="{{route('login')}}">Sign in</a></p>
				</div>
			</div>
			<!-- /Login -->
			
		</div>
		
	</div>
   
</div>
@endsection
