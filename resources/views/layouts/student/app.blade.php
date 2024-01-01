<!DOCTYPE html> 
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Dreams LMS</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.svg')}}">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
		
		<!-- Feather CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/feather.css')}}">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header header-page">
				<div class="header-fixed">
				@include('student.partials.nav')
				</div>
			</header>
			<!-- /Header -->
			
			<!--Dashbord Student -->
			<div class="page-content">
				<div class="container">
					<div class="row">
						
						<!-- sidebar -->
                        @include('student.partials.sidebar')
						<!-- /sidebar -->
						
						<!-- Profile Details -->
						<div class="col-xl-9 col-md-8">	
							
								@yield('student-main-content')
							
						</div>	
						<!-- Profile Details -->
						
					</div>
				</div>
			</div>	
			<!-- /Dashbord Student -->
			
			<!-- Footer -->
            @include('student.partials.footer')
			<!-- /Footer -->
		   
		</div>
	   <!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
		
		<!-- Select2 JS -->
	  	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		
		<!-- Feature JS -->
		<script src="{{asset('assets/plugins/feather/feather.min.js')}}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>
		
	</body>
</html>