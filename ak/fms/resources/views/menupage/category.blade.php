@extends('layouts.app')
@section('content')

	<!--Home Slider Started.-->
	<div class="front other pad">
		<picture>
			<source media="(max-width:700px)" srcset="{{ url('/image/art.jpg') }}">
			<source media="(min-width: 700px)" srcset="{{ url('/image/art.jpg') }}">
			<img src="{{ url('/image/art.jpg') }}" alt="Flowers" style="width:auto;">
		</picture>
		<div class="slider-overlay" style="bottom: 10px"></div>
		<div class="slider-middle">
			<div class="container">
				<p>{{$id}}
				@if(!empty($catId))/
				@endif
				{{$catId or ''}}
				@if(!empty($furSubid))/
				@endif
				{{$furSubid or ''}}</p>
			</div>
		</div>
		<div class="slider-form">
			<div class="container no-padding">
				<form action="" method="get">
					<div class="form-group">
						<select name="" id="area">
							<option value="0" disabled selected>Area</option>
							<option value="1">Delhi</option>
							<option value="" 2>Noida</option>
						</select>
						<select name="" id="age">
							<option value="0" disabled selected>Age</option>
							<option value="1">1 Year</option>
							<option value="2">2 Years</option>
							<option value="3">3 Years</option>
							<option value="4">4 Years</option>
						</select>
						<input type="search" placeholder="find for you">
						<button class="" type="submit"><span class="fa fa-search"></span><span>Search</span></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Home Slider Ended.-->

	<!--breadcrumb started.-->
	<section class="breadcrumb-1">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Category</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{$id}}</li>
				</ol>
				<button id="filter"> <span class="fa fa-sliders"></span> Filter</button>
			</nav>
		</div>
	</section>
	<!--breadcrumb ended.-->

	<!--.wrap-9 started.-->
	<section class="wrap-9">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="accordion-box">
						<button class="accordion-1 active" id="green"><span class="fa fa-arrows-v"></span> Sort By</button>
						<div class="panel" style="display: block">
							<div class="checkbox">
								<input type="checkbox" id="near"><span class="checkbox-2 fa fa-check"></span><label for="near">Nearby</label>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="rating"><span class="checkbox-2 fa fa-check"></span><label for="rating">Rating</label>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="price-low"><span class="checkbox-2 fa fa-check"></span><label for="price-low">price (Low - High)</label>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="price-high"><span class="checkbox-2 fa fa-check"></span><label for="price-high">Price (High - Low)</label>
							</div>
						</div>

						<button class="accordion-1 active" id="blue"><span class="fa fa-map-marker"></span> Locaiton</button>
						<div class="panel" style="display: block">
							<div class="checkbox">
								<input type="checkbox" id="anand-vihar"><span class="checkbox-2 fa fa-check"></span><label for="anand-vihar">Anand Vihar</label>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="laxmi"><span class="checkbox-2 fa fa-check"></span><label for="laxmi">Laxmi Nagar</label>
							</div>

							<div class="checkbox">
								<input type="checkbox" id="mayur"><span class="checkbox-2 fa fa-check"></span><label for="mayur">Mayur Vihar Phase - 1</label>
							</div>

							<div class="checkbox">
								<input type="checkbox" id="ashok-nagar"><span class="checkbox-2 fa fa-check"></span><label for="ashok-nagar">Ashok Nagar</label>
							</div>

							<div class="checkbox">
								<input type="checkbox" id="noida"><span class="checkbox-2 fa fa-check"></span><label for="noida">Noida</label>
							</div>

							<div class="checkbox">
								<input type="checkbox" id="nirman"><span class="checkbox-2 fa fa-check"></span><label for="nirman">Nirmal Vihar</label>
							</div>

						</div>

						<button class="accordion-1 active" id="red"><span class="fa fa-heart-o"></span> Interest</button>
						<div class="panel" style="display: block">
							<div class="checkbox">
								<div class="accordion" id="accordion-list">
									<div class="card">
										<div class="card-header" id="headingOne">
											<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#art" aria-expanded="true" aria-controls="collapseOne">
												Art &amp; Craft
											</button>
										</div>
										<div id="art" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-list">
											<div class="card-body">
												<div class="checkbox">
													<input type="checkbox" id="sub-1"><span class="checkbox-2 fa fa-check"></span><label for="sub-1">Sub-category 1</label>
												</div>
												<div class="checkbox">
													<input type="checkbox" id="sub-2"><span class="checkbox-2 fa fa-check"></span><label for="sub-2">Sub-category 2</label>
												</div>
												<div class="checkbox">
													<input type="checkbox" id="sub-3"><span class="checkbox-2 fa fa-check"></span><label for="sub-3">Sub-category 3</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingOne">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#dance" aria-expanded="false" aria-controls="collapseOne">
												Dance
											</button>
										</div>
										<div id="dance" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-list">
											<div class="card-body">
												<div class="checkbox">
													<input type="checkbox" id="sub-1"><span class="checkbox-2 fa fa-check"></span><label for="sub-1">Sub-category 1</label>
												</div>
												<div class="checkbox">
													<input type="checkbox" id="sub-2"><span class="checkbox-2 fa fa-check"></span><label for="sub-2">Sub-category 2</label>
												</div>
												<div class="checkbox">
													<input type="checkbox" id="sub-3"><span class="checkbox-2 fa fa-check"></span><label for="sub-3">Sub-category 3</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingOne">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#education" aria-expanded="false" aria-controls="collapseOne">
												Education
											</button>
										</div>
										<div id="education" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-list">
											<div class="card-body">
												<div class="checkbox">
													<input type="checkbox" id="sub-1"><span class="checkbox-2 fa fa-check"></span><label for="sub-1">Sub-category 1</label>
												</div>
												<div class="checkbox">
													<input type="checkbox" id="sub-2"><span class="checkbox-2 fa fa-check"></span><label for="sub-2">Sub-category 2</label>
												</div>
												<div class="checkbox">
													<input type="checkbox" id="sub-3"><span class="checkbox-2 fa fa-check"></span><label for="sub-3">Sub-category 3</label>
												</div>
											</div>
										</div>
									</div> 
									<div class="card">
										<div class="card-header" id="headingOne">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#film" aria-expanded="false" aria-controls="collapseOne">
												Films &amp; Acting
											</button>
										</div>
										<div id="film" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-list">
											<div class="card-body">
												<div class="checkbox">
													<input type="checkbox" id="sub-1"><span class="checkbox-2 fa fa-check"></span><label for="sub-1">Sub-category 1</label>
												</div>
												<div class="checkbox">
													<input type="checkbox" id="sub-2"><span class="checkbox-2 fa fa-check"></span><label for="sub-2">Sub-category 2</label>
												</div>
												<div class="checkbox">
													<input type="checkbox" id="sub-3"><span class="checkbox-2 fa fa-check"></span><label for="sub-3">Sub-category 3</label>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingOne">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#racing" aria-expanded="false" aria-controls="collapseOne">
												Racing School
											</button>
										</div>
										<div id="racing" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-list">
											<div class="card-body">
												<div class="checkbox">
													<input type="checkbox" id="sub-1"><span class="checkbox-2 fa fa-check"></span><label for="sub-1">Sub-category 1</label>
												</div>
												<div class="checkbox">
													<input type="checkbox" id="sub-2"><span class="checkbox-2 fa fa-check"></span><label for="sub-2">Sub-category 2</label>
												</div>
												<div class="checkbox">
													<input type="checkbox" id="sub-3"><span class="checkbox-2 fa fa-check"></span><label for="sub-3">Sub-category 3</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<button class="accordion-1 active" id="yellow"><span class="fa fa-user"></span> Age Group</button>
						<div class="panel" style="display: block">
							<div class="checkbox">
								<div class="range-value"><input type="text" id="amount" readonly><input type="text" id="amount2" readonly></div>
								<div id="slider-range"></div>
								<div class="range-value"><input type="text" id="minamount" readonly><input type="text" id="maxamount" readonly></div>
							</div>
						</div>
						<button class="accordion-1 active" id="green"><span class="fa fa-inr"></span> Price Per Class</button>
						<div class="panel" style="display: block">
							<div class="checkbox price">
								<div class="range-value"><input type="text" id="amount3" readonly><input type="text" id="amount4" readonly></div>
								<div id="slider-range2"></div>
								<div class="range-value"><input type="text" id="minamount2" readonly><input type="text" id="maxamount2" readonly></div>
							</div>
						</div>
						<button class="accordion-1 active" id="blue"><span class="fa fa-building"></span> Class Type</button>
						<div class="panel select" style="display: block">
							<div class="checkbox">
								<input type="checkbox" id="all"><span class="checkbox-2 fa fa-check"></span><label for="all">All</label>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="ongoing"><span class="checkbox-2 fa fa-check"></span><label for="ongoing">On Going</label>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="private"><span class="checkbox-2 fa fa-check"></span><label for="private">Private</label>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="course"><span class="checkbox-2 fa fa-check"></span><label for="course">Course</label>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="workshop"><span class="checkbox-2 fa fa-check"></span><label for="workshop">Workshop</label>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="camp"><span class="checkbox-2 fa fa-check"></span><label for="camp">Camp</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row">
						 
					@if(empty($getallClassProviders))
					@else
					@foreach($getallClassProviders as $classprovidername)
						<div class="col-md-12">
							<div class="classview">
							<a href="#"><img  style="width:300px;height:260px;padding:3px;" src="{{$classprovidername->file_url}}" alt=""></a>
								<div class="classtext">
									<h4><a href="#">{{$classprovidername->name}}</a></h4>
									<p>Category: <span>{{$classprovidername->category_name}}<a href="">more</a></p>
									<p>Sub-category: <span>{{$classprovidername->subcategory_name}}</span> <a href="#">more</a></p>
									<div class="address"> <span class="fa fa-map-marker"></span> {{$classprovidername->location}}</div>
									<div class="amenity">Aamenity: <span class="fa fa-glass"></span> <span class="fa fa-wifi"></span> <span class="fa fa-bus"></span> <span class="fa fa-building"></span> <span class="fa fa-camera"></span> <span class="fa fa-glass"></span> <span class="fa fa-wifi"></span> <span class="fa fa-bus"></span> <span class="fa fa-building"></span> <span class="fa fa-camera"></span> <span class="fa fa-glass"></span> <span class="fa fa-wifi"></span> <span class="fa fa-bus"></span> <span class="fa fa-building"></span> <span class="fa fa-camera"></span></div>
									
									<div class="morebooking">
									<!-- <a  href="{{ url('/showall/'.$id.'/') }}"> MORE INFO &amp; BOOKINGS</a> -->
									{{$classprovidername->slug}}
									 <a  href="{{ url($id.'/class/'.$classprovidername->slug) }}"> MORE INFO &amp; BOOKINGS</a>
									 
 

									</div>
								</div>
							</div>
						</div>
						@endforeach
                       @endif
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--.wrap-9 ended.-->

