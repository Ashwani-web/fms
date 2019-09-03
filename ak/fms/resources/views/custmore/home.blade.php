@extends('layouts.app')
@section('content')

<!--Home Slider Started.-->
<div class="front">
		<div class="owl-carousel owl-theme home-slider">
			<div class="item">
				<div class="slider-text">
					<picture>
						<source media="(max-width:700px)" srcset="{{ url('/image/slider-image-small.jpg') }}">
						<source media="(min-width: 700px)" srcset="{{ url('/image/slider-image.jpg') }}">
						<img src="images/slider-image.jpg" alt="Flowers" style="width:auto;">
					</picture>
					<div class="slider-overlay">
						<div class="container">
							<div class="slider-matter">
								<h2>Grab a skill Today</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="slider-text">
					<picture>
						<source media="(max-width:700px)" srcset="{{ url('/image/slider-image-small.jpg') }}">
						<source media="(min-width: 700px)" srcset="{{ url('/image/slider-image.jpg') }}">
						<img src="{{ url('/image/slider-image.jpg') }}" alt="Flowers" style="width:auto;">
					</picture>
					<div class="slider-overlay">
						<div class="container">
							<div class="slider-matter">
								<h2>Grab a skill Today</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="slider-text">
					<picture>
						<source media="(max-width:700px)" srcset="{{ url('/image/slider-image-small.jpg') }}">
						<source media="(min-width: 700px)" srcset="{{ url('/image/slider-image.jpg') }}">
						<img src="{{ url('/image/slider-image.jpg') }}" alt="Flowers" style="width:auto;">
					</picture>
					<div class="slider-overlay">
						<div class="container">
							<div class="slider-matter">
								<h2>Grab a skill Today</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="slider-text">
					<picture>
						<source media="(max-width:700px)" srcset="{{ url('/image/slider-image.jpg') }}">
						<source media="(min-width: 700px)" srcset="{{ url('/image/slider-image.jpg') }}">
						<img src="{{ url('/image/slider-image.jpg') }}" alt="Flowers" style="width:auto;">
					</picture>
					<div class="slider-overlay">
						<div class="container">
							<div class="slider-matter">
								<h2>Grab a skill Today</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-form">
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

