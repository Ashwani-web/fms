	<!--Nav bar Started.-->

	<div class="nav-fixed">
		<nav id="header-back">
			<div class="container">
				<div class="row">
					<div class="col-2"><a class="logo" href="{{url('/')}}"><img src="{{ url('/image/logo.png') }}" alt=""></a></div>
					<div class="col-12 col-lg-10 text-right top-nav">
						<a href="#" class="apply-listing">Apply Listing</a>
						<a href="{{ url('registers') }}" class="signup">Sign Up</a>
						<ul class="navbar-nav link-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle login" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Login
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a href="{{ url('user/login') }}" class="dropdown-item">User login</a>
									<a href="{{ url('classprovider/login') }}" class="dropdown-item">Class Provider login</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<div class="row">
					<a class="navbar-brand" href="#">&nbsp;</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					@foreach($startMenu as $furSubMenu)
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav m-auto">
							<li class="nav-item has-dropdown-2 drop-btn">
								<a class="nav-link drop-for-mob drop-btn-mob" href="{{ url('/'.$furSubMenu->slug.'/') }}">{{$furSubMenu->name}}</a>
								<ul class="dropdown-nav">
									<li class="nav-item">
										<a href="javascript:void(0)" class=" d-lg-none nav-link back-btn"> &lt; Back to main menu</a>
									</li>
									@if(!empty($furSubMenu->sub_category))
									@foreach($furSubMenu->sub_category as $subCategoryName)
									@if(!empty($subCategoryName->subCatname))

									<li class="nav-item  has-dropdown-2 sub-drop-btn">
										<a class="nav-link drop-for-mob sub-drop-btn-mob" href="{{ url('/'.$slug=$furSubMenu->slug.'/'.$catId=$subCategoryName->catSlug.'/') }}">{{$subCategoryName->subCatname}}</a>
										<ul class="sub-dropdown-nav d-none">
											<li class="nav-item">
												<a href="javascript:void(0)" class="back-btn-sub-sub d-lg-none nav-link"> &lt; Back to main menu</a>
											</li>
											@if(!empty($subCategoryName->fur_sub_category))
											@foreach($subCategoryName->fur_sub_category as $furCategoryName)
											@if(!empty($furCategoryName->furName))
											<li class="nav-item">
												<a class="nav-link" href="{{ url('/'.$furSubMenu->slug.'/'.$subCategoryName->catSlug.'/'.$furSubid=$furCategoryName->sub_cat_slug.'/') }}">{{$furCategoryName->furName}}</a>
											</li>
											@endif
											@endforeach
											@endif
										</ul>
									</li>
									@endif
									@endforeach
									@endif
								</ul>
							</li>
						</ul>
					</div>
					@endforeach


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav m-auto">
							<li class="nav-item has-dropdown-2 drop-btn more-menu">
								<a class="nav-link drop-for-mob drop-btn-mob" href="javascript:void(0)">More</a>
								<ul class="dropdown-nav">
									@foreach($lastMenu as $furSubMenus)
									<li class="nav-item has-dropdown-2 sub-drop-btn">
										<a class="nav-link drop-for-mob sub-drop-btn-mob" href="{{ url('/'.$furSubMenus->slug.'/') }}">{{$furSubMenus->name}}</a>
										<ul class="sub-dropdown-nav d-none">
											@if(!empty($furSubMenus->sub_category))
											@foreach($furSubMenus->sub_category as $sublastCategoryName)
											@if(!empty($sublastCategoryName->subCatname))
											<li class="nav-item">
												<a href="javascript:void(0)" class="back-btn-sub-sub d-lg-none nav-link"> &lt; Back to main menu</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{ url('/'.$furSubMenus->slug.'/'.$sublastCategoryName->catSlug.'/') }}">{{$sublastCategoryName->subCatname}}</a>
											</li>
											@endif
											@endforeach
											@endif
										</ul>
									</li>
									@endforeach
								</ul>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</nav>




	</div>
	<div class="header-gap"></div>
	<!--Nav bar Ended.-->