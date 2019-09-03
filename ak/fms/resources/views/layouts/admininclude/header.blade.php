<header>
		<div class="container">
			<div class="row">
			<div class="toggle-div d-block d-lg-none">
				<span class="back"></span>
				<button class="menu-bar"> <span class="fa fa-bars"></span></button>
			</div>
				<a href="{{ url('/admin/dashboard') }}" class="logo"><img src="{{URL::asset('/image/dashboard-logo.png')}}" alt=""></a>
				<div class="dropdown ml-auto">
					<button class="btn dropdown-toggle admin-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<h5>{{Auth::guard('admin')->user()->username}}</h5>

                       
 
						<h6>Administrator</h6>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						<a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
					</div>
				</div>
			</div>
		</div>
    </header>
    <div class="header-gap"></div>