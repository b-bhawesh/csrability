 
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Show Rfps <small>These are Rfps.</small>
        </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo e(route('auth.dashboard')); ?>">Home</a></li>
			<li><a href="<?php echo e(route('auth.job.index')); ?>">Show Rfps </a></li>
			<li class="active">Data</li>
		</ol> 									
	</div>

	<div id="page-inner"> 
		<div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    Rfps
	                </div>
	                
	                <div class="panel-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                        	<thead>
									<tr class="headings">
										<th class="column-title">S.no</th>							
										<th class="column-title">Rfp Title</th>
										<th class="column-title">Organisation</th>		
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
									<td><?php echo e($u->rfp_title); ?></td>
									<td><?php echo e($u->organisation); ?></td>
									<td><?php echo e(Carbon\Carbon::parse($u->publish_date)->format('d-M-Y')); ?></td>
									<td><?php echo e(Carbon\Carbon::parse($u->closing_date)->format('d-M-Y')); ?></td>
									<td>
										<a href="<?php echo e(route('auth.rfp.edit', $u->id)); ?>"><i class="fa fa-pencil"></i> Edit</a>							
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

<?php echo $__env->make('admin.template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unilinki/public_html/csrability/resources/views/admin/pages/rfp/index.blade.php ENDPATH**/ ?>