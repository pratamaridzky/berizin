@extends('master')
@extends('menus')
 
@section('content')
 
	<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-modern dots-modern-lg dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['700px','700px','700px','550px','500px']" style="height: 700px;">
		<div class="owl-stage-outer">
			<div class="owl-stage">

				<!-- Carousel Slide 1 -->
				<div class="owl-item position-relative" style="background-image: url(img/demos/law-firm/slides/slide-1s-bg.jpg); background-size: cover; background-position: center;">
					<div class="container h-100">
						<div class="row h-100">
							<div class="col-lg-6">
								<div class="d-flex flex-column justify-content-center h-100">
									<p class="custom-font-slider-2 text-dark" data-plugin-animated-letters data-plugin-options="{'startDelay': 750, 'minWindowWidth': 0, 'animationSpeed': 30}">SERVING BANDUNG / INDONESIA</p>
									<h2 class="custom-font-slider-1 mb-0 font-weight-bold appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">BERIZIN</h2>
									<div class="divider divider-primary divider-small text-start mt-2 mb-4 mx-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
										<hr class="my-0">
									</div>
									<p class="text-3-5 line-height-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim.</p>

									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
										<div class="d-flex align-items-center mt-2">
											<a href="#" class="btn btn-dark btn-modern text-uppercase font-weight-bold text-2 py-3 btn-px-4">Learn More</a>
											<a href="#" class="btn btn-primary btn-modern text-uppercase font-weight-bold text-2 py-3 btn-px-4 ms-4">Request Consultation</a>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="position-absolute left-100pct bottom-0 transform3dx-n50 w-75 ms-5">
							<img src="img/demos/law-firm/slides/IMG_0114.JPG" class="img-fluid mw-100 w-auto appear-animation" alt="" data-appear-animation="fadeIn" data-appear-animation-delay="100" />
						</div>
					</div>
				</div>

				<!-- Carousel Slide 2 -->
				<div class="owl-item position-relative" style="background-image: url(img/demos/law-firm/slides/slide-2-bg.jpg); background-size: cover; background-position: center;">
					<div class="container h-100">
						<div class="row h-100">
							<div class="col text-center">
								<div class="d-flex flex-column justify-content-center h-100">
									<p class="custom-font-slider-2 text-light" data-plugin-animated-letters data-plugin-options="{'startDelay': 750, 'minWindowWidth': 0, 'animationSpeed': 30}">BERIZIN IN LOS ANGELES</p>
									<h2 class="custom-font-slider-1 mb-0 font-weight-bold text-light appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">BERIZIN</h2>
									<div class="divider divider-primary divider-small mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
										<hr class="my-0 me-auto">
									</div>
									<p class="text-3-5 line-height-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Proin bibendum ultricies nunc, eu interdum enim.</p>

									<div class="text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
										<a href="#" class="btn btn-light text-dark btn-modern text-uppercase font-weight-bold text-2 py-3 btn-px-4">Learn More</a>
										<a href="#" class="btn btn-primary btn-modern text-uppercase font-weight-bold text-2 py-3 btn-px-4 ms-4">Request Consultation</a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="owl-nav">
			<button type="button" role="presentation" class="owl-prev"></button>
			<button type="button" role="presentation" class="owl-next"></button>
		</div>
		<div class="owl-dots mb-5">
			<button role="button" class="owl-dot active"><span></span></button>
			<button role="button" class="owl-dot"><span></span></button>
		</div>
	</div>

	<section class="section section-default section-no-border my-0">
		<div class="container pt-3 pb-4">
			<div class="row">
				<div class="col-lg-8 mb-4 mb-lg-0">
					<h2 class="mb-0 font-weight-bold appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="100">Who We Are</h2>
					<div class="divider divider-primary divider-small mt-2 mb-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
						<hr class="my-0 me-auto">
					</div>
					<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
						<p class="font-weight-medium text-4">Founded in 2001 by John Doe, gravida nibh vel. Aenean sollicitudin, lorem quis, <span class="highlight highlight-primary highlight-bg-opacity highlight-animated px-0" data-appear-animation="highlight-animated-start" data-appear-animation-delay="200" data-plugin-options="{'flagClassOnly': true}">nisi elit consequat ipsum</span> nec sagittis sem nibh id elit. </p>
						<p class="text-3-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium.</p>

						<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-about-us.html">Learn More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
					</div>
				</div>
				<div class="col-lg-4">
					<h4 class="mb-0 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="400">Our Commitment</h4>
					<div class="divider divider-primary divider-small mt-2 mb-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
						<hr class="my-0 me-auto">
					</div>
					<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
						<p class="mt-4 mb-0">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
						<p class="mt-4 mb-0">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section bg-transparent section-no-border my-0">
		<div class="container pt-3 pb-4">
			<div class="row">
				<div class="col text-center">
					<div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
						<h2 class="mb-0 font-weight-bold">Practice Areas</h2>
						<div class="divider divider-primary divider-small mt-2 mb-4 text-center">
							<hr class="my-0 mx-auto">
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
						<div class="feature-box-icon mt-3">
							<img width="50" height="50" src="img/demos/law-firm/icons/criminal-law.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
						</div>
						<div class="feature-box-info ms-3">
							<h4 class="mb-2">Criminal Law</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
							<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
						<div class="feature-box-icon mt-3">
							<img width="48" height="48" src="img/demos/law-firm/icons/business-law.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
						</div>
						<div class="feature-box-info ms-3">
							<h4 class="mb-2">Business Law</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
							<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
						<div class="feature-box-icon mt-3">
							<img width="48" height="48" src="img/demos/law-firm/icons/health-law.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
						</div>
						<div class="feature-box-info ms-3">
							<h4 class="mb-2">Health Law</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
							<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-lg-3">
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 mb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
						<div class="feature-box-icon mt-3">
							<img width="48" height="48" src="img/demos/law-firm/icons/divorce-law.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
						</div>
						<div class="feature-box-info ms-3">
							<h4 class="mb-2">Divorce Law</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
							<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 mb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
						<div class="feature-box-icon mt-3">
							<img width="48" height="48" src="img/demos/law-firm/icons/capital-law.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
						</div>
						<div class="feature-box-info ms-3">
							<h4 class="mb-2">Capital Law</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
							<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 mb-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
						<div class="feature-box-icon mt-3">
							<img width="48" height="48" src="img/demos/law-firm/icons/accident-law.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark d-inline-block ms-2 p-relative bottom-1'}" />
						</div>
						<div class="feature-box-info ms-3">
							<h4 class="mb-2">Accident Law</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
							<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-practice-areas-detail.html">Learn More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 bg-primary order-2 order-lg-1 p-0" style="background: url(img/demos/law-firm/backgrounds/background-1.jpg); background-size: cover; background-position: center;">
				<div class="h-100 m-0">
					<div class="row m-0">
						<div class="col-half-section col-half-section-right text-color-light py-5 ms-auto">
							<div class="p-3">
								<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
									<h2 class="mb-0 font-weight-bold text-light">Testimonials</h2>
									<div class="divider divider-dark divider-small mt-2 mb-4">
										<hr class="my-0 me-auto">
									</div>

									<div class="owl-carousel owl-theme dots-align-left dots-light dots-modern custom-dots-modern-1 dots-modern-lg pt-3" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': true, 'autoHeight': true}">
										<div>
											<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-light testimonial-remove-right-quote mb-0">
												<blockquote class="opacity-7 pb-3">
													<p class="text-start text-color-light custom-font-secondary text-3 line-height-10 fst-italic pb-0 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non cras a elit sit amet leo acun volutpat.</p>
												</blockquote>
												<div class="testimonial-author text-start ps-5 ms-3">
													<strong class="text-color-light">Anne Doe Smith</strong>
													<p class="text-color-light mb-0 text-start">Porto Client</p>
												</div>
											</div>
										</div>
										<div>
											<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-light testimonial-remove-right-quote mb-0">
												<blockquote class="opacity-7 pb-3">
													<p class="text-start text-color-light custom-font-secondary text-3 line-height-10 fst-italic pb-0 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non cras a elit sit amet leo acun volutpat.</p>
												</blockquote>
												<div class="testimonial-author text-start ps-5 ms-3">
													<strong class="text-color-light">Anne Doe Smith</strong>
													<p class="text-color-light mb-0 text-start">Porto Client</p>
												</div>
											</div>
										</div>
										<div>
											<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-light testimonial-remove-right-quote mb-0">
												<blockquote class="opacity-7 pb-3">
													<p class="text-start text-color-light custom-font-secondary text-3 line-height-10 fst-italic pb-0 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non cras a elit sit amet leo acun volutpat.</p>
												</blockquote>
												<div class="testimonial-author text-start ps-5 ms-3">
													<strong class="text-color-light">Anne Doe Smith</strong>
													<p class="text-color-light mb-0 text-start">Porto Client</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 order-1 order-lg-2 p-0 bg-color-quaternary">
				<section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="img/demos/law-firm/backgrounds/background-2.jpg" style="min-height: 450px;">
					<div class="h-100 m-0">
						<div class="row m-0">
							<div class="col-half-section col-half-section-left">
								<div class="p-3 p-relative zindex-1">
									<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
										<h2 class="mb-0 font-weight-bold text-dark">Our History</h2>
										<div class="divider divider-primary divider-small mt-2 mb-4">
											<hr class="my-0 me-auto">
										</div>

										<div class="owl-carousel owl-theme dots-align-left dots-dark dots-modern dots-modern-lg pt-3" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': true, 'autoHeight': true}">
											<div>
												<p class="text-dark font-weight-bold text-4 mb-2 pb-2">- 1985, Opening</p>
												<p>Duis sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi acc umsan ipsum velit.  Duis sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi.</p>
												<p>Sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi.</p>
											</div>
											<div>
												<p class="text-dark font-weight-bold text-4 mb-2 pb-2">- 1988, Law Firm Fact</p>
												<p>Odio sit amet nibh vulputate cur sus a sit amet mauris morbi acc umsan ipsum velit.  Duis sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi.</p>
												<p>Sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi.</p>
											</div>
											<div>
												<p class="text-dark font-weight-bold text-4 mb-2 pb-2">- 2001, Law Firm Fact</p>
												<p>Sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi acc umsan ipsum velit.  Duis sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi.</p>
												<p>Sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi.</p>
											</div>
											<div>
												<p class="text-dark font-weight-bold text-4 mb-2 pb-2">- 2006, Law Firm Fact</p>
												<p>Duis sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi acc umsan ipsum velit.  Duis sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi.</p>
												<p>Sed odio sit amet nibh vulputate cur sus a sit amet mauris morbi.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</section>
			</div>
		</div>
	</div>

	<section class="section bg-transparent section-no-border my-0">
		<div class="container pt-3 pb-4">
			<div class="row">
				<div class="col text-center">
					<div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
						<h2 class="mb-0 font-weight-bold">Attorneys</h2>
						<div class="divider divider-primary divider-small mt-2 mb-4 text-center">
							<hr class="my-0 mx-auto">
						</div>
					</div>

					<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">

						<div class="owl-carousel owl-theme dots-modern dots-modern-lg pt-3 pb-0 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 3}, '1199': {'items': 4}}, 'loop': false, 'autoHeight': true, 'margin': 20}">
							<div>
								<div class="row">
									<div class="col">
										<a href="demo-law-firm-attorneys-detail.html">
											<img src="img/demos/law-firm/team/team-6.jpg" class="img-fluid" alt="Image of the team member" />
										</a>
									</div>
								</div>
								<div class="row pb-3">
									<div class="col pt-3">
										<p class="text-color-dark text-4-5 font-weight-bold mb-1">John Doe</p>
										<p class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 text-uppercase mb-3">CEO & FOUNDER</p>
										<p class="text-2 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit nunc viverra erat orci.</p>
										<p class="text-2 mb-3">
											<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-attorneys-detail.html">View More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
										</p>
										<ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
											<li class="social-icons-facebook">
												<a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
											</li>
											<li class="social-icons-twitter">
												<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-linkedin">
												<a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div>
								<div class="row">
									<div class="col">
										<a href="demo-law-firm-attorneys-detail.html">
											<img src="img/demos/law-firm/team/team-1.jpg" class="img-fluid" alt="Image of the team member" />
										</a>
									</div>
								</div>
								<div class="row pb-3">
									<div class="col pt-3">
										<p class="text-color-dark text-4-5 font-weight-bold mb-1">Bob Doe</p>
										<p class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 text-uppercase mb-3">LEAD ATTORNEY</p>
										<p class="text-2 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit nunc viverra erat orci.</p>
										<p class="text-2 mb-3">
											<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-attorneys-detail.html">View More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
										</p>
										<ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
											<li class="social-icons-facebook">
												<a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
											</li>
											<li class="social-icons-twitter">
												<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-linkedin">
												<a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div>
								<div class="row">
									<div class="col">
										<a href="demo-law-firm-attorneys-detail.html">
											<img src="img/demos/law-firm/team/team-2.jpg" class="img-fluid" alt="Image of the team member" />
										</a>
									</div>
								</div>
								<div class="row pb-3">
									<div class="col pt-3">
										<p class="text-color-dark text-4-5 font-weight-bold mb-1">Janice Doe</p>
										<p class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 text-uppercase mb-3">Criminal Law</p>
										<p class="text-2 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit nunc viverra erat orci.</p>
										<p class="text-2 mb-3">
											<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-attorneys-detail.html">View More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
										</p>
										<ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
											<li class="social-icons-facebook">
												<a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
											</li>
											<li class="social-icons-twitter">
												<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-linkedin">
												<a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div>
								<div class="row">
									<div class="col">
										<a href="demo-law-firm-attorneys-detail.html">
											<img src="img/demos/law-firm/team/team-3.jpg" class="img-fluid" alt="Image of the team member" />
										</a>
									</div>
								</div>
								<div class="row pb-3">
									<div class="col pt-3">
										<p class="text-color-dark text-4-5 font-weight-bold mb-1">Josh Doe</p>
										<p class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 text-uppercase mb-3">Business Law</p>
										<p class="text-2 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit nunc viverra erat orci.</p>
										<p class="text-2 mb-3">
											<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-attorneys-detail.html">View More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
										</p>
										<ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
											<li class="social-icons-facebook">
												<a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
											</li>
											<li class="social-icons-twitter">
												<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-linkedin">
												<a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div>
								<div class="row">
									<div class="col">
										<a href="demo-law-firm-attorneys-detail.html">
											<img src="img/demos/law-firm/team/team-4.jpg" class="img-fluid" alt="Image of the team member" />
										</a>
									</div>
								</div>
								<div class="row pb-3">
									<div class="col pt-3">
										<p class="text-color-dark text-4-5 font-weight-bold mb-1">Alice Doe</p>
										<p class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 text-uppercase mb-3">Capital Law</p>
										<p class="text-2 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit nunc viverra erat orci.</p>
										<p class="text-2 mb-3">
											<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-attorneys-detail.html">View More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
										</p>
										<ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
											<li class="social-icons-facebook">
												<a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
											</li>
											<li class="social-icons-twitter">
												<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-linkedin">
												<a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div>
								<div class="row">
									<div class="col">
										<a href="demo-law-firm-attorneys-detail.html">
											<img src="img/demos/law-firm/team/team-5.jpg" class="img-fluid" alt="Image of the team member" />
										</a>
									</div>
								</div>
								<div class="row pb-3">
									<div class="col pt-3">
										<p class="text-color-dark text-4-5 font-weight-bold mb-1">Chuck Doe</p>
										<p class="d-block text-color-default font-weight-semibold line-height-1 positive-ls-2 text-2 text-uppercase mb-3">Divorce Law</p>
										<p class="text-2 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit nunc viverra erat orci.</p>
										<p class="text-2 mb-3">
											<a class="mt-3 font-weight-semi-bold" href="demo-law-firm-attorneys-detail.html">View More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
										</p>
										<ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-medium mb-0">
											<li class="social-icons-facebook">
												<a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
											</li>
											<li class="social-icons-twitter">
												<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
											</li>
											<li class="social-icons-linkedin">
												<a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="section border-0 lazyload my-0" data-bg-src="img/demos/law-firm/backgrounds/background-3.jpeg" style="background-position: 50% 100%;">
		<div class="row py-5 counters counters-text-light">
			<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
				<div class="counter">
					<img width="44" height="50" src="img/demos/law-firm/icons/business-years.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light d-inline-block ms-2 p-relative bottom-1'}" />
					<strong class="pt-3 custom-font-secondary font-weight-bold" data-to="50" data-append="+">0</strong>
					<label class="pt-2 text-4 opacity-7">Business Years</label>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
				<div class="counter">
					<img width="60" height="50" src="img/demos/law-firm/icons/satisfied-clients.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'd-inline-block ms-2 p-relative bottom-1'}" />
					<strong class="pt-3 custom-font-secondary font-weight-bold" data-to="240" data-append="+">0</strong>
					<label class="pt-2 text-4 opacity-7">Satisfied Clients</label>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
				<div class="counter">
					<img width="46" height="50" src="img/demos/law-firm/icons/successfull-cases.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light d-inline-block ms-2 p-relative bottom-1'}" />
					<strong class="pt-3 custom-font-secondary font-weight-bold" data-to="2000" data-append="+">0</strong>
					<label class="pt-2 text-4 opacity-7">Successfull Cases</label>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="counter">
					<img width="41" height="50" src="img/demos/law-firm/icons/professional-attorneys.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'd-inline-block ms-2 p-relative bottom-1'}" />
					<strong class="pt-3 custom-font-secondary font-weight-bold" data-to="20" data-append="+">0</strong>
					<label class="pt-2 text-4 opacity-7">Professional Attorneys</label>
				</div>
			</div>
		</div>
	</section>
 
@endsection