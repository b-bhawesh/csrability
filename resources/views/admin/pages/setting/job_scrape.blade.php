@extends('admin.template.master') 
@section('title', $title)
@section('content')

<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Show Scrape Jobs <small>These are Scrape Jobs.</small>
        </h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('auth.dashboard') }}">Home</a></li>
			<li><a href="{{ route('auth.setting.scrape-job') }}">Show Scrape Jobs </a></li>
			<li class="active">Data</li>
		</ol>
		<ol class="breadcrumb">
			<li><a class="btn btn-primary" href="{{ route('auth.setting.scrape.website') }}">Scrape Website</a></li>
		</ol>									
	</div>

	<div id="page-inner"> 
		<div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Scrape Jobs
	                </div>
	                
	                <div class="panel-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                        	<thead>
									<tr class="headings">
										<th class="column-title">S.no</th>							
										<th class="column-title">Source</th>
										<th class="column-title">Job Title</th>
										<th class="column-title">Job Description</th>
										<th class="column-title">Organization</th>
										<th class="column-title">Publish Date</th>
										<th class="column-title">Closing Date</th>
										<th class="column-title">Comment</th>							
										<th class="column-title no-link last">
											<span class="nobr">Action</span>
										</th>							
									</tr>
								</thead>
								<tbody>
								@if(count($jobs) > 0)
								
								@foreach($jobs as $k=>$u)
								<tr>
									<td>{{ ++$k }}</td>
									<td>{{ $u->source }}</td>
									<td>{{ $u->job_title }}</td>
									<td>
									{{ str_limit(strip_tags($u->job_description), 50) }}
			                        @if (strlen(strip_tags($u->job_description)) > 50)
			                          ... <a href="">Read More</a>
			                        @endif
									<td>{{ $u->organization }}</td>
									<td>{{ Carbon\Carbon::parse($u->created_at)->format('d-M-Y') }}</td>
									<td>{{ Carbon\Carbon::parse($u->created_at)->format('d-M-Y') }}</td>
									<td>{{ $u->comments }}</td>
									<td>
										<a href="{{ route('auth.temp.job.edit', $u->id) }}"><i class="fa fa-pencil"></i> Edit</a>							
									</td>
								</tr>
								@endforeach
								@else
								<tr><td style="text-align: center;" colspan="9">No Record Found !!!</td></tr>
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
