    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

@extends('admin.template.master') 
@section('title', $title)
@section('content')

@php

$jtitle = ''; $description = ''; $organization = ''; $pdate = ''; $cdate = '';
$organizationType = ''; $country = ''; $state = ''; $city = ''; $sectors = array();
if(isset($jobData))
{
	$jtitle = $jobData->job_title; 
	$description = $jobData->job_description; 
	$organization = $jobData->organisation;
	$pdate = \Carbon\Carbon::parse($jobData->publish_date)->format('d-m-Y');
	$cdate = \Carbon\Carbon::parse($jobData->closing_date)->format('d-m-Y');
	$organizationType = $jobData->organisation_type; 
	$country = $jobData->country; 
	$state = $jobData->state; 
	$city = $jobData->city;	 
	$company_image = $jobData->company_image;	
	$attachment = $jobData->attachment;	
	
	if($tempJob == 0) $sectors = $jobData->sectors->pluck('sector_id')->toArray();
}

@endphp

<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Edit Job <small>These are Jobs.</small>
        </h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('auth.dashboard') }}">Home</a></li>
			<li><a href="{{ route('auth.job.index') }}">Edit Jobs </a></li>
			<li class="active">Data</li>
		</ol> 									
	</div>

	<div id="page-inner"> 
		<div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Edit Jobs
	                </div>

                    <div class="panel-body">
						@include('admin.partials.flash_message') 					
						<form action="{{ $action }}" method="post" enctype="multipart/form-data">
							@csrf()				
							<div class="form-group">					
								<div class="row">
									<div class="col-md-3">
									    <label>Job Title</label>
									</div>
									<div class="col-md-9">
									    <input type="text" class="form-control" name="job_title" value="{{ trim($jtitle) }}" maxlength="100" required >	
									</div>											
								</div>
							</div>
								
							<div class="form-group">
								<div class="row">
								    <div class="col-md-3">
								        <label>Job Description</label>
								    </div>
								    <div class="col-md-9">
							        	<textarea id="summernote" name="job_description">{{ trim($description) }}</textarea>	
							        </div>											
								</div>
							</div>
								
							<div class="form-group">
								<div class="row">
		    						<div class="col-md-3">						
		        						<label>Organisation</label>
		        					</div>
		        					<div class="col-md-9">
		        						<input type="text" class="form-control" name="organisation" value="{{ trim($organization) }}" maxlength="100" required >
		    						</div>
		    					</div>
		    				</div>

		    				<div class="form-group">
								<div class="row">		    						
		    						<div class="col-md-3">
		    							<label>Organisation Type</label>
		    						</div>
		    						<div class="col-md-9">
		        						<select name="organisation_type" class="form-control">
		        							<option value="">Select</option>
		        							@if(count(get_organisations()) > 0)
		        							
		        							@foreach(get_organisations() as $k=>$c)
		        							        							
		        							<option value="{{ $k }}" @if($organizationType !="" && $k == $organizationType) selected @endif>{{ $c }}</option>
		        							
		        							@endforeach
		        							
		        							@endif
		        						</select>
		    						</div>
		    					</div>
		    				</div>

		    				<div class="form-group">
								<div class="row">
		    						<div class="col-md-3">						
		        						<label>Publish Date</label>
		        					</div>
		        					<div class="col-md-9">
		        						<input type="text" class="form-control" name="publish_date" value="{{ trim($pdate) }}" maxlength="100" required readonly>
		    						</div>
		    					</div>
		    				</div>

		    				<div class="form-group">
								<div class="row">		    						
		    						<div class="col-md-3">
		    							<label>Closing Date</label>
		    						</div>
		    						<div class="col-md-9">
		        						<input type="text" class="form-control" name="closing_date" value="{{ trim($cdate) }}" maxlength="100" required readonly>
		    						</div>
								</div>
							</div>
								
							<div class="form-group">
								<div class="row">
		    						<div class="col-md-3">						
		        						<label>Country</label>
		        					</div>
		        					<div class="col-md-9">
		        						<select name="country" class="form-control" required>
		        							<option value="">Select</option>
		        							@if(count($countries) > 0)
		        							
		        							@foreach($countries as $k=>$c)
		        							
		        							<option value="{{ $c->id }}"  @if($country !="" && $k == $country) selected @endif>{{ $c->name }}</option>
		        							
		        							@endforeach
		        							
		        							@endif
		        						</select>
		    						</div>
		    					</div>
		    				</div>

		    				<div class="form-group">
								<div class="row">		    						
		    						<div class="col-md-3">
		    							<label>State</label>
		    						</div>
		    						<div class="col-md-9">
		        						<select name="state" class="form-control" required>
		        							<option value="">Select</option>
		        							@if(count($states) > 0)
		        							
		        							@foreach($states as $k=>$c)
		        							
		        							<option value="{{ $c->id }}"  @if($state !="" && $k == $state) selected @endif>{{ $c->name }}</option>
		        							
		        							@endforeach
		        							
		        							@endif
		        						</select>
		    						</div>
		    					</div>
		    				</div>

		    				<div class="form-group">
								<div class="row">
		    						<div class="col-md-3">						
		        						<label>City</label>
		        					</div>
		        					<div class="col-md-9">
		        						<select name="city" class="form-control" required>
		        							<option value="">Select</option>
		        							@if(count($cities) > 0)
		        							
		        							@foreach($cities as $k=>$c)
		        							
		        							<option value="{{ $c->id }}"  @if($city !="" && $k == $city) selected @endif>{{ $c->city }}</option>
		        							
		        							@endforeach
		        							
		        							@endif
		        						</select>
		    						</div>		    						
								</div>
							</div>
								
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
								        <label>Sectors (Select Upto 3)</label>
								    </div>
								    <div class="col-md-9">
										<select class="form-control select2" name="sectors[]" required multiple>
											<option value="">Select</option>
											
											@if(count(get_sectors()) > 0)
											
											@foreach(get_sectors() as $k=>$s)
											
											<option value="{{ $k }}" @if(!empty($sectors) && in_array($k, $sectors)) selected @endif>{{ $s }}</option>
											
											@endforeach
											
											@endif
																
										</select> 						
									</div>
								</div>
							</div>
										
							<div class="form-group">
								<div class="row">    						
		    						<div class="col-md-3">						
		        						<label>Company Image</label>
		        					</div>
		    						<div class="col-md-9">
				                        <input type="file" name="company_image" id="imageUpload" class="hide"> 
				                        <label for="imageUpload" class="upload-poster mr-5">Select file</label> Max Size 50 kb<br>
				                        @if($company_image)
				                        <img src="{{ asset('storage/company-logo/'.$company_image)}}" class="organisation-logo">
				                        @else
				                        <img src="{{ asset('assets/admin/images/dummy-logo.jpg')}}" id="imagePreview" class="organisation-logo" alt="Your image will appear here.">
				                        @endif
				                    </div>
		    					</div>
		    				</div>

		    				<div class="form-group">
								<div class="row">			    						
		    						<div class="col-md-3">
		    							<label>Attachment</label>
		    						</div>
		    						<div class="col-md-9">
				                        <input type="file" name="attachment" id="file-2" class="inputfile" data-multiple-caption="{count} files selected" multiple>
				                        <label for="file-2" class="mr-5"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Select File</span></label> Max Size 100 kb
				                    </div>
								</div>
							</div>
													
							<div class="form-group" style="margin-top: 20px;">						
								<input type="submit" class="btn btn-primary" value="Submit" name="btn_btn_add_product">
								<input type="hidden" name="temp_job" value="{{ $tempJob }}"/>
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
