<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>


<div class="col-lg-12">
<div id="page-wrapper" style="height: 700px;">

	<div class="header">

        <h1 class="page-header">

            Dashboard <small>Welcome Administrator !</small>

        </h1>

		<ol class="breadcrumb">

			<li><a href="<?php echo e(route('auth.dashboard')); ?>">Home</a></li>

			<li class="active">Dashboard</li>

		</ol>

	</div>

<div class="row col-lg-12">

                   <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-briefcase fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo e($jobs); ?></div>
                                        <div>Total Jobs</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo e(route('auth.job.index')); ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Jobs List</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user-secret fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo e($users); ?></div>
                                        <div>No. of Users</div>
                                    </div>
                                </div>
                            </div>
                             <a href="<?php echo e(route('auth.users.index')); ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Users Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo e($applications); ?></div>
                                        <div>No. of job Applicant </div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo e(route('auth.application.index')); ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Customer Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo e($advertisements); ?></div>
                                        <div>No. of Advertisement </div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo e(route('auth.advertisement.index')); ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Leads Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                     <!--<div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">0</div>
                                        <div>No. of Book a Tour</div>
                                    </div>
                                </div>
                            </div>
                            <a href="/loanwalle/admin/booking-tours">
                                <div class="panel-footer">
                                    <span class="pull-left">Book a Tour Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


					<div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">0</div>
                                        <div>No. of Bookings </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/loanwalle/admin">
                                <div class="panel-footer">
                                    <span class="pull-left">Booking Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

					<div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">0</div>
                                        <div>No. of Subscribers </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/loanwalle/admin/subscriber-users">
                                <div class="panel-footer">
                                    <span class="pull-left">Subscribe Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

					<div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-newspaper-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">0</div>
                                        <div>Manage Reports </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/loanwalle/admin">
                                <div class="panel-footer">
                                    <span class="pull-left">Report Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    -->

                </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unilinki/public_html/csrability/resources/views/admin/pages/dashboard.blade.php ENDPATH**/ ?>