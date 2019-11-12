<!DOCTYPE html>



<html lang="en" class="attachment">





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

      <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">

      <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

      <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

   </head>

   <body>



      <!-- Wrapper Starts Here -->



      <div class="wrapper">



         <!-- Header Section Starts Here -->



         <header id="header">



            <div class="headerPrimary bg-primary">



               <div class="container">



                  <div class="row">



                     <div class="col-sm-6">



                        <p class="text-white py-2 mb-sm-0 text-xs-center">Corporate-Social-Responsibility</p>



                     </div>



                     <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end">



                        <ul class="list-unstyled mb-0 d-flex justify-content-sm-end socialMedia">



                           <li class="mr-4 mx-sm-4 pt-1"><a href="#" class="text-white"><i



                              class="fab fa-facebook-f"></i></a></li>



                           <li class="mr-4 mx-sm-4 pt-1"><a href="#" class="text-white"><i



                              class="fab fa-linkedin-in"></i></a></li>



                           <li class="mr-4 mx-sm-4 pt-1"><a href="#" class="text-white"><i class="fab fa-twitter"></i></a>



                           </li>



                        </ul>



                        <div class="dropdown">



                           <button class="btn dropdown-toggle rounded-0 darkPrimary text-white" type="button"



                              id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">



                           {{$userInfo->name}}



                           </button>



                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">



                              <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>



                           </div>



                        </div>



                     </div>



                  </div>



               </div>



            </div>



            <div class="headerSecondry">



               <nav class="navbar navbar-expand-xl w-100" id="navScroll">



                  <div class="container">



                     <a class="navbar-brand" href="../index.php">



                     
                     
                  <img src="assets/img/logo.png" alt="" class="img-fluid">


                     </a>



                     <button class="navbar-toggler second-button" type="button" data-toggle="collapse"



                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"



                        aria-label="Toggle navigation">



                        <div class="animatedIcon"><span></span><span></span><span></span><span></span></div>



                     </button>



                     <div class="collapse navbar-collapse" id="navbarSupportedContent">



                        <ul class="navbar-nav ml-auto text-uppercase">



                           <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>



                           <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>



                           <li class="nav-item"><a class="nav-link" href="#">Our Work</a></li>



                           <li class="nav-item"><a class="nav-link" href="../rfp.php">RFP</a></li>



                           <li class="nav-item"><a class="nav-link" href="#">News</a></li>



                           <li class="nav-item"><a class="nav-link" href="#">Events</a></li>



                           <li class="nav-item"><a class="nav-link  active" href="../jobs.php">Jobs</a></li>



                           <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>



                        </ul>



                        <form class="form-inline my-2 my-xl-0">



                           <div class="input-group">



                              <input type="text" class="form-control" placeholder="Search">



                              <div class="input-group-append">



                                 <button class="btn btn-outline-secondary" type="button">



                                 <i class="fas fa-search"></i>



                                 </button>



                              </div>



                           </div>



                        </form>



                     </div>



                  </div>



               </nav>



            </div>



         </header>



         <!-- Header Section Ends Here -->



         <!-- Content Area Starts Here -->



         <main id="content">

            <div class="container mt-5">

              <div class="row">

                <div class="col-md-8 px-5">



                  <!--div class="row progress-section">

                    <div class="col-md-12 progress-area">

                      <h5> Profile Completeness </h5>

                      <div class="progress">

                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%">

                          <p style="left: 25%;"> 25% </p>

                        </div>                    

                      </div>

                      <p class="complete-progress"> 100% </p>

                    </div>



                    <div class="col-md-12">

                      <div class="row pt-4">

                        <div class="col-md-6">

                          <div class="row">

                            <div class="col-4 text-right">

                              <h2> 13 </h2>

                            </div>

                            <div class="col-8 text-left">

                              <h4> Profile Views </h4>

                              <p> in last 30 days</p>

                            </div>

                          </div>

                        </div>

                        <div class="col-md-6">

                          <div class="row">

                            <div class="col-4 text-right">

                              <h2> 45 </h2>

                            </div>

                            <div class="col-8 text-left">

                              <h4> Search Appearances </h4>

                              <p> in last 30 days</p>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div-->


