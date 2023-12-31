<!DOCTYPE html> 
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>{{ config('app.name') }}</title>
		
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.svg')}}">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
		
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/feather/feather.css')}}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header header-page">
				<div class="header-fixed">
					@include('instractor.partials.nav')
				</div>
			</header>
			<!-- /Header -->
			
			<!-- Page Wrapper -->
			<div class="page-content instructor-page-content">
				<div class="container">
					<div class="row">
						
						<!-- Sidebar -->
						@include('instractor.partials.sidebar')
						<!-- /Sidebar -->
						
						<!-- Instructor Dashboard -->
					@yield('instactor-main-content')
						<!-- /Instructor Dashboard -->
						
					</div>
				</div>
			</div>	
			<!-- /Page Wrapper -->
			
			<!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="assets/img/logo.svg" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-2 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Instructor</h2>
									<ul>
										<li><a href="instructor-profile.html">Profile</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="register.html">Register</a></li>
										<li><a href="instructor-list.html">Instructor</a></li>
										<li><a href="deposit-instructor-dashboard.html"> Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-2 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Student</h2>
									<ul>
										<li><a href="student-profile.html">Profile</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="register.html">Register</a></li>
										<li><a href="students-list.html">Student</a></li>
										<li><a href="deposit-student-dashboard.html"> Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-4 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">News letter</h2>
									<div class="news-letter">
										<form>
											<input type="text" class="form-control" placeholder="Enter your email address" name="email">
										</form>
									</div>
									<div class="footer-contact-info">
										<div class="footer-address">
											<img src="assets/img/icon/icon-20.svg" alt="" class="img-fluid">
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<img src="assets/img/icon/icon-19.svg" alt="" class="img-fluid">
											<a href="https://dreamslms.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcb8aeb9bdb1afb0b1af9cb9a4bdb1acb0b9f2bfb3b1">[email&#160;protected]</a>
										</p>
										<p class="mb-0">
											<img src="assets/img/icon/icon-21.svg" alt="" class="img-fluid">
											+19 123-456-7890
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6">
									<div class="privacy-policy">
										<ul>
											<li><a href="term-condition.html">Terms</a></li>
											<li><a href="privacy-policy.html">Privacy</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2023 DreamsLMS. All rights reserved.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
		</div>
	   	<!-- /Main Wrapper -->   
	  
		<!-- jQuery -->
        <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Feature JS -->
		<script src="{{asset('assets/plugins/feather/feather.min.js')}}"></script>

		<!-- Sticky Sidebar JS -->
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

        <!-- Chart JS -->
		@stack('footer-extra-script')

		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>
		
	</body>
</html>