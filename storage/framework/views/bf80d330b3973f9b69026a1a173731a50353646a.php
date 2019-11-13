 
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Show Scrape Jobs <small>These are Scrape Jobs.</small>
        </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo e(route('auth.dashboard')); ?>">Home</a></li>
			<li><a href="<?php echo e(route('auth.setting.scrape-job')); ?>">Show Scrape Jobs </a></li>
			<li class="active">Data</li>
		</ol>
		<ol class="breadcrumb">
			<li><a class="btn btn-primary" href="<?php echo e(route('auth.setting.scrape.website')); ?>">Scrape Website</a></li>
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
								<?php if(count($jobs) > 0): ?>
								
								<?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e(++$k); ?></td>
									<td><?php echo e($u->source); ?></td>
									<td><?php echo e($u->job_title); ?></td>
									<td>
									<?php echo e(str_limit(strip_tags($u->job_description), 50)); ?>

			                        <?php if(strlen(strip_tags($u->job_description)) > 50): ?>
			                          ... <a href="">Read More</a>
			                        <?php endif; ?>
									<td><?php echo e($u->organization); ?></td>
									<td><?php echo e(Carbon\Carbon::parse($u->created_at)->format('d-M-Y')); ?></td>
									<td><?php echo e(Carbon\Carbon::parse($u->created_at)->format('d-M-Y')); ?></td>
									<td><?php echo e($u->comments); ?></td>
									<td>
										<a href="<?php echo e(route('auth.temp.job.edit', $u->id)); ?>"><i class="fa fa-pencil"></i> Edit</a>							
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
								<tr><td style="text-align: center;" colspan="9">No Record Found !!!</td></tr>
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

<?php echo $__env->make('admin.template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unilinki/public_html/csrability/resources/views/admin/pages/setting/job_scrape.blade.php ENDPATH**/ ?>