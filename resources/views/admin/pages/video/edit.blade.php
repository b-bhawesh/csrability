@extends('admin.template.master') 
@section('title', $title)
@section('content')

@php

$rtitle = ''; $video = '';
if(isset($videoData))
{
	$rtitle = $videoData->video_title; 	
	$video = $videoData->video;	
}

@endphp

<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Edit Video <small>These are Videos.</small>
        </h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('auth.dashboard') }}">Home</a></li>
			<li><a href="{{ route('auth.video.index') }}">Edit Videos </a></li>
			<li class="active">Data</li>
		</ol> 									
	</div>

	<div id="page-inner"> 
		<div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Edit Videos
	                </div>

                    <div class="panel-body">
						@include('admin.partials.flash_message') 					
						<form action="{{ $action }}" method="post" enctype="multipart/form-data">
							@csrf()				
							<div class="form-group">					
								<div class="row">
									<div class="col-md-3">
									    <label>Video Title</label>
									</div>
									<div class="col-md-9">
									    <input type="text" class="form-control" name="video_title" value="{{ trim($rtitle) }}" maxlength="100" required readonly="">	
									</div>											
								</div>
							</div>
								
							<div class="form-group">
								<div class="row">			    						
		    						<div class="col-md-3">
		    							<label>Video</label>
		    						</div>
		    						<div class="col-md-9">
				                        <input type="file" name="video" id="file-2" class="inputfile" data-multiple-caption="{count} files selected" multiple>
				                        <label for="file-2" class="mr-5"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Select File</span></label> Max Size 100 kb
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
