 

<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>


<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Show Users <small>These are Users.</small>
        </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo e(route('auth.dashboard')); ?>">Home</a></li>
			<li><a href="<?php echo e(route('auth.users.social.index')); ?>">Show Users </a></li>
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

								<?php if(count($users) > 0): ?>

								

								<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

								<tr>

									<td><?php echo e(++$k); ?></td>

									<td><?php echo e($u->name); ?></td>

									<td><?php echo e($u->email); ?></td>

									<td><?php echo e(get_user_type($u->user_type)); ?></td>

									<?php if(!empty($u->google_id)): ?>        
									    <td><center><img src="<?php echo e(asset('assets/admin/images/google.png')); ?>" class="login-mediumlogo"></center></td>       
									<?php elseif(!empty($u->facebook_id)): ?> 
									    <td><center><img src="<?php echo e(asset('assets/admin/images/fb.png')); ?>" class="login-mediumlogo"></center></td>    
									<?php elseif(!empty($u->linkedin_id)): ?> 
									    <td><center><img src="<?php echo e(asset('assets/admin/images/linkedin.png')); ?>" class="login-mediumlogo"></center></td>  
									<?php else: ?>
									    <td><center><img src="<?php echo e(asset('assets/admin/images/user.png')); ?>" class="login-mediumlogo"></center></td>     
									<?php endif; ?>

									<td><?php echo e(Carbon\Carbon::parse($u->created_at)->format('d-M-Y H:i:s')); ?></td>

									<td>

										<a href="<?php echo e(route('auth.users.delete', $u->id)); ?>"><i class="fa fa-trash"></i> Delete</a>

										<a href="<?php echo e(route('auth.users.reset.password', $u->id)); ?>"><i class="fa fa-exchange"></i> Reset Password</a>

									</td>

								</tr>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								<?php else: ?>

								<tr><td colspan="5">No Record Found !!!</td></tr>

								<?php endif; ?>

								</tbody>

							</table>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>	
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unilinki/public_html/csrability/resources/views/admin/pages/user/index.blade.php ENDPATH**/ ?>