<!DOCTYPE html>

<html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit= no">
      <title>CSR : Home</title>
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

                        <!-- <div class="dropdown">

                           <button class="btn dropdown-toggle rounded-0 darkPrimary text-white" type="button"

                              id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                           Member Login

                           </button>

                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">

                              <a class="dropdown-item" href="{{ route('user.login') }}">Login</a>

                           </div>

                        </div> -->
                        <div class="dropdown">
                           <button class="btn dropdown-toggle rounded-0 darkPrimary text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Member Login
                           </button>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" data-toggle="modal" data-target="#myModal">Individual</a>
                              <a class="dropdown-item" data-toggle="modal" data-target="#myModal">NGO</a>
                              <a class="dropdown-item" data-toggle="modal" data-target="#myModal">Foundation</a>
                              <a class="dropdown-item" data-toggle="modal" data-target="#myModal">Corporate</a>
                           </div>n
                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <div class="headerSecondry">

               <nav class="navbar navbar-expand-xl w-100" id="navScroll">

                  <div class="container">

                     <a class="navbar-brand" href="{{ route('jobs') }}">

                     <img src="assets/img/logo.png" alt="" class="img-fluid">

                     </a>

                     <button class="navbar-toggler second-button" type="button" data-toggle="collapse"

                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"

                        aria-label="Toggle navigation">

                        <div class="animatedIcon"><span></span><span></span><span></span><span></span></div>

                     </button>

                     <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav ml-auto text-uppercase">

                           <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>

                           <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>

                           <li class="nav-item"><a class="nav-link" href="#">Our Work</a></li>

                           <li class="nav-item"><a class="nav-link" href="rfp.html">RFP</a></li>

                           <li class="nav-item"><a class="nav-link" href="#">News</a></li>

                           <li class="nav-item"><a class="nav-link" href="#">Events</a></li>

                           <li class="nav-item"><a class="nav-link  active" href="{{ route('jobs') }}">Jobs</a></li>

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

            <div class="jobFilter bg-light pt-4 pb-3 mb-5">

               <div class="container">

                  <div class="row">

                     <div class="col-sm-12">

                        <h5 class="text-dark font-weight-bold mb-3">2389 Available Jobs</h5>

                        <div class="d-flex align-items-center">

                           <h6 class="text-dark font-weight-bold mr-3 mb-3 filterLabel">Refine By:</h6>

                           <form action="" class="form-inline">

                              <div class="form-group mr-3 mb-3">

                                 <label for="salary" class="sr-only">Salary</label>

                                 <select name="salary" id="salary" class="custom-select custom-select-sm">

                                    <option selected>Salary</option>

                                    <option value="1">One</option>

                                    <option value="2">Two</option>

                                    <option value="3">Three</option>

                                 </select>

                              </div>

                              <div class="form-group mr-3 mb-3">

                                 <label for="location" class="sr-only">Location</label>

                                 <select name="location" id="location" class="custom-select custom-select-sm">

                                    <option selected>Location</option>

                                    <option value="1">One</option>

                                    <option value="2">Two</option>

                                    <option value="3">Three</option>

                                 </select>

                              </div>

                              <div class="form-group mr-3 mb-3">

                                 <label for="department" class="sr-only">Department</label>

                                 <select name="department" id="department" class="custom-select custom-select-sm">

                                    <option selected>Department</option>

                                    <option value="1">One</option>

                                    <option value="2">Two</option>

                                    <option value="3">Three</option>

                                 </select>

                              </div>

                              <div class="form-group mr-3 mb-3">

                                 <label for="industry" class="sr-only">Industry</label>

                                 <select name="industry" id="industry" class="custom-select custom-select-sm">

                                    <option selected>Industry</option>

                                    <option value="1">One</option>

                                    <option value="2">Two</option>

                                    <option value="3">Three</option>

                                 </select>

                              </div>

                              <div class="form-group mr-3 mb-3">

                                 <label for="experience" class="sr-only">Experience</label>

                                 <select name="experience" id="experience" class="custom-select custom-select-sm">

                                    <option selected>Experience</option>

                                    <option value="1">One</option>

                                    <option value="2">Two</option>

                                    <option value="3">Three</option>

                                 </select>

                              </div>

                              <div class="form-group mr-3 mb-3">

                                 <label for="company" class="sr-only">Company</label>

                                 <select name="company" id="company" class="custom-select custom-select-sm">

                                    <option selected>Company</option>

                                    <option value="1">One</option>

                                    <option value="2">Two</option>

                                    <option value="3">Three</option>

                                 </select>

                              </div>

                              <div class="form-group mr-3 mb-3">

                                 <label for="moreOptions" class="sr-only">More</label>

                                 <select name="moreOptions" id="moreOptions" class="custom-select custom-select-sm">

                                    <option selected>More</option>

                                    <option value="1">One</option>

                                    <option value="2">Two</option>

                                    <option value="3">Three</option>

                                 </select>

                              </div>

                           </form>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <!-- Sidebar And Featured Content Starts Here -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-8">

                        @foreach($content as $c)

                        <div class="border-bottom py-3 mb-3 jobDetail">
                            <header class="d-flex flex-column flex-sm-row">
                                <img src="assets/img/jobs-1.jpg" alt="" class="img-fluid border mr-sm-3 mb-3 align-self-start">

                                <div class="d-flex flex-column">

                                    <h6 class="text-dark font-weight-bold">{{ $c->job_title }}</h6>
                                    <h6 class="font-weight-normal mb-4">{{ $c->organisation }}</h6>
                                    <div class="d-flex">

                                        {{--<span class="location mb-3 mr-3">3 to 5 yrs</span>--}}

                                        {{--<span class="location mb-3 mr-3">Noida</span>--}}

                                    </div>
                                </div>
                                <div class="ml-sm-auto d-flex align-items-start moreDetails">

                                    <a href="#" class="text-primary text-center py-3 pr-3 border-right"><i

                                 class="fas fa-share-alt d-block"></i> Share</a>

                                    <span class="text-dark pl-3 py-3">

                                    <span class="d-block">Last date to apply</span>

                                    <strong>{{ \Carbon\Carbon::parse($c->closing_date)->format('d-M-Y') }}</strong>

                                    </span>

                                </div>
                            </header>
                            <div class="d-flex align-items-center pt-3 pt-sm-0">

                                <p class="mr-3">{{ $c->job_description }}</p>

                                <a href="#" class="btn btn-outline-primary px-4">Save</a>

                                </div>
                        </div>
                        @endforeach
                  
                  {{ $content->links() }}
                  
                  {{--
                        <nav aria-label="Page navigation example" class="d-flex justify-content-center mb-5">
                  
                        <ul class="pagination">

                           <li class="page-item">

                              <a class="page-link" href="#" aria-label="Previous">

                              <span aria-hidden="true">&laquo;</span>

                              </a>

                           </li>

                           <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>

                           <li class="page-item"><a class="page-link" href="#">2</a></li>

                           <li class="page-item"><a class="page-link" href="#">3</a></li>

                           <li class="page-item"><a class="page-link" href="#">4</a></li>

                           <li class="page-item"><a class="page-link" href="#">5</a></li>

                           <li class="page-item">

                              <a class="page-link" href="#" aria-label="Next">

                              <span aria-hidden="true">&raquo;</span>

                              </a>

                           </li>

                        </ul>

                     </nav>
                     --}}
                     
                    </div>

                    <div class="col-lg-4">

                     <div class="row">

                        <div class="col-sm-12">

                           <div class="bg-light text-center p-3 mb-5">

                              <h4 class="text-dark text-left mb-5 pt-4">We are in news</h4>

                              <ul class="list-unstyled news text-left">

                                 <li>

                                    <h5 class="text-primary mb-3">How do businesses take concrete action?</h5>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a

                                       href="#" class="text-primary">Know more</a></p>

                                    <time datetime="06/24/2019">June 24, 2019</time>

                                 </li>

                                 <li>

                                    <h5 class="text-primary mb-3">NGO gets child labourers back to school</h5>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a

                                       href="#" class="text-primary">Know more</a></p>

                                    <time datetime="06/24/2019">June 24, 2019</time>

                                 </li>

                                 <li>

                                    <h5 class="text-primary mb-3">How do businesses take concrete action?</h5>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a

                                       href="#" class="text-primary">Know more</a></p>

                                    <time datetime="06/24/2019">June 24, 2019</time>

                                 </li>

                                 <li>

                                    <h5 class="text-primary mb-3">NGO gets child labourers back to school</h5>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a

                                       href="#" class="text-primary">Know more</a></p>

                                    <time datetime="06/24/2019">June 24, 2019</time>

                                 </li>

                                 <li>

                                    <h5 class="text-primary mb-3">How do businesses take concrete action?</h5>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a

                                       href="#" class="text-primary">Know more</a></p>

                                    <time datetime="06/24/2019">June 24, 2019</time>

                                 </li>

                              </ul>

                              <a href="#" class="btn btn-outline-primary mb-4">View All</a>

                           </div>

                           <div class="position-relative mb-5">

                              <img src="assets/img/jobPost.jpg" alt="" class="img-fluid w-100">

                              <div

                                 class="position-absolute d-flex align-items-start justify-content-center flex-column h-100 jobPost p-3">

                                 <h5 class="text-dark font-weight-bold mb-4">Are you a employer?</h5>

                                 <a href="#" class="btn btn-outline-primary mb-4">Post job</a>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>
                </div>

            </div>

            <div class="container">

               <div class="row">

                  <div class="col-lg-8">





                  </div>



               </div>

            </div>

            <!-- Sidebar And Featured Content Ends Here -->

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

                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('jobs') }}">Jobs</a></li>

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
      <div class="modal" id="myModal">
         <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
               <div class="modal-header">
                  <h4 class="modal-title text-center">Join Us Today</h4>   
                  <button type="button" class="close" data-dismiss="modal">&times;</button>       
               </div>
                 
               <!-- Modal body -->
               <div class="modal-body">                  
                  <div class="social-login">
                     <h4>Sign Up with</h4>
                     <a href="{{url('auth/facebook')}}"><img src="{{asset('assets/img/fb.png')}}"></a>
                     <a href="{{url('auth/linkedin')}}"><img src="{{asset('assets/img/linkedin.png')}}"></a>
                     <a href="{{url('auth/google')}}"><img src="{{asset('assets/img/google.png')}}"></a>
                  </div>
                  <h2 class="login-option">OR</h2>
                  <form action=" {{route('user.register')}}"method="post"  class="register-form">
                     @csrf
                     <h2>Tell Us About Yourself</h2>
                     <div class="row">
                        <div class="col-md-6">
                           <input type="text" name="first_name" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                           <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-md-12">
                           <input type="eamil" name="email" class="form-control" placeholder="Eamil">
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-md-12">
                           <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-md-12 text-center">
                           <input type="submit" class="btn btn-primary btn-lg" value="Submit">
                        </div>
                     </div>

                  </form>
               </div>
                 
              
            </div>
         </div>
      </div>
      <script src="assets/js/jQuery.3.3.1.min.js"></script>

      <script src="assets/js/popper.min.js"></script>

      <script src="assets/js/bootstrap.min.js"></script>

      <script src="assets/js/custom.js"></script>

   </body>

</html>