<div class="row personal-section  mb-5">
                    <div class="col-md-8 text-left">
                      <h5> Fetch details from LinkedIn </h5>
                    </div>
                    <div class="col-md-4 text-right">
                      <button class="btn btn-primary"> Fetch </button>
                    </div>
                  </div>
                  <div class="row personal-section">

                    <div class="col-md-8 text-left">

                      <h5> Personal Information </h5>

                    </div>

                    <div class="col-md-4 text-right">

                      <button class="btn btn-preview"> Edit </button>

                    </div>

                    <div class="col-md-12">

                      <div class="row">

                        <div class="col-md-2">
                          
                           @if($userInfo->facebook_id)
                          <img src="//graph.facebook.com/{{$userInfo->facebook_id}}/picture">
                          @else
                          <img src="{{asset('assets/img/nophoto.jpeg')}}">
                          @endif

                        </div>

                        <div class="col-md-10">

                          <h2>{{$userInfo->name}}</h2>

                          <p class="mt-4">India</p>

                        </div>

                      </div>

                    </div>

                  </div>



                  <div class="row personal-section">

                    <div class="col-md-8 text-left">

                      <h5> Professional Summary </h5>

                    </div>

                    <div class="col-md-4 text-right">

                      <button class="btn btn-preview"> Edit </button>

                    </div>

                    <div class="col-md-12">

                      <div class="row">

                        <div class="col-md-5">

                          <p>Years of Exp. : 1.5 years</p>

                          <p>Availability : Available</p>

                        </div>

                        <div class="col-md-6">

                          <p>Citizenships : </p>

                          <p>Languages : </p>

                        </div>

                      </div>

                    </div>

                  </div>



                  <div class="row personal-section">

                    <div class="col-md-8 text-left">

                      <h5> Skills & Expertise </h5>

                    </div>

                    <div class="col-md-4 text-right">

                      <button class="btn btn-preview"> Edit </button>

                    </div>

                    <div class="col-md-12">

                      <p>Skills : </p>

                      <p>Area of Expertise : </p>

                    </div>

                  </div>



                  <div class="row personal-section">

                    <div class="col-md-8 text-left">

                      <h5> Education </h5>

                    </div>

                    <div class="col-md-4 text-right">

                      <button class="btn btn-preview"> Add </button>

                    </div>

                  </div>



                  <div class="row personal-section">

                    <div class="col-md-8 text-left">

                      <h5> Employment </h5>

                    </div>

                    <div class="col-md-4 text-right">

                      <button class="btn btn-preview"> Add </button>

                    </div>

                  </div>



                  <div class="row personal-section">

                    <div class="col-md-8 text-left">

                      <h5> References </h5>

                    </div>

                    <div class="col-md-4 text-right">

                      <button class="btn btn-preview"> Add </button>

                    </div>

                  </div>



                  <div class="row personal-section">

                    <div class="col-md-8 text-left">

                      <h5> Contact Details </h5>

                    </div>

                    <div class="col-md-4 text-right">

                      <button class="btn btn-preview"> Add </button>

                    </div>

                  </div>

                  
                </div>



                <div class="col-md-4">

                  <div class="sidebar-area">

                    <h5> Contact Details </h5>

                    <a href="#"> <p> Professional Experience </p> </a>

                    <a href="#"> <p> Professional Summary </p> </a>

                    <a href="#"> <p> Skills & Expertise </p> </a>

                    <a href="#"> <p> Employment History </p> </a>

                    <a href="#"> <p> Education </p> </a>

                    <a href="#"> <p> CVs </p> </a>

                    <a href="#"> <p> Additional Information </p> </a>

                    <a href="#"> <p> References </p> </a>

                    <a href="#"> <p> Associations </p> </a>

                    <a href="#"> <p> Work Samples </p> </a>

                    <a href="#"> <p> Links to My Work </p> </a>

                    <a href="#"> <p> Contact Details </p> </a>

                  </div>

                </div>

              </div>

            </div>

         </main>



         <!-- Content Area Ends Here -->



         <!-- Footer Section Starts Here -->



         <footer id="footer" class="bg-primary py-5">



            <div class="container">



               <div class="row">



                  <div class="col-sm-12">



                     <ul



                        class="list-unstyled mb-5 text-uppercase d-flex flex-column flex-md-row justify-content-center text-center">



                        <li class="nav-item"><a class="nav-link text-white active" href="index.html">Home</a></li>



                        <li class="nav-item"><a class="nav-link text-white" href="#">About Us</a></li>



                        <li class="nav-item"><a class="nav-link text-white" href="#">Our Work</a></li>



                        <li class="nav-item"><a class="nav-link text-white" href="rfp.html">RFP</a></li>



                        <li class="nav-item"><a class="nav-link text-white" href="#">News</a></li>



                        <li class="nav-item"><a class="nav-link text-white" href="#">Events</a></li>



                        <li class="nav-item"><a class="nav-link text-white" href="jobs.html">Jobs</a></li>



                        <li class="nav-item"><a class="nav-link text-white" href="#">Contact</a></li>



                     </ul>



                  </div>



                  <div class="col-sm-12">



                     <p class="text-white text-center mb-5">Copyright &copy; 2019 CSR. All rights reserved.</p>



                  </div>



                  <div class="col-sm-12">



                     <ul class="list-unstyled d-flex justify-content-center mb-0 socialMedia">



                        <li class="mr-4 mx-sm-2 pt-1"><a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>



                        </li>



                        <li class="mr-4 mx-sm-2 pt-1"><a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>



                        </li>



                        <li class="mr-4 mx-sm-2 pt-1"><a href="#" class="text-white"><i class="fab fa-twitter"></i></a>



                        </li>



                     </ul>



                  </div>



               </div>



            </div>



         </footer>



         <!-- Footer Section Ends Here -->



      </div>



      <!-- Wrapper Ends Here -->



      <script src="{{asset('assets/js/jQuery.3.3.1.min.js')}}"></script>



      <script src="{{asset('assets/js/popper.min.js')}}"></script>



      <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>



      <script src="{{asset('assets/js/custom.js')}}"></script>



   </body>



</html>



