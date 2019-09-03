<div class="header-gap"></div>
<div class="col-lg-3">
	<div class="main-nav {{Request::is('/') ? 'active' : null}}">
	<ul>
		<li><a href="{{url('/dashboard')}}"><span class="fa fa-th-large"></span>Dashboard</a></li>
		<li><a href="{{url('/viewprofile')}}"><span class="fa fa-user"></span>My  profile</a></li>
		<li class="show  {{Request::is('/') ? 'active' : null}}"><button class="btn dropdown-toggle has-dropdown" type="button" id="update" data-toggle="dropdown" aria-haspopup="true" aria-expanded="<tru>	</tru>e">
				<span class="fa fa-user-o"></span>Manage  Classes
			</button>
			<div class="dropdown-menu show" aria-labelledby="update">
				<a class="dropdown-item" href="{{url('/allclasses')}}"><span class="fa fa-th-list"></span>List of My Classes</a>
			</div>
		</li>
		<li class="show"><button class="btn dropdown-toggle has-dropdown" type="button" id="update" data-toggle="dropdown" aria-haspopup="true" aria-expanded="<tru>	</tru>e">
				<span class="fa fa-user-o"></span>Family Detail
			</button>
			<div class="dropdown-menu show" aria-labelledby="update">
				<a class="dropdown-item {{Request::is('/') ? 'active' : null}} " href="{{url('/allFamilyView')}}"><span class="fa fa-plus"></span>List family </a>
			</div>
		</li>
		<li class="{{Request::is('/') ? 'active' : null}}"><a href="{{url('/paymentdetail')}}"><span class="fa fa-inr"></span>Payments</a></li>
	</ul>
	</div>
</div>

