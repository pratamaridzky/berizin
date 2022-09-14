<!DOCTYPE html>
<html>
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	
		<meta name="keywords" content="Berizin" />
		<meta name="description" content="Berizin Law">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900%7CPoppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet" type="text/css">
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">

		<!-- Revolution Slider CSS -->
		<link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/layers.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/navigation.css')}}">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('css/demos/demo-law-firm.css')}}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('css/skins/skin-law-firm.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>

		<title>Berizin</title>
	</head>

	<body>
		<div class="body">

			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 107, 'stickySetTop': '-107px', 'stickyChangeLogo': true}">
				<div class="header-body border-color-primary border-top-0 box-shadow-none">
					<div class="header-container container z-index-2">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.html">
											<img alt="Porto" width="125" height="47" src="img/logo-berizin.png">
										</a>
									</div>
								</div>
							</div>

							<div class="header-column justify-content-end">
								<div class="header-row h-100">
									<ul class="header-extra-info d-flex h-100 align-items-center">
										<li class="align-items-center d-none d-lg-block h-100 py-4">
											<div class="header-extra-info-text h-100 py-2">
												<div class="feature-box feature-box-style-2 align-items-center">
													<div class="feature-box-icon">
														<img width="34" height="28" src="img/demos/law-firm/icons/envelope.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 34px; height: 28px;" />
													</div>
													<div class="feature-box-info ps-1">
														<label>SEND US AN EMAIL</label>
														<strong><a href="mailto:email@berizin.com">email@berizin.com</a></strong>
													</div>
												</div>
											</div>
										</li>
										<li class="align-items-center d-none d-lg-block h-100 py-4">
											<div class="header-extra-info-text h-100 py-2">
												<div class="feature-box feature-box-style-2 align-items-center">
													<div class="feature-box-icon">
														<img width="30" height="30" src="img/demos/law-firm/icons/phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary p-relative left-3'}" style="width: 30px; height: 30px;" />
													</div>
													<div class="feature-box-info ps-1">
														<label>CALL US NOW</label>
														<strong><a href="tel:8001234567">800-123-4567</a></strong>
													</div>
												</div>
											</div>
										</li>
										<li class="align-items-center d-none d-sm-block h-100 py-4">
											<div class="header-extra-info-text h-100 py-2">
												<div class="feature-box feature-box-style-2 align-items-center">
													<div class="feature-box-icon">
														<img width="33" height="31" src="img/demos/law-firm/icons/comment.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 33px; height: 31px;" />
													</div>
													<div class="feature-box-info ps-1">
														<label class="p-relative top-4">GET STARTED</label>
														<strong class="text-uppercase"><a href="#">Request Consultation <img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2 d-inline'}" /></a></strong>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					@yield('menus')

				</div>
			</header>

			<div role="main" class="main">
				@yield('content')
			</div>

			<!-- Vendor -->
			<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
			<script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
			<script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
			<script src="{{asset('vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
			<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
			<script src="{{asset('vendor/jquery.validation/jquery.validate.min.js')}}"></script>
			<script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
			<script src="{{asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
			<script src="{{asset('vendor/lazysizes/lazysizes.min.js')}}"></script>
			<script src="{{asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
			<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
			<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
			<script src="{{asset('vendor/vide/jquery.vide.min.js')}}"></script>
			<script src="{{asset('vendor/vivus/vivus.min.js')}}"></script>

			<!-- Theme Base, Components and Settings -->
			<script src="{{asset('js/theme.js')}}"></script>

			<!-- Revolution Slider Scripts -->
			<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
			<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

			<!-- Current Page Vendor and Views -->
			<script src="{{asset('js/views/view.contact.js')}}"></script>

			<!-- Demo -->
			<script src="{{asset('js/demos/demo-law-firm.js')}}"></script>

			<!-- Theme Custom -->
			<script src="{{asset('js/custom.js')}}"></script>

			<!-- Theme Initialization Files -->
			<script src="{{asset('js/theme.init.js')}}"></script>
		
			<footer id="footer" class="border-top-0 mt-0">
				<div class="container py-4">
					<div class="row py-5">
						<div class="col-md-6 mb-4 mb-lg-0">
							<a href="index.html" class="logo pe-0 pe-lg-3 pb-4">
								<img alt="Porto" width="125" height="47" src="img/logo-berizin.png">
							</a>
							<p class="pt-3 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
							<p class="mb-0"><a class="mt-3 text-primary font-weight-semi-bold" href="demo-law-firm-about-us.html">Learn More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a></p>
						</div>
						<div class="col-md-3 mb-4 mb-lg-0">
							<h5 class="text-4-5 text-transform-none custom-font-primary mb-3">Contact Us</h5>
							<div class="row pb-3">
								<div class="col">
									<div class="feature-box feature-box-style-2 align-items-center">
										<div class="feature-box-icon">
											<img width="34" height="28" src="img/demos/law-firm/icons/envelope.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 34px; height: 28px;" />
										</div>
										<div class="feature-box-info ps-1">
											<label class="custom-footer-label-1">SEND US AN EMAIL</label>
											<strong class="custom-footer-strong-1"><a href="mailto:email@berizin.com" class="text-color-light">email@berizin.com</a></strong>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="feature-box feature-box-style-2 align-items-center">
										<div class="feature-box-icon">
											<img width="30" height="30" src="img/demos/law-firm/icons/phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary p-relative left-3'}" style="width: 30px; height: 30px;" />
										</div>
										<div class="feature-box-info ps-1">
											<label class="custom-footer-label-1">CALL US NOW</label>
											<strong class="custom-footer-strong-1"><a href="tel:8001234567" class="text-color-light">800-123-4567</a></strong>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<h5 class="text-4-5 text-transform-none custom-font-primary mb-3">Follow Us</h5>

							<ul class="custom-social-icons-style-1 social-icons social-icons-clean">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="text-primary fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-4">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="text-primary fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="text-primary fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="footer-copyright footer-copyright-style-2">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p>© Copyright 2022. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div>
	</body>


</html>