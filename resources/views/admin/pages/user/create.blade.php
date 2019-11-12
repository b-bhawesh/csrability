@extends('admin.template.master') 
@section('title', $title)
@section('content')

@php

$pageTitle = old('_title'); $pageDescription = old('_description');
$pageURL = old('_url'); $category = isset($categoryd) ? $categoryd : old('_category');
$applyType = old('_apply_type'); 

$prop = ""; $method = '';

if(isset($scheme) && (isset($type) && $type == 'view')){
	$pageTitle = $scheme[0]->title; 
	$pageURL = $scheme[0]->scheme_url; 
	$pageDescription = $scheme[0]->description;
	$category = $scheme[0]->category;
	$applyType = $scheme[0]->allow_type;
	
	$prop = 'disabled'; 
}

if(isset($scheme) && (isset($type) && $type == 'edit')){
	$pageTitle = $scheme[0]->title; 
	$pageURL = $scheme[0]->scheme_url; 
	$pageDescription = $scheme[0]->description;
	$category = $scheme[0]->category;
	$applyType = $scheme[0]->allow_type;
	
	$method="PUT" ;
}

@endphp


<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Add User <small>These are Users.</small>
        </h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('auth.dashboard') }}">Home</a></li>
			<li><a href="{{ route('auth.users.create') }}">Add Users </a></li>
			<li class="active">Data</li>
		</ol> 									
	</div>

	<div id="page-inner"> 
		<div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Add Users
	                </div>

	                <div class="panel-body add-useradmin">
	                    @include('admin.partials.flash_message') 					
						<form action="{{ $action }}" method="post" enctype="multipart/form-data">
							@csrf()
							@if(!empty($method)) @method($method) @endif
					        <div class="form-group">
					            <label class="control-label col-sm-2" for="name"> User Name :</label>
					            <div class="col-sm-10">
					                <input type="text" class="form-control" name="name" value="{{ $pageTitle }}" {{ $prop }} maxlength="100" required >	
					            </div>
					        </div>

					        <div class="form-group">
					            <label class="control-label col-sm-2" for="name"> Email :</label>
					            <div class="col-sm-10">
					                <input type="email" class="form-control" name="email" value="{{ $pageTitle }}" {{ $prop }} maxlength="100" required >
					            </div>
					        </div>

					        <div class="form-group">
					            <label class="control-label col-sm-2" for="name"> User Type :</label>
					            <div class="col-sm-10">
					                <select class="form-control" name="user_type" required>
										<option value="">Select</option>
										<option value="1" @if($applyType == 1) selected @endif>Super Administrator</option>
										<option value="2" @if($applyType == 2) selected @endif>Administrator</option>
										<option value="3" @if($applyType == 3) selected @endif>Sub Admin</option>
										<option value="4" @if($applyType == 3) selected @endif>User</option>	
									</select> 
					            </div>
					        </div>

					        <div class="form-group">
					            <label class="control-label col-sm-2" for="name"> Default Password :</label>
					            <div class="col-sm-10">
					                <input type="text" class="form-control" value="Password@123" {{ $prop }} maxlength="100" required readonly="">
					            </div>
					        </div>

					        <div class="form-group">						
								<input type="submit" class="btn btn-primary" value="Submit" name="btn_btn_add_product"  {{ $prop }}>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('javascript')
<script src="{{ asset('assets/admin/js/summernote.js') }}"></script>
<link href="{{ asset('assets/admin/css/summernote.css') }}" rel="stylesheet">

<script>



$(function(){
	$('.summernote').summernote({
		height: 250,
		disableResizeEditor: true,
		toolbar: [
		    // [groupName, [list of button]]
		    ['style', ['bold', 'italic', 'underline', 'clear']],
		    ['font', ['strikethrough', 'superscript', 'subscript']],	   
		    		    
		  ]
	});

	@if($prop == 'disabled')
		console.log("True");
		$('.summernote').summernote('disable');
	@endif

	$(".pdf-div").hide();
	$(".url-div").hide();
});


$('input[type="text"][name="page_title"]').on('keyup', function(){
	var slug = Util.slugify($(this).val());
	$('input[type="text"][name="page_slug"]').val(slug);
	
});

$('input[type="file"][name="pdf_doc"]').on("change", function(){
	var $this = $(this);
	var file = this.files[0];
	var fileType = file["type"];
	var ValidImageTypes = ["application/pdf"];
	if ($.inArray(fileType, ValidImageTypes) < 0) {
	     // invalid file type code goes here.
	     alert("Please add valid pdf file");
	     $this.val('');
	     return false;
	     
	}
});

$('select[name="_apply_type"]').on('change', function(){
// 	$('select[name="_apply_type"]').val("");
	var $this = $(this);
	type = $(this).val();
	toggle_apply_type(type);	
});

function toggle_apply_type(type)
{
	console.log(type);
	$(".pdf-div").show();
	$(".url-div").show();

	if(type == "") { $(".pdf-div").hide(); $(".url-div").hide(); }	
	if(type == 1) { $(".pdf-div").hide(); $('input[type="text"][name="_url"]').prop('required', true); $('input[type="file"][name="pdf_doc"]').prop('required', false); }
	if(type == 2) { $(".url-div").hide(); $('input[type="file"][name="pdf_doc"]').prop('required', true); $('input[type="text"][name="_url"]').prop('required', false); }
	if(type == 3) { $(".pdf-div").hide(); $(".url-div").hide();  $('input[type="file"][name="pdf_doc"]').prop('required', false); $('input[type="text"][name="_url"]').prop('required', false); }	
}

$(function(){
	var type = $('select[name="_apply_type"]').val();

	if(type !=""){
		toggle_apply_type(type);
	}
});


</script>

@endsection
