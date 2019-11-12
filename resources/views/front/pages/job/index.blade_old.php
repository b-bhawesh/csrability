@extends('front.template.master') 
@section('title', $title)
@section('content')

<main id="content">

<div class="jobFilter bg-light pt-4 pb-3 mb-5">

	<div class="container">

		<div class="row">

			<div class="col-sm-12">

				<h5 class="text-dark font-weight-bold mb-3">2389 Available Jobs</h5>

				<div class="d-flex align-items-center">

					<h6 class="text-dark font-weight-bold mr-3 mb-3 filterLabel">Refine
						By:</h6>

					<form action="" class="form-inline">

						<div class="form-group mr-3 mb-3">

							<label for="salary" class="sr-only">Salary</label> <select
								name="salary" id="salary" class="custom-select custom-select-sm">

								<option selected>Salary</option>

								<option value="1">One</option>

								<option value="2">Two</option>

								<option value="3">Three</option>

							</select>

						</div>

						<div class="form-group mr-3 mb-3">

							<label for="location" class="sr-only">Location</label> <select
								name="location" id="location"
								class="custom-select custom-select-sm">

								<option selected>Location</option>

								<option value="1">One</option>

								<option value="2">Two</option>

								<option value="3">Three</option>

							</select>

						</div>

						<div class="form-group mr-3 mb-3">

							<label for="department" class="sr-only">Department</label> <select
								name="department" id="department"
								class="custom-select custom-select-sm">

								<option selected>Department</option>

								<option value="1">One</option>

								<option value="2">Two</option>

								<option value="3">Three</option>

							</select>

						</div>

						<div class="form-group mr-3 mb-3">

							<label for="industry" class="sr-only">Industry</label> <select
								name="industry" id="industry"
								class="custom-select custom-select-sm">

								<option selected>Industry</option>

								<option value="1">One</option>

								<option value="2">Two</option>

								<option value="3">Three</option>

							</select>

						</div>

						<div class="form-group mr-3 mb-3">

							<label for="experience" class="sr-only">Experience</label> <select
								name="experience" id="experience"
								class="custom-select custom-select-sm">

								<option selected>Experience</option>

								<option value="1">One</option>

								<option value="2">Two</option>

								<option value="3">Three</option>

							</select>

						</div>

						<div class="form-group mr-3 mb-3">

							<label for="company" class="sr-only">Company</label> <select
								name="company" id="company"
								class="custom-select custom-select-sm">

								<option selected>Company</option>

								<option value="1">One</option>

								<option value="2">Two</option>

								<option value="3">Three</option>

							</select>

						</div>

						<div class="form-group mr-3 mb-3">

							<label for="moreOptions" class="sr-only">More</label> <select
								name="moreOptions" id="moreOptions"
								class="custom-select custom-select-sm">

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
					<img src="assets/img/jobs-1.jpg" alt=""
						class="img-fluid border mr-sm-3 mb-3 align-self-start">

					<div class="d-flex flex-column">

						<h6 class="text-dark font-weight-bold">{{ $c->job_title }}</h6>
						<h6 class="font-weight-normal mb-4">{{ $c->organisation }}</h6>
						<div class="d-flex">

							{{--<span class="location mb-3 mr-3">3 to 5 yrs</span>--}} {{--<span
								class="location mb-3 mr-3">Noida</span>--}}

						</div>
					</div>
					<div class="ml-sm-auto d-flex align-items-start moreDetails">

						<a href="#"
							class="text-primary text-center py-3 pr-3 border-right"><i
							class="fas fa-share-alt d-block"></i> Share</a> <span
							class="text-dark pl-3 py-3"> <span class="d-block">Last date to
								apply</span> <strong>{{
								\Carbon\Carbon::parse($c->closing_date)->format('d-M-Y') }}</strong>

						</span>

					</div>
				</header>
				<div class="d-flex align-items-center pt-3 pt-sm-0">

					<p class="mr-3">{{ $c->job_description }}</p>

					<a href="#" class="btn btn-outline-primary px-4">Save</a>

				</div>
			</div>
			@endforeach {{ $content->links() }} {{--
			<nav aria-label="Page navigation example"
				class="d-flex justify-content-center mb-5">

				<ul class="pagination">

					<li class="page-item"><a class="page-link" href="#"
						aria-label="Previous"> <span aria-hidden="true">&laquo;</span>

					</a></li>

					<li class="page-item active" aria-current="page"><a
						class="page-link" href="#">1</a></li>

					<li class="page-item"><a class="page-link" href="#">2</a></li>

					<li class="page-item"><a class="page-link" href="#">3</a></li>

					<li class="page-item"><a class="page-link" href="#">4</a></li>

					<li class="page-item"><a class="page-link" href="#">5</a></li>

					<li class="page-item"><a class="page-link" href="#"
						aria-label="Next"> <span aria-hidden="true">&raquo;</span>

					</a></li>

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

								<h5 class="text-primary mb-3">How do businesses take concrete
									action?</h5>

								<p>
									Lorem Ipsum is simply dummy text of the printing and
									typesetting industry... <a href="#" class="text-primary">Know
										more</a>
								</p> <time datetime="06/24/2019">June 24, 2019</time>

							</li>

							<li>

								<h5 class="text-primary mb-3">NGO gets child labourers back to
									school</h5>

								<p>
									Lorem Ipsum is simply dummy text of the printing and
									typesetting industry... <a href="#" class="text-primary">Know
										more</a>
								</p> <time datetime="06/24/2019">June 24, 2019</time>

							</li>

							<li>

								<h5 class="text-primary mb-3">How do businesses take concrete
									action?</h5>

								<p>
									Lorem Ipsum is simply dummy text of the printing and
									typesetting industry... <a href="#" class="text-primary">Know
										more</a>
								</p> <time datetime="06/24/2019">June 24, 2019</time>

							</li>

							<li>

								<h5 class="text-primary mb-3">NGO gets child labourers back to
									school</h5>

								<p>
									Lorem Ipsum is simply dummy text of the printing and
									typesetting industry... <a href="#" class="text-primary">Know
										more</a>
								</p> <time datetime="06/24/2019">June 24, 2019</time>

							</li>

							<li>

								<h5 class="text-primary mb-3">How do businesses take concrete
									action?</h5>

								<p>
									Lorem Ipsum is simply dummy text of the printing and
									typesetting industry... <a href="#" class="text-primary">Know
										more</a>
								</p> <time datetime="06/24/2019">June 24, 2019</time>

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

		<div class="col-lg-8"></div>



	</div>

</div>

<!-- Sidebar And Featured Content Ends Here --> </main>

@endsection
