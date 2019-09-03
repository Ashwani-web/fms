<div class="nav-fixed">
		<nav id="header-back">
			<div class="container">
				<div class="row">
					<div class="col-2"><a class="logo" href="{{url('/')}}"><img src="{{ url('/public/image/logo.png') }}" alt=""></a></div>
					<div class="col-12 col-lg-10 text-right top-nav">
						<a href="#" class="apply-listing">Apply Listing</a>
						<a href="{{ url('registers') }}" class="signup">Sign Up</a>
						<ul class="navbar-nav link-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle login" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Login
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a href="{{ url('login') }}" class="dropdown-item">User login</a>
									<a href="{{ url('classprovider/login') }}" class="dropdown-item">Class Provider login</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>