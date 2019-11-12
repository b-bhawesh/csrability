<!DOCTYPE html>

<html lang="en">

@include('front.partials.site_head')

<body>

	<!-- Wrapper Starts Here -->

	<div class="wrapper">

		<!-- Header Section Starts Here -->

		@include('front.partials.header')

		<!-- Header Section Ends Here -->

		<!-- Content Area Starts Here -->

		@yield('content')

		<!-- Content Area Ends Here -->

		<!-- Footer Section Starts Here -->

		@include('front.partials.footer')

		<!-- Footer Section Ends Here -->

	</div>

	<!-- Wrapper Ends Here -->

	<script src="{{ asset('assets/js/jQuery.3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>

