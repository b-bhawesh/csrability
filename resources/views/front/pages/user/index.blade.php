@extends('admin.template.master') 
@section('title', $title)
@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2> {{ $title }}</h2>	
			<a class="btn btn-primary btn-sm pull-right" href="{{ route('auth.users.create') }}">Add User</a>	
			<div class="clearfix"></div>	
		</div>

		<div class="x_content">		
			@include('admin.partials.flash_message')	
			<div class="table-responsive">
				<table class="table table-striped jambo_table bulk_action">
					<thead>
						<tr class="headings">
							<th class="column-title">S.no</th>							
							<th class="column-title">User</th>
							<th class="column-title">Email</th>							
							<th class="column-title">User Type</th>
							<th class="column-title">Created On</th>
							<th class="column-title no-link last">
								<span class="nobr">Action</span>
							</th>							
						</tr>
					</thead>
					<tbody>
					@if(count($users) > 0)
					
					@foreach($users as $k=>$u)
					<tr>
						<td>{{ ++$k }}</td>
						<td>{{ $u->name }}</td>
						<td>{{ $u->email }}</td>
						<td>{{ get_user_type($u->user_type) }}</td>
						<td>{{ Carbon\Carbon::parse($u->created_at)->format('d-M-Y H:i:s') }}</td>
						<td>
							<a href="{{ route('auth.users.delete', $u->id) }}"><i class="fa fa-trash"></i> Delete</a>
							<a href="{{ route('auth.users.reset.password', $u->id) }}"><i class="fa fa-exchange"></i> Reset Password</a>
						</td>
					</tr>
					@endforeach
					@else
					<tr><td colspan="5">No Record Found !!!</td></tr>
					@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
