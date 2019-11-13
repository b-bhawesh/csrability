 

<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>



<!-- Content Area Starts Here -->

<main id="content"> <!-- Landing Section Content Starts Here -->

<div class="landingSection mb-5">

	<div class="container">

		<div class="row">

			<div class="col-lg-6">

				<div class="bd-example mb-3">

					<div id="carouselExampleCaptions" class="carousel slide"

						data-ride="carousel">

						<ol class="carousel-indicators">

							<li data-target="#carouselExampleCaptions" data-slide-to="0"

								class="active"></li>

							<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>

							<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

						</ol>

						<div class="carousel-inner">

							<div class="carousel-item active">

								<img src="assets/img/slider-1.jpg" class="d-block w-100" alt="">

								<div class="carousel-caption d-none d-md-block eventDetails">

									<h6

										class="bg-light text-dark mb-3 p-1 d-inline-block text-uppercase">Corporate</h6>

									<h5 class="mb-3">

										<a href="#" class="text-white font-bold">Global Financing

											Facility prepares for leadership shake-up</a>

									</h5>

									<time date-time="07/29/2019" class="text-white font-italic">4

										hours ago</time>

								</div>

							</div>

							<div class="carousel-item">

								<img src="assets/img/slider-1.jpg" class="d-block w-100" alt="">

								<div class="carousel-caption d-none d-md-block eventDetails">

									<h6

										class="bg-light text-dark mb-3 p-1 d-inline-block text-uppercase">Corporate</h6>

									<h5 class="mb-3">

										<a href="#" class="text-white font-bold">Global Financing

											Facility prepares for leadership shake-up</a>

									</h5>

									<time date-time="07/29/2019" class="text-white font-italic">4

										hours ago</time>

								</div>

							</div>

							<div class="carousel-item">

								<img src="assets/img/slider-1.jpg" class="d-block w-100" alt="">

								<div class="carousel-caption d-none d-md-block eventDetails">

									<h6

										class="bg-light text-dark mb-3 p-1 d-inline-block text-uppercase">Corporate</h6>

									<h5 class="mb-3">

										<a href="#" class="text-white font-bold">Global Financing

											Facility prepares for leadership shake-up</a>

									</h5>

									<time date-time="07/29/2019" class="text-white font-italic">4

										hours ago</time>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="col-lg-6">

				<div class="row">

					<div class="col-sm-12">

						<div class="position-relative mb-3 h-100">

							<img src="assets/img/landing-section-1.jpg" alt=""

								class="img-fluid w-100">

							<div class="position-absolute eventDetails">

								<h6

									class="bg-light text-dark mb-3 p-1 d-inline-block text-uppercase">Education</h6>

								<h5 class="mb-3">

									<a href="#" class="text-white font-bold">GIS for SDGs: 'See

										things that were impossible to see,' Esri founder says</a>

								</h5>

								<time date-time="07/29/2019" class="text-white font-italic">8

									hours ago</time>

							</div>

						</div>

					</div>

				</div>

				<div class="row">

					<div class="col-sm-6">

						<div class="position-relative mb-3 h-100">

							<img src="assets/img/landing-section-2.jpg" alt=""

								class="img-fluid w-100">

							<div class="position-absolute eventDetails">

								<h6

									class="bg-light text-dark mb-3 p-1 d-inline-block text-uppercase">Corporate</h6>

								<h5 class="mb-3">

									<a href="#" class="text-white font-bold">WHO leaders on

										epidemic preparedness...</a>

								</h5>

								<time date-time="07/29/2019" class="text-white font-italic">12

									hours ago</time>

							</div>

						</div>

					</div>

					<div class="col-sm-6">

						<div class="position-relative mb-3 h-100">

							<img src="assets/img/landing-section-3.jpg" alt=""

								class="img-fluid w-100">

							<div class="position-absolute eventDetails">

								<h6

									class="bg-light text-dark mb-3 p-1 d-inline-block text-uppercase">Education</h6>

								<h5 class="mb-3">

									<a href="#" class="text-white font-bold">NGO gets child

										labourers back to school</a>

								</h5>

								<time date-time="07/29/2019" class="text-white font-italic">2

									hours ago</time>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<!-- Landing Section Content Ends Here --> <!-- About CSR Section Starts Here -->

