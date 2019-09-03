<div class="header-gap"></div>
<div class="col-lg-3 height">
	<div class="main-nav">
		<ul>
			<li class="active"><a href="{{ url('/admin/dashboard') }}"><span class="fa fa-th-large"></span>Dashboard</a></li>
			<li><button class="btn dropdown-toggle has-dropdown" type="button" id="class" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="fa fa-user-o"></span>Class provider
				</button>
				<div class="dropdown-menu" aria-labelledby="class">
					<a class="dropdown-item" href="{{ url('/admin/manage-class-provider') }}"><span class="fa fa-cog"></span>Manage</a>
					<a class="dropdown-item" href="{{ url('/admin/add-class-provider') }}"><span class="fa fa-plus-circle"></span>Add class provider</a>
				</div>
			</li>
			<li><button class="btn dropdown-toggle has-dropdown" type="button" id="event" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-calendar"></span>Event/Workshop</button>
				<div class="dropdown-menu" aria-labelledby="event">
					<a class="dropdown-item" href="#"><span class="fa fa-plus-circle"></span>Add a event</a>
					<a class="dropdown-item" href="#"><span class="fa fa-list"></span>Registered student list</a>
				</div>
			</li>
			<li><a href="{{ url('/admin/customer-list') }}"><span class="fa fa-user-o"></span>Costomer list</a></li>
			<li><a href="#"><span class="fa fa-lock"></span>Reset customer password</a></li>
		</ul>
	</div>
</div>