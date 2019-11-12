<header id="header">

	<div class="headerPrimary bg-primary">

		<div class="container">



			<div class="row">



				<div class="col-sm-6">



					<p class="text-white py-2 mb-sm-0 text-xs-center">Corporate-Social-Responsibility</p>



				</div>



				<div

					class="col-sm-6 d-flex justify-content-between justify-content-sm-end">



					<ul

						class="list-unstyled mb-0 d-flex justify-content-sm-end socialMedia">



						<li class="mr-4 mx-sm-4 pt-1"><a href="#" class="text-white"><i

								class="fab fa-facebook-f"></i></a></li>



						<li class="mr-4 mx-sm-4 pt-1"><a href="#" class="text-white"><i

								class="fab fa-linkedin-in"></i></a></li>



						<li class="mr-4 mx-sm-4 pt-1"><a href="#" class="text-white"><i

								class="fab fa-twitter"></i></a></li>



					</ul>



					<div class="dropdown">

						<button

							class="btn dropdown-toggle rounded-0 darkPrimary text-white"

							type="button" id="dropdownMenuButton" data-toggle="dropdown"

							aria-haspopup="true" aria-expanded="false">Member Login</button>

						<div class="dropdown-menu dropdown-menu-right"

							aria-labelledby="dropdownMenuButton">

							<a class="dropdown-item" data-toggle="modal"

								data-target="#myModal">Individual</a> 
							<a class="dropdown-item"

								data-toggle="modal" data-target="#myModal">Institution</a>

						</div>

					</div>



				</div>



			</div>



		</div>



	</div>



	<div class="headerSecondry">



		<nav class="navbar navbar-expand-xl w-100" id="navScroll">



			<div class="container">



				<a class="navbar-brand" href="{{ route('home') }}"> <img

					src="assets/img/logo.png" alt="" class="img-fluid">



				</a>



				<button class="navbar-toggler second-button" type="button"

					data-toggle="collapse" data-target="#navbarSupportedContent"

					aria-controls="navbarSupportedContent" aria-expanded="false"

					aria-label="Toggle navigation">



					<div class="animatedIcon">

						<span></span><span></span><span></span><span></span>

					</div>



				</button>



				<div class="collapse navbar-collapse" id="navbarSupportedContent">



					<ul class="navbar-nav ml-auto text-uppercase">



						<li class="nav-item"><a class="nav-link active"

							href="{{ route('home') }}">Home</a></li>



						<li class="nav-item"><a class="nav-link" href="#">About Us</a></li>



						<li class="nav-item"><a class="nav-link" href="#">Our Work</a></li>



						<li class="nav-item"><a class="nav-link" href="rfp.html">RFP</a></li>



						<li class="nav-item"><a class="nav-link" href="#">News</a></li>



						<li class="nav-item"><a class="nav-link" href="#">Events</a></li>



						<li class="nav-item"><a class="nav-link "

							href="{{ route('jobs') }}">Jobs</a></li>



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

					<a href="{{url('auth/facebook')}}"><img

						src="{{asset('assets/img/fb.png')}}"></a> <a

						href="{{url('auth/linkedin')}}"><img

						src="{{asset('assets/img/linkedin.png')}}"></a> <a

						href="{{url('auth/google')}}"><img

						src="{{asset('assets/img/google.png')}}"></a>

				</div>

				<h2 class="login-option">OR</h2>

				<form action = "{{route('user.register')}}" method="post"  class="register-form">

							{{ csrf_field() }}
						<h2>Tell Us About Yourself</h2>
						<div class="row">
						<div class="col-md-6">
							<input type="text" name="first_name" class="form-control" placeholder="First Name" required>
						</div>
						<div class="col-md-6">
							<input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
						</div>
						</div>

						<div class="row">
						<div class="col-md-12">
							<input type="eamil" name="email" class="form-control" placeholder="Eamil" required>
						</div>
						</div>

						<div class="row">
						<div class="col-md-12">
							<input type="password" name="password" class="form-control" placeholder="Password" required>
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