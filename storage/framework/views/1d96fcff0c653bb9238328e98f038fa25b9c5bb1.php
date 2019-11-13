 
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>

<?php

$userId= Auth::user()->id;

$adtitle = '';
$adpublish_date = '';
$adclosing_date = '';
$adorganisation = '';
if(isset($applyData))
{
	$adtitle = $applyData->job_title; 
	$adpublish_date = $applyData->publish_date;  
	$adclosing_date = $applyData->closing_date;   
	$adorganisation = $applyData->organisation;   
}

?>

<div class="container">					
	<form action="<?php echo e(route('job.store')); ?>" method="post" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
        <h2 class="text-center my-4"> Review your Application </h2>
		<div class="form-group">
			<div class="row">
                <div class="col-md-3">
			        <label>User Id</label>
			    </div>
			    <div class="col-md-9">
			        <input type="text" class="form-control" name="user_id" value="<?php echo e($userId); ?>" maxlength="100" readonly="">												
		        </div>
		    </div>
		</div>

		<div class="form-group">
			<div class="row">
                <div class="col-md-3">
			        <label>Job Title</label>
			    </div>
			    <div class="col-md-9">
			        <input type="text" class="form-control" name="job_title" value="<?php echo e(trim($adtitle)); ?>" maxlength="100" readonly="">											
		        </div>
		    </div>
		</div>

		<div class="form-group">
			<div class="row">
                <div class="col-md-3">
			        <label>Publish Date</label>
			    </div>
			    <div class="col-md-9">
			        <input type="text" class="form-control" name="publish_date" value="<?php echo e(trim($adpublish_date)); ?>" maxlength="100" readonly="">											
		        </div>
		    </div>
		</div>

		<div class="form-group">
			<div class="row">
                <div class="col-md-3">
			        <label>Closing Date</label>
			    </div>
			    <div class="col-md-9">
			        <input type="text" class="form-control" name="closing_date" value="<?php echo e(trim($adclosing_date)); ?>" maxlength="100" readonly="">											
		        </div>
		    </div>
		</div>

		<div class="form-group">
			<div class="row">
                <div class="col-md-3">
			        <label>Organisation</label>
			    </div>
			    <div class="col-md-9">
			        <input type="text" class="form-control" name="organisation" value="<?php echo e(trim($adorganisation)); ?>" maxlength="100" readonly="">											
		        </div>
		    </div>
		</div>

		<div class="form-group">
			<div class="row">			    						
				<div class="col-md-3">
					<label>Attachment</label>
				</div>
				<div class="col-md-9">
                    <input type="file" name="attachment" id="file-2" class="inputfile" data-multiple-caption="{count} files selected" multiple>
                    <label for="file-2" class="mr-5"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Select File</span></label> Max Size 100 kb
                </div>
			</div>
		</div>
		
		

							
		<div class="form-group" style="margin-top: 20px;">						
			<input type="submit" class="btn btn-primary" value="Submit" name="btn_btn_add_product">
		</div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unilinki/public_html/csrability/resources/views/front/pages/application/index.blade.php ENDPATH**/ ?>