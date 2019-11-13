<!DOCTYPE html>

<html lang="en">

<?php echo $__env->make('front.partials.site_head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

	<!-- Wrapper Starts Here -->

	<div class="wrapper">

		<!-- Header Section Starts Here -->

		<?php echo $__env->make('front.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- Header Section Ends Here -->

		<!-- Content Area Starts Here -->

		<?php echo $__env->yieldContent('content'); ?>

		<!-- Content Area Ends Here -->

		<!-- Footer Section Starts Here -->

		<?php echo $__env->make('front.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- Footer Section Ends Here -->

	</div>

	<!-- Wrapper Ends Here -->

	<script src="<?php echo e(asset('assets/js/jQuery.3.3.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

</body>

</html>

<?php /**PATH /home/unilinki/public_html/csrability/resources/views/front/template/master.blade.php ENDPATH**/ ?>