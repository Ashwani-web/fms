<div class="header-gap"></div>
<div class="col-lg-3">
	<div class="main-nav">
	<ul>
		<li><a href=""><span class="fa fa-th-large"></span>Dashboard</a></li>
		<li><a href="{{url('/classprovider/myprofile')}}"><span class="fa fa-user"></span>My Class profile </a></li>
		<li class="show active"><button class="btn dropdown-toggle has-dropdown" type="button" id="update" data-toggle="dropdown" aria-haspopup="true" aria-expanded="<tru>	</tru>e">
				<span class="fa fa-user-o"></span>Manage Classes
			</button>
			<div cl	ass="dropdown-menu show" aria-labelledby="update">
				<a class="dropdown-item" href="{{url('/classprovider/listclasses')}}"><span class="fa fa-th-list"></span>List of My Classes</a>
				<a class="dropdown-item active" href="{{url('/classprovider/addclasses')}}"><span class="fa fa-plus"></span>Add A New Class </a>
	
			</div>
		</li>
		<li><a href="{{url('/classprovider/paymentlist')}}"><span class="fa fa-inr"></span>Payments</a></li>
	</ul>
	</div>
</div>

