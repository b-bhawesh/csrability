@extends('admin.template.master') 
@section('title', $title)
@section('content')

<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Show Jobs <small>These are Jobs.</small>
        </h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('auth.dashboard') }}">Home</a></li>
			<li><a href="{{ route('auth.job.index') }}">Show Jobs </a></li>
			<li class="active">Data</li>
		</ol> 									
	</div>

	<div id="page-inner"> 
		<div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Jobs
	                </div>
	                
	                <div class="panel-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                        	<thead>
									<tr class="headings">
										<th class="column-title">S.no</th>							
										<th class="column-title">Job Title</th>
										<th class="column-title">Organisation</th>							
										<th class="column-title">Organisation Type</th>
										<th class="column-title">Publish On</th>
										<th class="column-title">Closing On</th>
										<th class="column-title no-link last">
											<span class="nobr">Action</span>
										</th>							
									</tr>
								</thead>
								<tbody>
								@if(count($content) > 0)
								
								@foreach($content as $k=>$u)
								<tr>
									<td>{{ ++$k }}</td>
									<td>{{ $u->job_title }}</td>
									<td>{{ $u->organisation }}</td>
									<td>{{ get_organisation_type($u->organisation_type) }}</td>
									<td>{{ Carbon\Carbon::parse($u->publish_date)->format('d-M-Y') }}</td>
									<td>{{ Carbon\Carbon::parse($u->closing_date)->format('d-M-Y') }}</td>
									<td>
										<a href="{{ route('auth.job.edit', $u->id) }}"><i class="fa fa-pencil"></i> Edit</a>							
									</td>
								</tr>
								@endforeach
								@else
								<tr><td style="text-align: center;" colspan="5">No Record Found !!!</td></tr>
								@endif
								</tbody>
							</table>
						</div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>	
</div>

@endsection