<div class="aboutInro mb-5">

	<div class="container mb-5">

		<div class="row">

			<div class="col-md-6 mb-3">

				<h3 class="text-dark mb-5">What do you really know about CSR?</h3>

				<p class="mb-5">

					Lorem Ipsum is simply dummy text of the printing and typesetting

					industry. Lorem Ipsum has been the industry's standard dummy text

					ever since the 1500s, when an unknown printer took a galley of type

					and scrambled it to make a type specimen book. It has survived not

					only five centuries, but also the leap into electronic typesetting,

					remaining essentially unchanged. It was popularised in the 1960s

					with the release of Letraset sheets containing Lorem Ipsum

					passages... <a href="#" class="text-primary">Know more</a>

				</p>

				<a href="#" class="btn btn-primary">Join Us</a>

			</div>

			<div class="col-md-6 mb-3">

				<?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				   <video width="100%" height="385px" controls>
					  <source src="../storage/app/public/video/<?php echo e($c->video); ?>" type="video/mp4">
					</video>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>

		</div>

	</div>

</div>

<!-- About CSR Section Ends Here --> <!-- Sidebar And Featured Content Starts Here -->

<div class="container">

	<div class="row">

		<div class="col-lg-8">

			<div class="row">

				<div class="col-sm-12">

					<div class="d-flex mb-3">

						<h4 class="text-dark">In Trend</h4>

						<a href="#" class="btn btn-outline-primary ml-auto">View All</a>

					</div>

				</div>

				<div class="col-sm-6 mb-2">

					<img src="assets/img/trend-1.jpg" alt=""

						class="img-fluid w-100 mb-3">

					<h5 class="text-primary mb-3">CSR- A mission to help</h5>

					<p>

						Lorem Ipsum is simply dummy text of the printing and typesetting

						industry. Lorem Ipsum has been the industry's standard dummy... <a

							href="#" class="text-primary">Know more</a>

					</p>

				</div>

				<div class="col-sm-6 mb-2">

					<img src="assets/img/trend-2.jpg" alt=""

						class="img-fluid w-100 mb-3">

					<h5 class="text-primary mb-3">A matter not just of ethics</h5>

					<p>

						Lorem Ipsum is simply dummy text of the printing and typesetting

						industry. Lorem Ipsum has been the industry's standard dummy... <a

							href="#" class="text-primary">Know more</a>

					</p>

				</div>

				<div class="col-sm-6 mb-2">

					<img src="assets/img/trend-3.jpg" alt=""

						class="img-fluid w-100 mb-3">

					<h5 class="text-primary mb-3">CSR- A mission to help</h5>

					<p>

						Lorem Ipsum is simply dummy text of the printing and typesetting

						industry. Lorem Ipsum has been the industry's standard dummy... <a

							href="#" class="text-primary">Know more</a>

					</p>

				</div>

				<div class="col-sm-6 mb-2">

					<img src="assets/img/trend-4.jpg" alt=""

						class="img-fluid w-100 mb-3">

					<h5 class="text-primary mb-3">How do businesses take concrete

						action?</h5>

					<p>

						Lorem Ipsum is simply dummy text of the printing and typesetting

						industry. Lorem Ipsum has been the industry's standard dummy... <a

							href="#" class="text-primary">Know more</a>

					</p>

				</div>

			</div>

			<div class="row">

				<div class="col-sm-12">

					<div class="d-flex mb-3">

						<h4 class="text-dark">Events at CSR</h4>

						<a href="#" class="btn btn-outline-primary ml-auto">View All</a>

					</div>

				</div>

				<div class="col-sm-12">

					<div class="csrEvents mb-5">

						<div class="row">

							<div class="col-md-6 d-flex align-items-end">

								<h4 class="text-white m-3">How do businesses take concrete

									action?</h4>

							</div>

							<div class="col-md-6">

								<div class="bg-white p-3 m-3">

									<ul class="list-unstyled news">

										<li>

											<h6 class="text-primary mb-3">What do you really know about

												CSR?</h6>

											<p>

												Lorem Ipsum is simply dummy text of the printing and

												typesetting ... <a href="#" class="text-primary">Know more</a>

											</p>

										</li>

										<li>

											<h6 class="text-primary mb-3">What do you really know about

												CSR?</h6>

											<p>

												Lorem Ipsum is simply dummy text of the printing and

												typesetting ... <a href="#" class="text-primary">Know more</a>

											</p>

										</li>

										<li>

											<h6 class="text-primary mb-3">What do you really know about

												CSR?</h6>

											<p>

												Lorem Ipsum is simply dummy text of the printing and

												typesetting ... <a href="#" class="text-primary">Know more</a>

											</p>

										</li>

									</ul>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-sm-12">

					<div class="d-flex mb-3">

						<h4 class="text-dark">RFP</h4>

						<a href="rfp.html" class="btn btn-outline-primary ml-auto">View

							All</a>

					</div>

				</div>

				<div class="col-sm-12">

					<div class="csrEvents mb-5">

						<div class="bd-example-2 mb-3">

							<div id="carouselExampleControls" class="carousel slide"

								data-ride="carousel">

								<div class="carousel-inner">

									<div class="carousel-item active">

										<div class="row">

											<div class="col-md-5 d-flex">

												<div class="bg-white m-3 flex-grow-1">

													<img src="assets/img/community-slide-1.jpg" alt=""

														class="img-fluid w-100 mb-3">

													<div class="p-3">

														<h6 class="text-primary mb-3">Coprorate Hub</h6>

														<p>

															Lorem Ipsum is simply dummy text of the printing and

															typesetting ... <a href="#" class="text-primary">Know

																more</a>

														</p>

													</div>

												</div>

											</div>

											<div class="col-md-7 pl-md-0 d-flex align-items-center">

												<div class="text-white px-3 pt-3 pb-5 mb-5 mb-md-0 p-md-0">Lorem

													ipsum dolor sit amet, consectetur adipiscing elit, sed do

													eiusmod tempor incididunt ut labore et dolore magna aliqua.

													Quis ipsum suspendisse ultrices gravida. Risus commodo

													viverra maecenas accumsan lacus vel facilisis.</div>

											</div>

										</div>

									</div>

									<div class="carousel-item">

										<div class="row">

											<div class="col-md-5 d-flex">

												<div class="bg-white m-3 flex-grow-1">

													<img src="assets/img/community-slide-1.jpg" alt=""

														class="img-fluid w-100 mb-3">

													<div class="p-3">

														<h6 class="text-primary mb-3">Coprorate Hub</h6>

														<p>

															Lorem Ipsum is simply dummy text of the printing and

															typesetting ... <a href="#" class="text-primary">Know

																more</a>

														</p>

													</div>

												</div>

											</div>

											<div class="col-md-7 pl-md-0 d-flex align-items-center">

												<div class="text-white px-3 pt-3 pb-5 mb-5 mb-md-0  p-md-0">Lorem

													ipsum dolor sit amet, consectetur adipiscing elit, sed do

													eiusmod tempor incididunt ut labore et dolore magna aliqua.

													Quis ipsum suspendisse ultrices gravida. Risus commodo

													viverra maecenas accumsan lacus vel facilisis.</div>

											</div>

										</div>

									</div>

									<div class="carousel-item">

										<div class="row">

											<div class="col-md-5 d-flex">

												<div class="bg-white m-3 flex-grow-1">

													<img src="assets/img/community-slide-1.jpg" alt=""

														class="img-fluid w-100 mb-3">

													<div class="p-3">

														<h6 class="text-primary mb-3">Coprorate Hub</h6>

														<p>

															Lorem Ipsum is simply dummy text of the printing and

															typesetting ... <a href="#" class="text-primary">Know

																more</a>

														</p>

													</div>

												</div>

											</div>

											<div class="col-md-7 pl-md-0 d-flex align-items-center">

												<div class="text-white px-3 pt-3 pb-5 mb-5 mb-md-0 p-md-0">Lorem

													ipsum dolor sit amet, consectetur adipiscing elit, sed do

													eiusmod tempor incididunt ut labore et dolore magna aliqua.

													Quis ipsum suspendisse ultrices gravida. Risus commodo

													viverra maecenas accumsan lacus vel facilisis.</div>

											</div>

										</div>

									</div>

									<a class="carousel-control-prev"

										href="#carouselExampleControls" role="button"

										data-slide="prev"> <span aria-hidden="true"><i

											class="fas fa-chevron-left"></i></span> <span class="sr-only">Previous</span>

									</a> <a class="carousel-control-next"

										href="#carouselExampleControls" role="button"

										data-slide="next"> <span aria-hidden="true"><i

											class="fas fa-chevron-right"></i></span> <span

										class="sr-only">Next</span>

									</a>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="col-lg-4">

			<div class="row">

				<div class="col-sm-6 col-lg-12 mb-5">

					<h4 class="text-dark mb-4">Featured Jobs</h4>

					<div class="bg-light p-3 text-center">

						<ul class="list-unstyled jobList text-left">

							<li><img src="assets/img/jobs-1.jpg" alt=""

								class="img-fluid mr-3">

								<div>

									<h5 class="text-dark">Assistant Manger- Finance</h5>

									<h6 class="text-dark">Sapient, Gurgaon</h6>

								</div></li>

							<li><img src="assets/img/jobs-2.jpg" alt=""

								class="img-fluid mr-3">

								<div>

									<h5 class="text-dark">Account Manager</h5>

									<h6 class="text-dark">HDFC, Gurgaon</h6>

								</div></li>

							<li><img src="assets/img/jobs-1.jpg" alt=""

								class="img-fluid mr-3">

								<div>

									<h5 class="text-dark">Citizenship Manager</h5>

									<h6 class="text-dark">Sapient, Gurgaon</h6>

								</div></li>

							<li><img src="assets/img/jobs-1.jpg" alt=""

								class="img-fluid mr-3">

								<div>

									<h5 class="text-dark">Business Development Manger</h5>

									<h6 class="text-dark">Sapient, Gurgaon</h6>

								</div></li>

							<li><img src="assets/img/jobs-3.jpg" alt=""

								class="img-fluid mr-3">

								<div>

									<h5 class="text-dark">Program Officer</h5>

									<h6 class="text-dark">Citibank, Noida</h6>

								</div></li>

						</ul>

						<a href="#" class="btn btn-outline-primary mb-4">View All</a>

					</div>

				</div>

				<div class="col-sm-6 col-lg-12 mb-5">

					<div class="position-relative mb-5">



						<img src="assets/img/jobPost.jpg" alt="" class="img-fluid w-100">



						<div

							class="position-absolute d-flex align-items-start justify-content-center flex-column h-100 jobPost p-3">



							<h5 class="text-dark font-weight-bold mb-4">Are you a employer?</h5>



							<a href="#" class="btn btn-outline-primary mb-4">Post job</a>



						</div>



					</div>



					<div class="position-relative mb-5">



						<img src="assets/img/jobPost.jpg" alt="" class="img-fluid w-100">



						<div

							class="position-absolute d-flex align-items-start justify-content-center flex-column h-100 jobPost p-3">



							<h5 class="text-dark font-weight-bold mb-4">Are you a employer?</h5>



							<a href="#" class="btn btn-outline-primary mb-4">Post job</a>



						</div>



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