<script>
	var acc = document.getElementsByClassName("accordion-1");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.display === "block") {
				panel.style.display = "none";
			} else {
				panel.style.display = "block";
			}
		});
	}

</script>
<script>
	$(window).scroll(function() {
		var x = $(this).scrollTop();
		if (x >= 20) {
			$(".col-12.col-lg-10.text-right.top-nav").addClass("none")
		} else {
			$(".col-12.col-lg-10.text-right.top-nav").removeClass("none")
		};
		$('#all').click(function(event) {
			if (this.checked) {
				// Iterate each checkbox
				$('.select :checkbox').each(function() {
					this.checked = true;
				});
			} else {
				$('.select :checkbox').each(function() {
					this.checked = false;
				});
			}
		});
		$(".select .checkbox:first-child input").click(
			function() {
				$(".select input").find(":checkbox").attr("checked", this.checked);
			});

		// if all child checkbox are selected, check the Parent checkbox
		// and viceversa
		$(".select input").find(":checkbox").click(function() {

			if ($(".select input").length == $(".select input:checked").length) {
				$(".select .checkbox input").find(":checkbox").attr("checked", "checked");
			} else {
				$(".select .checkbox input").find(":checkbox").removeAttr("checked");
			}
		});
	});
	$(document).ready(function($) {
		var alterClass = function() {
			var ww = document.body.clientWidth;
			if (ww < 769) {
				$('.front').removeClass('other');
			} else if (ww >= 770) {
				$('.front').addClass('other');
			};
		};
		$(window).resize(function() {
			alterClass();
		});
		//Fire it when the page first loads:
		alterClass();
		$("#filter").click(function() {
			$(".accordion-box").toggleClass("filter");
		})
	});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


@endsection

