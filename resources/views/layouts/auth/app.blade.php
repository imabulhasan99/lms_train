<!DOCTYPE html> 
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>LMS Train</title>
		
		<!-- Favicon -->
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
		<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
	</head>
	<body>

		<!-- Main Wrapper -->
	@yield('auth-form')
	   <!-- /Main Wrapper -->

		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Owl Carousel -->
		<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>	
		
		<!-- Validation-->
		<script src="{{asset('assets/js/validation.js')}}"></script>	
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>	
		
		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>
		<script>
			$(document).ready(function () {
				$('#countryDropdown').select2({
					placeholder: 'Search for a country',
					allowClear: true,
					width: '100%', 
				});
			});
		</script>
		
			
	</body>
</html>