<!-- Sidebar And Featured Content Ends Here --> <!-- Impact Of CSR Starts Here -->

<div class="container py-5">

	<div class="row">

		<div class="col-xl-8 offset-xl-2 text-center ">

			<h3 class="text-dark mb-5">Impact Of CSR</h3>

			<div class="row mb-5">

				<div

					class="col-sm-6 col-md-3 d-flex flex-column align-items-center mb-3">

					<img src="assets/img/csr-impact-1.png" alt=""

						class="img-fluid mb-3">

					<h3 class="text-dark text-center">1500+</h3>

					<h6>CSR Members</h6>

				</div>

				<div

					class="col-sm-6 col-md-3 d-flex flex-column align-items-center mb-3">

					<img src="assets/img/csr-impact-2.png" alt=""

						class="img-fluid mb-3">

					<h3 class="text-dark text-center">350+</h3>

					<h6>CSR Events</h6>

				</div>

				<div

					class="col-sm-6 col-md-3 d-flex flex-column align-items-center mb-3">

					<img src="assets/img/csr-impact-3.png" alt=""

						class="img-fluid mb-3">

					<h3 class="text-dark text-center">3500+</h3>

					<h6>Jobs Available</h6>

				</div>

				<div

					class="col-sm-6 col-md-3 d-flex flex-column align-items-center mb-3">

					<img src="assets/img/csr-impact-4.png" alt=""

						class="img-fluid mb-3">

					<h3 class="text-dark text-center">300+</h3>

					<h6>Awards Won</h6>

				</div>

			</div>

			<a href="#" class="btn btn-primary">Join Us</a>

		</div>

	</div>

</div>

<!-- Impact Of CSR Ends Here --> </main>

<!-- Content Area Ends Here -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unilinki/public_html/csrability/resources/views/front/pages/home/index.blade.php ENDPATH**/ ?>