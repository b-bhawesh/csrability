@extends('admin.template.base')

@section('title', 'Administrator Login')

@section('content')

<div class="login_wrapper">

	<div class="animate form login_form">

		<section class="login_content">

		    @include('admin.partials.flash_message')

			<form method="post" action="{{ route('admin_secure_login') }}">

			@csrf()

				<h1>Admininstator Login</h1>

				<div>

					<input name="_username" type="text" class="form-control" placeholder="Username"

						required autocomplete="none"/>

				</div>

				<div>

					<input name="_password" type="password" class="form-control" placeholder="Password"

						required autocomplete="none"/>

				</div>

				<div class="text-left">

					<button type="submit" class="btn btn-default submit">Log in</button> 

<!-- 					<a class="reset_pass" href="{{ route('admin_forgot_password') }}">Lost your password?</a> -->

				</div>

				@include('admin.partials.base_footer')				

			</form>

		</section>

	</div>

	<div class="clearfix"></div>

</div>

@endsection