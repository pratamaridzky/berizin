@extends('master')
@extends('menus')

@section('content')

<div role="main" class="main">

	<section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(img/demos/law-firm-2/backgrounds/background-4.jpg); background-size: cover; background-position: center;">
		<div class="container py-4">
			<div class="row">
				<div class="col text-center">
					<ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
						<li><a href="demo-law-firm-2.html" class="text-color-primary text-decoration-none">HOME</a></li>
						<li class="text-color-primary active">BLOG</li>
					</ul>
					<h1 class="text-color-light font-weight-bold text-10">Blog</h1>
				</div>
			</div>
		</div>
	</section>

	<div class="container pt-4 pb-5 my-5">
		<div class="row">
			<div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">

				<article class="mb-5">
					<div class="card border-0 border-radius-0 custom-box-shadow-1">
						<div class="card-img-top">
							<a href="demo-law-firm-2-blog-post.html">
								<img class="card-img-top border-radius-0 hover-effect-2" src="img/demos/law-firm-2/blog/blog-1.jpg" alt="Card Image">
							</a>
						</div>
						<div class="card-body bg-light p-4 z-index-1">
							<p class="text-uppercase text-color-default text-1 mb-1 pt-1">
								<time pubdate datetime="2022-01-10">10 Jan 2022</time> 
								<span class="opacity-3 d-inline-block px-2">|</span> 
								3 Comments 
								<span class="opacity-3 d-inline-block px-2">|</span> 
								John Doe
							</p>
							<div class="card-body p-0">
								<h4 class="card-title alternative-font-4 font-weight-semibold text-5 mb-3"><a class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3" href="demo-law-firm-2-blog-post.html">Lorem ipsum dolor sit a met</a></h4>
								<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...</p>
								<a href="demo-law-firm-2-blog-post.html" class="custom-read-more-link d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none svg-fill-color-primary svg-stroke-color-primary ps-0">
									READ MORE
									<svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</article>

				<article class="mb-5">
					<div class="card border-0 border-radius-0 custom-box-shadow-1">
						<div class="card-img-top">
							<a href="demo-law-firm-2-blog-post.html">
								<img class="card-img-top border-radius-0 hover-effect-2" src="img/demos/law-firm-2/blog/blog-2.jpg" alt="Card Image">
							</a>
						</div>
						<div class="card-body bg-light p-4 z-index-1">
							<p class="text-uppercase text-color-default text-1 mb-1 pt-1">
								<time pubdate datetime="2022-01-10">10 Jan 2022</time> 
								<span class="opacity-3 d-inline-block px-2">|</span> 
								3 Comments 
								<span class="opacity-3 d-inline-block px-2">|</span> 
								John Doe
							</p>
							<div class="card-body p-0">
								<h4 class="card-title alternative-font-4 font-weight-semibold text-5 mb-3"><a class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3" href="demo-law-firm-2-blog-post.html">Lorem ipsum dolor sit a met</a></h4>
								<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...</p>
								<a href="demo-law-firm-2-blog-post.html" class="custom-read-more-link d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none svg-fill-color-primary svg-stroke-color-primary ps-0">
									READ MORE
									<svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</article>

				<ul class="custom-pagination-style-1 pagination pagination-rounded pagination-md justify-content-center">
					<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
					<li class="page-item active"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
				</ul>

			</div>
			<div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">
				<aside class="sidebar">
					<div class="px-3 mb-4">
						<h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">About The Blog</h3>
						<p class="m-0">Lorem ipsum dolor sit amet, conse elit porta. Vestibulum ante justo, volutpat quis porta diam.</p>
					</div>
					<div class="py-1 clearfix">
						<hr class="my-2">
					</div>
					<div class="px-3 mt-4">
						<form action="page-search-results.html" method="get">
							<div class="input-group mb-3 pb-1">
								<input class="form-control box-shadow-none text-1 border-0 bg-color-grey" placeholder="Search..." name="s" id="s" type="text">
								<button type="submit" class="btn bg-color-grey text-1 p-2"><i class="fas fa-search m-2"></i></button>
							</div>
						</form>
					</div>
					<div class="py-1 clearfix">
						<hr class="my-2">
					</div>
					<div class="px-3 mt-4">
						<h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Posts</h3>
						<div class="pb-2 mb-1">
							<a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2022 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
							<a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem ipsum dolor sit amet</a>
							<a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2022 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
							<a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur adipiscing elit</a>
							<a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2022 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
							<a href="#" class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Vivamus sollicitudin nibh luctus</a>
						</div>
					</div>
					<div class="py-1 clearfix">
						<hr class="my-2">
					</div>
					<div class="px-3 mt-4">
						<h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Comments</h3>
						<div class="pb-2 mb-1">
							<a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin on <strong class="text-color-dark text-hover-primary text-4">Vivamus sollicitudin</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2022</span></a>
							<a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">John Doe on <strong class="text-color-dark text-hover-primary text-4">Lorem ipsum dolor</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2022</span></a>
							<a href="#" class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin on <strong class="text-color-dark text-hover-primary text-4">Consectetur adipiscing</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2022</span></a>
						</div>
					</div>
					<div class="py-1 clearfix">
						<hr class="my-2">
					</div>
					<div class="px-3 mt-4">
						<h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0">Categories</h3>
						<ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
							<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Design (2)</a></li>
							<li class="nav-item">
								<a class="nav-link bg-transparent border-0 active" href="#">Photos (4)</a>
								<ul>
									<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Animals</a></li>
									<li class="nav-item"><a class="nav-link bg-transparent border-0 active" href="#">Business</a></li>
									<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Sports</a></li>
									<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">People</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Videos (3)</a></li>
							<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Lifestyle (2)</a></li>
							<li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Technology (1)</a></li>
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</div>

	<section class="section section-height-3 bg-primary-darken border-0 m-0">
		<div class="container py-3">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-8 text-center text-lg-start mb-4 mb-lg-0">
					<h3 class="alternative-font-4 text-color-light font-weight-semibold text-4 opacity-9 mb-1">ARE YOU LOOKING FOR</h3>
					<h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-2">Experienced Attorneys?</h2>
					<p class="text-color-light text-3-5 opacity-8 mb-0">Get a free initial consultation right now</p>
				</div>
				<div class="col-lg-4 text-center text-lg-end">
					<a href="demo-law-firm-2-contact.html" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3">REQUEST CONSULTATION</a>
				</div>
			</div>
		</div>
	</section>

</div> 

@endsection