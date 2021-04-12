<!-- Navbar -->
<nav class="js-navbar-scroll navbar fixed-top navbar-expand-lg navbar-dark">
	<div class="container">
		<a class="navbar-brand" href="home-page.html">
			<img src="{{ asset('/img/logo-white.png') }}" alt="Stream UI Kit" style="width: 100px;">
		</a>
		
		<button class="navbar-toggler" type="button"
		        data-toggle="collapse"
		        data-target="#navbarTogglerDemo"
		
		        aria-controls="navbarTogglerDemo"
		        aria-expanded="false"
		        aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarTogglerDemo">
			<ul class="navbar-nav ml-auto mt-1 mt-lg-0">
				<li class="nav-item mr-4 mb-2 mb-lg-0">
					<a class="nav-link active" href="{{ route('site.home') }}">Home</a>
				</li>
				<li class="nav-item dropdown mr-4 mb-2 mb-lg-0">
					<a class="nav-link" href="#" id="appsDropdown" role="button" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false">
						Apps
						<i class="far fa-angle-down small ml-1"></i>
					</a>
					<div class="dropdown-menu" aria-labelledby="appsDropdown">
						<a class="dropdown-item" href="about-us.html">About Us</a>
						<a class="dropdown-item" href="about-me.html">About Me</a>
					</div>
				</li>
				<li class="nav-item dropdown mr-4 mb-2 mb-lg-0">
					<a class="nav-link" href="#" id="resourcesDropdown" role="button" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false">
						Resource
						<i class="far fa-angle-down small ml-1"></i>
					</a>
					<div class="dropdown-menu" aria-labelledby="resourcesDropdown">
						<a class="dropdown-item" href="{{ route('site.resources.user-guide') }}">User Guide</a>
						<a class="dropdown-item" href="{{ route('site.resources.documentation') }}">Documentation</a>
						<a class="dropdown-item" href="{{ route('site.resources.api') }}">APIs</a>
						<a class="dropdown-item" href="{{ route('site.resources.developer-support') }}">Technical Docs</a>
					</div>
				</li>
				<li class="nav-item mr-4 mb-2 mb-lg-0">
					<a class="nav-link" href="{{ route('site.forum.index') }}">Forum</a>
				</li>
				<li class="nav-item mr-4 mb-2 mb-lg-0">
					<a class="nav-link" href="{{ route('site.price.index') }}">Price</a>
				</li>
				<li class="nav-item mr-4 mb-2 mb-lg-0">
					<a class="nav-link" href="{{ route('site.events.index') }}">Events</a>
				</li>
				<li class="nav-item mr-4 mb-2 mb-lg-0">
					<a class="nav-link" href="{{ route('site.contacts.index') }}">Contacts</a>
				</li>
			</ul>
			<div>
				<a class="text-white" data-toggle="modal" href="#callUsModal">
					<i class="fas fa-shopping-cart mr-1"></i>
				</a>
			</div>
			<ul class="ml-auto navbar-nav">
				@auth()
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
						   aria-haspopup="true" aria-expanded="false">
							<img class="rounded-circle u-box-shadow-sm mr-2" width="35" height="35"
							     src="/img/ava/img3.jpg" alt="Htmlstream"> John Doe <i
									class="fas fa-angle-down small ml-1"></i>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Profile</a>
							<a class="dropdown-item" href="#">Account Settings</a>
							<a class="dropdown-item" href="#">Newsletter</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#logoutModal" data-toggle="modal">Sign Out</a>
						</div>
					</li>
					@include('view::components.common.logout')
				@else
					<li class="nav-item mb-2 mb-lg-0">
						<a class="nav-link" href="{{ route('login') }}">Login/Register</a>
					</li>
				@endauth
			</ul>
		</div>
	</div>
</nav>
<!-- End Navbar -->

<!-- Call Us Modal Window -->
<div class="modal fade" id="callUsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form action="#">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">We'll call you</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group mb-4">
						<input type="text" class="form-control" id="modalName" placeholder="Your Name">
					</div>
					<div class="form-group mb-4">
						<input type="tel" class="form-control" id="modalPhone" placeholder="Your Phone Number">
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Send</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Call Us Modal Window -->
