@extends('admin.template.base')
@section('title', 'Admin Forgot Password')
@section('content')
<div class="login_wrapper">
	<div class="animate form login_form">
		<section class="login_content">
			<form>
				<h1>Forgot Password</h1>
				<div>
					<input name="_email" type="email" class="form-control" placeholder="Email"
						required="" />
				</div>				
				<div>
					<button type="submit" class="btn btn-default submit">Submit</button> 
					<a class="reset_pass" href="{{ route('admin_login') }}">Back To Login</a>
				</div>
				@include('admin.partials.base_footer')				
			</form>
		</section>
	</div>
</div>
@endsection