@extends('admin.template.master') 

@section('title', $title)

@section('content')


<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Show Users <small>These are Users.</small>
        </h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('auth.dashboard') }}">Home</a></li>
			<li><a href="{{ route('auth.users.social.index') }}">Show Users </a></li>
			<li class="active">Data</li>
		</ol> 									
	</div>

	<div id="page-inner"> 
		<div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Users
	                </div>
	                
	                <div class="panel-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                            <thead>
	                                <tr>
	                                    <th class="column-title">S.no</th>							

										<th class="column-title">User</th>

										<th class="column-title">Email</th>							

										<th class="column-title">User Type</th>

										<th class="column-title">Login Medium</th>

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

									@if(!empty($u->google_id))        
									    <td><center><img src="{{ asset('assets/admin/images/google.png') }}" class="login-mediumlogo"></center></td>       
									@elseif(!empty($u->facebook_id)) 
									    <td><center><img src="{{ asset('assets/admin/images/fb.png') }}" class="login-mediumlogo"></center></td>    
									@elseif(!empty($u->linkedin_id)) 
									    <td><center><img src="{{ asset('assets/admin/images/linkedin.png') }}" class="login-mediumlogo"></center></td>  
									@else
									    <td><center><img src="{{ asset('assets/admin/images/user.png') }}" class="login-mediumlogo"></center></td>     
									@endif

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
	    </div>
	</div>	
</div>

@endsection