<!--Home Slider Ended.-->
	<!--Wrap-1 started.-->
	<section class="wrap-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<h2>Try. Book. Learn</h2>
					<p>At <b>FishmySkill (‘FmS’),</b> everyone can search, discover, compare, try and book the right Extra-curricular Activity and Hobby Classes nearby, for development of Skill sets which one aspire to attain.</p>
					<p>Our online platform brings together, at one place, all the reputed and recognized Class providers, offering a wide range of extra-curricular activities at very attractive offers. </p>
					<p>So, everyone come to pursue your passion and Try. Book. Learn a Skill today.</p>
					<a href="#" class="about">About us</a>
				</div>
				<div class="text-center col-md-12 col-lg-6">
					<img src="{{ url('/image/try-books.png') }}" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--Wrap-1 Ended.-->


	<!--Wrap-2 started.-->
	<section class="wrap-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 id="spotlight">Spotlight Skills</h2>
				</div>
				<div class="col-6 col-lg-3 text-center">
					<div class="img-circle"><img src="{{ url('/image/spot-1.png') }}" alt=""></div>
					<h3>Lorem Ipsum</h3>
					<p>1,333 Classe Found</p>
				</div>
				<div class="col-6 col-lg-3 text-center">
					<div class="img-circle"><img src="{{ url('/image/spot-2.png') }}" alt=""></div>
					<h3>Lorem Ipsum</h3>
					<p>2,373 Classe Found</p>
				</div>
				<div class="col-6 col-lg-3 text-center">
					<div class="img-circle"><img src="{{ url('/image/spot-3.png') }}" alt=""></div>
					<h3>Lorem Ipsum</h3>
					<p>196 Classe Found</p>
				</div>
				<div class="col-6 col-lg-3 text-center">
					<div class="img-circle"><img src="{{ url('/image/spot-4.png') }}" alt=""></div>
					<h3>Lorem Ipsum</h3>
					<p>1,266 Classe Found</p>
				</div>
			</div>
		</div>
	</section>
	<!--Wrap-2 ended.-->


	<!--Wrap-3 started.-->
	<section class="wrap-3">
		<div class="container">
			<h2 id="fms-social">Fms Social</h2>
			<div class="row">
				<div class="col-md-12">
					<ul class="social">
						<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</li>
						<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
						<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</li>
						<li>Lorem Ipsum is simply dummy text of the printing</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--Wrap-3 ended.-->


	<!--Wrap-4 Started.-->
	<section class="wrap-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12 no-padding">
					<h2 id="endorsed">Endorsed Classes</h2>
				</div>
				<div class="owl-carousel owl-theme endorsed">
					<div class="item">
						<div class="endorsed-img"><img src="{{ url('/image/endorsed.jpg') }}" alt="">
							<h4>Lorem Ipsum</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						</div>
					</div>
					<div class="item">
						<div class="endorsed-img"><img src="{{ url('/image/endorsed.jpg') }}" alt="">
							<h4>Lorem Ipsum</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						</div>
					</div>
					<div class="item">
						<div class="endorsed-img"><img src="{{ url('/image/endorsed.jpg') }}" alt="">
							<h4>Lorem Ipsum</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						</div>
					</div>
					<div class="item">
						<div class="endorsed-img"><img src="{{ url('/image/endorsed.jpg') }}" alt="">
							<h4>Lorem Ipsum</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!--Wrap-4 Ended.-->

	<!--Google ads started-->
	<section class="google">
		<div class="container"><img src="{{ url('/image/add-2.png') }}" alt=""></div>
	</section>
	<!--Google ads ended-->

	<!--wrap-5 Started.-->
	<section class="wrap-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12 no-padding">
					<h2 id="event-calender">Event Calender</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<nav class="tabs-1">
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Upcoming</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Week</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Month</a>
						<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">All Events</a>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<div class="owl-carousel owl-theme 	endorsed">
							<div class="item">
								<div class="event-card">
									<div class="event-img">
										<img src="{{ url('/image/event-1.jpg') }}" alt="">
									</div>
									<div class="event-date" id="event-1">
										<h3>28</h3>
										<h4>JAN</h4>
									</div>
									<h5>Lorem Ipsum is simply dummy text of the printing</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
									<a href="#" class="btn-block read" id="event-link-1">read more</a>
								</div>
							</div>
							<div class="item">
								<div class="event-card">
									<div class="event-img">
										<img src="{{ url('/image/event-2.jpg') }}" alt="">
									</div>
									<div class="event-date" id="event-2">
										<h3>28</h3>
										<h4>JAN</h4>
									</div>
									<h5>Lorem Ipsum is simply dummy text of the printing</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
									<a href="#" class="btn-block read" id="event-link-2">read more</a>
								</div>
							</div>
							<div class="item">
								<div class="event-card">
									<div class="event-img">
										<img src="{{ url('/image/event-3.jpg') }}" alt="">
									</div>
									<div class="event-date" id="event-3">
										<h3>28</h3>
										<h4>JAN</h4>
									</div>
									<h5>Lorem Ipsum is simply dummy text of the printing</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
									<a href="#" class="btn-block read" id="event-link-3">read more</a>
								</div>
							</div>
							<div class="item">
								<div class="event-card">
									<div class="event-img">
										<img src="{{ url('/image/event-4.jpg') }}" alt="">
									</div>
									<div class="event-date" id="event-4">
										<h3>28</h3>
										<h4>JAN</h4>
									</div>
									<h5>Lorem Ipsum is simply dummy text of the printing</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
									<a href="#" class="btn-block read" id="event-link-4">read more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
					</div>
					<div class="tab-pane" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
					</div>
					<div class="tab-pane" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
						Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--wrap-5 Ended.-->

	<!--Wrap-6 Started.-->
	<section class="wrap-6">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<h2>Benefits of Premium Membership</h2>
					<ul class="social">
						<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</li>
						<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
						<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</li>
						<li>Lorem Ipsum is simply dummy text of the printing</li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="small-block">
						<h4>Get update today</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
						<button>Membership</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Wrap-6 ended.-->

	<!--Wrap-6 Started.-->
	<section class="wrap-7">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<h2>CLASS MANAGEMENT SYSTEM</h2>
					<ul class="social">
						<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</li>
						<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
						<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</li>
						<li>Lorem Ipsum is simply dummy text of the printing</li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="small-block">
						<h4>Apply listing</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
						<button>Apply Now</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Wrap-6 ended.-->

	<!--wrap-8 started.-->
	<section class="wrap-8">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>How fms work</h2>
					<div class="slide-number tab">
						<div class="step-1 active-step"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'number1')">1</a></div>
						<div class="gap"></div>
						<div class="step-1"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'number2')">2</a></div>
						<div class="gap"></div>
						<div class="step-1"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'number3')">3</a></div>
						<div class="gap"></div>
						<div class="step-1"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'number4')">4</a></div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 active" id="number1">
					<div class="work-img active">
						<span class="outline"><span class="border-1">
								<div class="img-inner"><img src="{{ url('/public/image/work-img-1.png') }}" alt=""></div>
							</span></span>
						<h4>Lorem Ipsum</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3" id="number2">
					<div class="work-img">
						<span class="outline"><span class="border-1">
								<div class="img-inner"><img src="{{ url('/image/work-img-2.png') }}" alt=""></div>
							</span></span>
						<h4>Lorem Ipsum</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3" id="number3">
					<div class="work-img">
						<span class="outline"><span class="border-1">
								<div class="img-inner"><img src="{{ url('/image/work-img-2.png') }}" alt=""></div>
							</span></span>
						<h4>Lorem Ipsum</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3" id="number4">
					<div class="work-img">
						<span class="outline"><span class="border-1">
								<div class="img-inner"><img src="{{ url('/image/work-img-2.png') }}" alt=""></div>
							</span></span>
						<h4>Lorem Ipsum</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--wrap-8 ended.-->

	<!--google-2 started.-->
	<section class="google-2">
		<div class="container">
			<div class="row"><img src="{{ url('/image/add-2.png') }}" alt=""></div>
		</div>
	</section>
	<!--google-2 ended.-->

	<!--testimonial started.-->
	<section class="testimonial">
		<div class="container">
			<div class="row">
				<div class="owl-carousel owl-theme testimonial-slider">
					<div class="item">
						<div class="row">
							<div class="col-lg-4">
								<div class="testimonial-section">
									<div class="testimonial-img">
										<div class="testimonial-back">
											<div class="testimonial-content">
												<img src="{{ url('/image/test-img.jpg') }}" alt="">
												<h5>Lorem Ipsum</h5>
												<p>Location Lorem Ipsum</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="testimonial-para">
									<div class="testimonial-matter">
										<div class="testimonial-rect">
											<span class="rect"></span>
										</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-lg-4">
								<div class="testimonial-section">
									<div class="testimonial-img">
										<div class="testimonial-back">
											<div class="testimonial-content">
												<img src="{{ url('/image/test-img.jpg') }}" alt="">
												<h5>Lorem Ipsum</h5>
												<p>Location Lorem Ipsum</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="testimonial-para">
									<div class="testimonial-matter">
										<div class="testimonial-rect">
											<span class="rect"></span>
										</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-lg-4">
								<div class="testimonial-section">
									<div class="testimonial-img">
										<div class="testimonial-back">
											<div class="testimonial-content">
												<img src="{{ url('/image/test-img.jpg') }}" alt="">
												<h5>Lorem Ipsum</h5>
												<p>Location Lorem Ipsum</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="testimonial-para">
									<div class="testimonial-matter">
										<div class="testimonial-rect">
											<span class="rect"></span>
										</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-lg-4">
								<div class="testimonial-section">
									<div class="testimonial-img">
										<div class="testimonial-back">
											<div class="testimonial-content">
												<img src="{{ url('/image/test-img.jpg') }}" alt="">
												<h5>Lorem Ipsum</h5>
												<p>Location Lorem Ipsum</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="testimonial-para">
									<div class="testimonial-matter">
										<div class="testimonial-rect">
											<span class="rect"></span>
										</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection
	<!--testimonial ended.-->