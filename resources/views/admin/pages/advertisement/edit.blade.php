@extends('admin.template.master') 
@section('title', $title)
@section('content')

@php

$adtitle = '';
$adimage = '';
if(isset($advertisementData))
{
	$adtitle = $advertisementData->title; 
	$adimage = $advertisementData->image;  
}

@endphp

<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Edit Advertisement <small>These are Advertisements.</small>
        </h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('auth.dashboard') }}">Home</a></li>
			<li><a href="{{ route('auth.advertisement.index') }}">Edit Advertisements </a></li>
			<li class="active">Data</li>
		</ol> 									
	</div>

	<div id="page-inner"> 
		<div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Edit Advertisements
	                </div>

                    <div class="panel-body">
						@include('admin.partials.flash_message') 					
						<form action="{{ $action }}" method="post" enctype="multipart/form-data">
							@csrf()				
							<div class="form-group">					
								<div class="row">
									<div class="col-md-3">
									    <label>Ads Title</label>
									</div>
									<div class="col-md-9">
									    <input type="text" class="form-control" name="title" value="{{ trim($adtitle) }}" maxlength="100" required >	
									</div>											
								</div>
							</div>
										
							<div class="form-group">
								<div class="row">    						
		    						<div class="col-md-3">						
		        						<label>Ads Image</label>
		        					</div>
		    						<div class="col-md-9">
				                        <input type="file" name="image" id="imageUpload" class="hide"> 
				                        <label for="imageUpload" class="upload-poster mr-5">Select file</label> Max Size 50 kb<br>
				                        @if(trim($adimage))
				                        <img src="{{ asset('storage/advertisement/'.trim($adimage))}}" class="organisation-logo">
				                        @else
				                        <img src="{{ asset('assets/admin/images/dummy-logo.jpg')}}" id="imagePreview" class="organisation-logo" alt="Your image will appear here.">
				                        @endif
				                    </div>
		    					</div>
		    				</div>
													
							<div class="form-group" style="margin-top: 20px;">						
								<input type="submit" class="btn btn-primary" value="Submit" name="btn_btn_add_product">
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

@endsection
