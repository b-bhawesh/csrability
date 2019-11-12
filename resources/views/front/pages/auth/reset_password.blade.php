@extends('admin.template.base')
@section('title', 'Admin Reset Password')
@section('content')
<div class="login_wrapper">
	<div class="animate form login_form">
		<section class="login_content">
			<form method="post" action="{{ route('admin_secure_login') }}">
				<h1>Reset Password</h1>
				<div>
					<input name="_password" type="password" class="form-control" placeholder="Password"
						required="" />
				</div>
				<div>
					<input name="_cpassword" type="password" class="form-control" placeholder="Confirm Password"
						required="" />
				</div>
				<div>
					<button type="submit" class="btn btn-default submit">Submit</button>
				</div>
				@include('admin.partials.base_footer')				
			</form>
		</section>
	</div>
</div>
@endsection