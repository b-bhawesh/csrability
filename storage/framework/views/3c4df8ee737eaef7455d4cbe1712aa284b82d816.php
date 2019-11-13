 
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Show Jobs <small>These are Jobs.</small>
        </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo e(route('auth.dashboard')); ?>">Home</a></li>
			<li><a href="<?php echo e(route('auth.job.index')); ?>">Show Jobs </a></li>
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
								<?php if(count($content) > 0): ?>
								
								<?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e(++$k); ?></td>
									<td><?php echo e($u->job_title); ?></td>
									<td><?php echo e($u->organisation); ?></td>
									<td><?php echo e(get_organisation_type($u->organisation_type)); ?></td>
									<td><?php echo e(Carbon\Carbon::parse($u->publish_date)->format('d-M-Y')); ?></td>
									<td><?php echo e(Carbon\Carbon::parse($u->closing_date)->format('d-M-Y')); ?></td>
									<td>
										<a href="<?php echo e(route('auth.job.edit', $u->id)); ?>"><i class="fa fa-pencil"></i> Edit</a>							
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
								<tr><td style="text-align: center;" colspan="5">No Record Found !!!</td></tr>
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

<?php echo $__env->make('admin.template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unilinki/public_html/csrability/resources/views/admin/pages/job/index.blade.php ENDPATH**/ ?>