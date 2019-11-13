<?php if(Session::has('message')): ?>
<?php $message = Session::get('message') ?>
<div class="row">
<div class="alert <?php echo e($message['flag']); ?>">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<?php echo e($message['message']); ?>

</div>
</div>
<?php endif; ?>

<?php if($errors->any()): ?>
	<div class="row">
    	<div class="alert alert-danger">    		
            <ul class="pad-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-style-none"><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?> <?php /**PATH /home/unilinki/public_html/csrability/resources/views/admin/partials/flash_message.blade.php ENDPATH**/ ?>