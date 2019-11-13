<!DOCTYPE html>



<html lang="en">



   <head>



      <meta charset="UTF-8">



      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit= no">



      <title>CSR - Jobs</title>



      <!-- Cross Platform Favicon Code Starts -->



      <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">



      <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">



      <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">



      <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">



      <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">



      <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">



      <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">



      <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">



      <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">



      <link rel="icon" type="image/png" sizes="192x192" href="android-icon-192x192.png">



      <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">



      <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">



      <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">



      <link rel="manifest" href="manifest.json">



      <meta name="msapplication-TileColor" content="#ffffff">



      <meta name="msapplication-TileImage" content="ms-icon-144x144.png">



      <meta name="theme-color" content="#ffffff">



      <!-- Cross Platform Favicon Code Ends -->



      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap">



      <link rel="stylesheet" href="<?php echo e(asset('assets/css/all.min.css')); ?>">



      <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">



      <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">



   </head>



   <body>



      <!-- Wrapper Starts Here -->



      <div class="wrapper">



         <!-- Header Section Starts Here -->







         <!-- Header Section Ends Here -->



         <!-- Content Area Starts Here -->

		

		

        <main class="py-4">

            <div class="container" style="margin-top: 150px;">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Login</div>



                <div class="card-body">

                    <form method="post" action="<?php echo e(route('admin_secure_login')); ?>">

                        <?php echo csrf_field(); ?>

                        <div class="form-group row">

                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>



                            <div class="col-md-6">

                                <input id="email" type="email" class="form-control " name="_username" value="" required autocomplete="email" autofocus>



                                                            </div>

                        </div>



                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>



                            <div class="col-md-6">

                                <input id="password" type="password" class="form-control " name="_password" required autocomplete="current-password">



                                                            </div>

                        </div>



                        <div class="form-group row">

                            <div class="col-md-6 offset-md-4">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" >



                                    <label class="form-check-label" for="remember">

                                        Remember Me

                                    </label>

                                </div>

                            </div>

                        </div>



                        <div class="form-group row mb-0">

                            <div class="col-md-8 offset-md-4">

                                <button type="submit" name="login" class="btn btn-primary">

                                    Login

                                </button>



                                                                    <a class="btn btn-link" href="http://ctdworld.org/csr/password/reset">

                                        Forgot Your Password?

                                    </a>

                                                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

        </main>

         

         <!-- Content Area Ends Here -->



         <!-- Footer Section Starts Here -->



        


         <!-- Footer Section Ends Here -->



      </div>



      <!-- Wrapper Ends Here -->



      <script src="<?php echo e(asset('assets/js/jQuery.3.3.1.min.js')); ?>"></script>



      <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>



      <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>



      <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>



   </body>



</html>



<?php /**PATH /home/unilinki/public_html/csrability/resources/views/admin/pages/auth/login.blade.php ENDPATH**/ ?>