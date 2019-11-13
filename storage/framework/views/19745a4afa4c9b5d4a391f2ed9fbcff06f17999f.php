 
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Show Applications <small>These are Applications.</small>
        </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo e(route('auth.dashboard')); ?>">Home</a></li>
			<li><a href="<?php echo e(route('auth.application.index')); ?>">Show Applications </a></li>
			<li class="active">Data</li>
		</ol> 									
	</div>

	<div id="page-inner"> 
		<div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Applications
	                </div>
	                
	                <div class="panel-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                        	<thead>
									<tr class="headings">
										<th class="column-title">S.no</th>							
										<th class="column-title">Job Title</th>
										<th class="column-title">Organisation</th>
										<th class="column-title">Attachment</th>
										<th class="column-title">Apply Time</th>
										<th class="column-title">Last Date</th>					
									</tr>
								</thead>
								<tbody>
								<?php if(count($content) > 0): ?>
								
								<?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e(++$k); ?></td>
									<td><?php echo e($u->job_title); ?></td>
									<td><?php echo e($u->organisation); ?></td>
									<td><?php echo e($u->attachment); ?></td>
									<td><?php echo e($u->created_at); ?></td>
									<td><?php echo e($u->closing_date); ?></td>
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

<?php echo $__env->make('admin.template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unilinki/public_html/csrability/resources/views/admin/pages/application/index.blade.php ENDPATH**/ ?>