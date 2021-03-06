@extends('site::layouts.landing')

@section('title', 'Home')

@push('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('/vendor/slick-carousel/slick/slick.css') }}">
@endpush

@push('css')

@endpush

@section('promo-block')
	<!-- Promo Block -->
	<section class="js-parallax u-promo-block u-promo-block--mheight-600 u-overlay u-overlay--dark text-white"
	         style="background-image: url('{{ asset('/img/1920x1080/img3.jpg') }}');">
		<!-- Promo Content -->
		<div class="container u-overlay__inner u-ver-center u-content-space">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="text-center">
						<p class="text-uppercase u-letter-spacing-sm mb-0">Clean and Fully Responsive Template</p>
						<h1 class="display-sm-4 display-lg-3 mb-3">We are <span class="js-display-typing"></span></h1>
						<a class="btn btn-primary" href="services.html">
							Learn More <i class="fas fa-arrow-alt-circle-right ml-2"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Promo Content -->
	</section>
	<!-- End Promo Block -->
@endsection

@section('content')
	<!-- Clients Section -->
	<section class="js-clients u-clients">
		<div class="u-clients__item">
			<img class="u-clients__image" src="{{ asset('/img/partners/img1.png') }}" alt="Image Description">
		</div>
		<div class="u-clients__item">
			<img class="u-clients__image" src="{{ asset('/img/partners/img2.png') }}" alt="Image Description">
		</div>
		<div class="u-clients__item">
			<img class="u-clients__image" src="{{ asset('/img/partners/img3.png') }}" alt="Image Description">
		</div>
		<div class="u-clients__item">
			<img class="u-clients__image" src="{{ asset('/img/partners/img4.png') }}" alt="Image Description">
		</div>
		<div class="u-clients__item">
			<img class="u-clients__image" src="{{ asset('/img/partners/img5.png') }}" alt="Image Description">
		</div>
		<div class="u-clients__item">
			<img class="u-clients__image" src="{{ asset('/img/partners/img6.png') }}" alt="Image Description">
		</div>
		<div class="u-clients__item">
			<img class="u-clients__image" src="{{ asset('/img/partners/img7.png') }}" alt="Image Description">
		</div>
		<div class="u-clients__item">
			<img class="u-clients__image" src="{{ asset('/img/partners/img8.png') }}" alt="Image Description">
		</div>
	</section>
	<!-- End Clients Section -->
	
	<!-- Why We? -->
	<section class="u-content-space">
		<div class="container">
			<header class="text-center w-md-50 mx-auto mb-8">
				<h2 class="h1">Why We?</h2>
				<p class="h5">Stream <strong>creative</strong> technology company providing key digital services for
					everyone.</p>
			</header>
			
			<!-- Row -->
			<div class="row text-center">
				<div class="col-lg-4 mb-5 mb-lg-0">
					<div class="display-4 text-primary mb-2">
						<i class="fab fa-grav"></i>
					</div>
					<h4 class="h5">Creative ideas</h4>
					<p>CurabiturAchieve virtually any look and layout from within the one template.</p>
					<a href="#!">
						Learn More <i class="fas fa-arrow-right ml-1"></i>
					</a>
				</div>
				
				<div class="col-lg-4 mb-5 mb-lg-0">
					<div class="display-4 text-primary mb-2">
						<i class="fab fa-connectdevelop"></i>
					</div>
					<h4 class="h5">Excellent features</h4>
					<p>We strive to figure out ways to help your audience grow through all platforms.</p>
					<a href="#!">
						Learn More <i class="fas fa-arrow-right ml-1"></i>
					</a>
				</div>
				
				<div class="col-lg-4 mb-5 mb-lg-0">
					<div class="display-4 text-primary mb-2">
						<i class="fas fa-cubes"></i>
					</div>
					<h4 class="h5">Fully responsive</h4>
					<p>Find what you need in one template and combine features at will.</p>
					<a href="#!">
						Learn More <i class="fas fa-arrow-right ml-1"></i>
					</a>
				</div>
			</div>
			<!-- End Row -->
		</div>
	</section>
	<!-- End Why We? -->
	
	<!-- Stats -->
	<section class="bg-light position-relative u-hero-img u-overlay u-overlay--dark"
	         style="background-position: 50% 65%; background-image: url(/img/1920x1080/img4.jpg);">
		<div class="container u-overlay__inner pt-8">
			<div class="row text-center text-uppercase text-white">
				<div class="col-lg-3 col-sm-6 pb-8">
					<h5 class="js-counter display-4 mb-1">34</h5>
					<small class="d-block font-style-normal text-uppercase u-letter-spacing-sm">Projects</small>
				</div>
				
				<div class="col-lg-3 col-sm-6 pb-8">
					<h5 class="js-counter display-4 mb-1">12</h5>
					<small class="d-block font-style-normal text-uppercase u-letter-spacing-sm">Teams</small>
				</div>
				
				<div class="col-lg-3 col-sm-6 pb-8">
					<h5 class="js-counter display-4 mb-1">124</h5>
					<small class="d-block font-style-normal text-uppercase u-letter-spacing-sm">Open Contests</small>
				</div>
				
				<div class="col-lg-3 col-sm-6 pb-8">
					<h5 class="js-counter display-4 mb-1">575</h5>
					<small class="d-block font-style-normal text-uppercase u-letter-spacing-sm">Happy Customers</small>
				</div>
			</div>
		</div>
	</section>
	<!-- End Stats -->
	
	<!-- Our Product -->
	<section class="u-content-space">
		<div class="container">
			<div class="row">
				<!-- Article Content -->
				<div class="col-lg-6 align-self-center mb-5 mb-lg-0 pr-lg-5">
					<header class="mb-5">
						<h2 class="h1">Our Product</h2>
						<p class="h5">Convert more visitors, and win more business with Stream - UI Kit.</p>
					</header>
					
					<p class="mb-4">Easy and fast adjustments of elements are possible with Front template. Find our
						more about our all-in-one programmatic template. We help to take of all the paperwork.</p>
					
					<a class="mr-4" href="#!">
						<i class="fab fa-google-play mr-1"></i> Google Play
					</a>
					<a href="#!">
						<i class="fab fa-app-store-ios mr-1"></i> App Store
					</a>
				</div>
				<!-- End Article Content -->
				
				<!-- Article Image -->
				<div class="col-lg-6 align-self-center">
					<img class="img-fluid rounded" src="{{ asset('/img/900x700/img1.png') }}" alt="Image Description">
				</div>
				<!-- End Article Image -->
			</div>
		</div>
	</section>
	<!-- End Our Product -->
	
	<!-- Our Pricing -->
	<section class="bg-light u-content-space">
		<div class="container">
			<!-- Our Pricing: Header -->
			<header class="text-center w-md-50 mx-auto mb-8">
				<h2 class="h1">Our Pricing</h2>
				<p class="h5">No additional costs. Pay only fixed monthly fee and the rest we will handle for you!</p>
			</header>
			<!-- End Our Pricing: Header -->
			
			<div class="row align-items-lg-center">
				<div class="col-lg-8 col-md-7">
					<!-- Row -->
					<div class="row mr-md-4 mb-lg-5">
						<div class="col-lg-6 mb-5">
							<div class="display-4 text-primary mb-2">
								<i class="far fa-life-ring"></i>
							</div>
							<h4 class="h5">24/7 Friendly Support</h4>
							<p class="mb-0">Our over 30 full-time experienced folks ready to help you anytime with any
								issues. Chat with us anytime.</p>
						</div>
						
						<div class="col-lg-6 mb-5">
							<div class="display-4 text-primary mb-2">
								<i class="fas fa-bug"></i>
							</div>
							<h4 class="h5">AI Autofix</h4>
							<p class="mb-0">Now, your server never shuts down. Our AI technology solves any issues on
								the server side and fixes instantly.</p>
						</div>
					</div>
					<!-- End Row -->
					
					<!-- Row -->
					<div class="row mr-md-4">
						<div class="col-lg-6 mb-5 mb-lg-0">
							<div class="display-4 text-primary mb-2">
								<i class="fas fa-fire"></i>
							</div>
							<h4 class="h5">Instant Results</h4>
							<p class="mb-0">No need to wait until your data is updated, now it will be updated
								instantly.</p>
						</div>
						
						<div class="col-lg-6 mb-5 mb-lg-0">
							<div class="display-4 text-primary mb-2">
								<i class="far fa-gem"></i>
							</div>
							<h4 class="h5">No additional costs</h4>
							<p class="mb-0">Choose the most suitable service for your needs with monthly fixed
								price.</p>
						</div>
					</div>
					<!-- End Row -->
				</div>
				
				<div class="col-lg-4 col-md-5">
					<!-- Pricing -->
					<article class="u-pricing u-box-shadow-sm text-center rounded">
						<!-- Article Header -->
						<header class="u-pricing__header bg-primary text-white rounded-top">
							<strong class="u-pricing__header-price display-4 font-weight-bold mb-2">
								<span class="h6 align-top">$</span>49<span class="h6">/ month</span>
							</strong>
							
							<h3 class="u-pricing__header-title small text-uppercase u-letter-spacing-sm mb-4">
								Professional</h3>
							
							<svg class="u-pricing__header-decoration" version="1.1" preserveAspectRatio="none"
							     xmlns="http://www.w3.org/2000/svg"
							     width="100%" height="70px" viewBox="0 0 300 70">
								<path
										d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
										opacity="0.6" fill="#fff"></path>
								<path
										d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
										opacity="0.6" fill="#fff"></path>
								<path
										d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z"
										opacity="0.7" fill="#fff"></path>
								<path
										d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
										fill="#fff"></path>
							</svg>
						</header>
						<!-- End Article Header -->
						
						<!-- Article Content -->
						<div class="u-pricing__content">
							<ul class="list-unstyled mb-5">
								<li class="mb-4">200GB of Space</li>
								<li class="mb-4">Unlimited Traffic</li>
								<li class="mb-4">Online Support</li>
								<li class="mb-4">24 hour Support</li>
							</ul>
							
							<a class="btn btn-primary py-3 px-4" href="#!">Order Now</a>
						</div>
						<!-- End Article Content -->
					</article>
					<!-- End Pricing -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Our Pricing -->
	
	<!-- Testimonials -->
	<section class="u-content-space">
		<div class="container">
			<!-- Testimonials: Header -->
			<header class="text-center w-md-50 mx-auto mb-8">
				<h2 class="h1">Testimonials</h2>
				<p class="h5">Do not take our words, check out what people say about Stream - UI Kit!</p>
			</header>
			<!-- End Testimonials: Header -->
			
			<div class="row">
				<div class="col-lg-6 mb-7 mb-lg-0 px-lg-5">
					<!-- Testimonial -->
					<blockquote class="u-blockquote-v2 rounded mb-5">Dear Htmlstream team, I just bought the Stream
						template some weeks ago. The template is really nice and offers quite a large set of options.
					</blockquote>
					<div class="media u-font-size-90">
						<img
								class="d-flex align-self-center rounded-circle u-blockquote-v2__image u-box-shadow-lg mx-3 mt-2"
								src="{{ asset('/img/ava/img2.jpg') }}" alt="Image description">
						<div class="media-body align-self-center">
							<strong class="d-block">Jane Moris</strong>
							<span class="u-font-size-75 text-dark">Web Developer</span>
						</div>
					</div>
					<!-- End Testimonial -->
				</div>
				
				<div class="col-lg-6 px-lg-5">
					<!-- Testimonial -->
					<blockquote class="u-blockquote-v2 rounded mb-5">Hi there purchased a few days ago and the site
						looks great, they gave me some great help with some fiddly setup issues.
					</blockquote>
					<div class="media u-font-size-90">
						<img
								class="d-flex align-self-center rounded-circle u-blockquote-v2__image u-box-shadow-lg mx-3 mt-2"
								src="{{ asset('/img/ava/img3.jpg') }}" alt="Image description">
						<div class="media-body align-self-center">
							<strong class="d-block">Bastien Rojanawisut</strong>
							<span class="u-font-size-75 text-dark">UX/UI Designer</span>
						</div>
					</div>
					<!-- End Testimonial -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonials -->
@endsection

@push('script')
	<!-- Components Vendor  -->
	<script src="{{ asset('assets/vendors/jquery.parallax.js') }}"></script>
	<script src="{{ asset('assets/vendors/typedjs/typed.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/slick-carousel/slick.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/counters/waypoint.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/counters/counterup.min.js') }}"></script>


	<!-- Theme Components and Settings -->
	<script src="{{ asset('/js/vendors/parallax.js') }}"></script>
	<script src="{{ asset('/js/vendors/carousel.js') }}"></script>
	<script src="{{ asset('/js/vendors/counters.js') }}"></script>
	<!-- END JAVASCRIPTS -->
@endpush

@push('js')
	<script>
		$(document).on('ready', function () {
			// initialization of text animation (typing)
			$(".js-display-typing").typed({
				strings: [
					"Stream",
					"Creative",
					"Innovative"
				],
				typeSpeed: 60,
				loop: true,
				backDelay: 2500
			});
		});
	</script>
@endpush
