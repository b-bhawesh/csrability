@extends('admin.template.master') 
@section('title', $title)
@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel"> 
		<div class="x_title">
			<h2>{{ $title }}</h2>			
			<div class="clearfix"></div>
		</div>

		<div class="x_content">
			
			@include('admin.partials.flash_message')	
			
			<form action="{{ route('admin.password.update') }}" method="post" id="passwordChange">
			@csrf()
			
				<div class="row">
					<div class="form-group">
						<label>Old Password</label> 
						<input type="password" class="form-control" name="old_password" autocomplete="nope">
					</div>
					
					<div class="form-group">
						<label>New Password</label> 
						<input type="password" class="form-control" name="new_password" autocomplete="nope" >
					</div>
					
					<div class="form-group">
						<label>Retype New Password</label> 
						<input type="password" class="form-control" name="re_new_password" autocomplete="nope" >
					</div>
					
					<div class="form-group">						 
						<input type="button" class="btn btn-primary btn-sm" name="btn_change_password" value="Change Password">
					</div>
				</div>			
			</form>
		</div>
	</div>
</div>

@stop

@section('javascript')

<script>

$('input[type="button"][name="btn_change_password"]').on('click', function(){
	var oldpass = $('input[type="password"][name="old_password"]').val();
	var newpass = $('input[type="password"][name="new_password"]').val();
	var renewpass = $('input[type="password"][name="re_new_password"]').val();
	
	if(oldpass == "")
	{
		$('input[type="password"][name="old_password"]').addClass('has-error');
		$('input[type="password"][name="old_password"]').attr('placeholder', 'Please write your old password');
		return false;
	}

	if(newpass == "")
	{
		$('input[type="password"][name="new_password"]').addClass('has-error');
		$('input[type="password"][name="new_password"]').attr('placeholder', 'Please write your new password');
		return false;
	}

	if(renewpass == "")
	{
		$('input[type="password"][name="re_new_password"]').addClass('has-error');
		$('input[type="password"][name="re_new_password"]').attr('placeholder', 'Please retype your new password');
		return false;
	}

	if(newpass != renewpass)
	{
		swal({
    		title: "Warning !!!",
      	  	text: "Password and confirm password should be same",
      	  	type: "warning",
    	});

    	return false;
	}

	$('form#passwordChange').submit();
});

$('input[type="password"]').on('keyup', function(){
	var val = $(this).val();
	if(val != "") $(this).removeClass('has-error');
});
</script>

@endsection

