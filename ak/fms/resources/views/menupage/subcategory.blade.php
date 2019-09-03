@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

	<!--breadcrumb started.-->
	<section class="breadcrumb-inside">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html"><span class="fa fa-home"></span></a></li>
					<li class="breadcrumb-item"><a href="#">Art &amp; Craft</a></li>
					<li class="breadcrumb-item active" aria-current="page">Calligraphy</li>
				</ol>
				<button id="filter"> <span class="fa fa-sliders"></span> Filter</button>
			</nav>
		</div>
	</section>
	<!--breadcrumb ended.-->

	<!--wrap-10 started.-->
	<section class="wrap-10">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 order-2 order-lg-1">
					<div class="back-white-left">
						<div class="class-name">
							 
							@foreach($classnames as $classname)

							{{$classname->name}}


						 
							
						</div>
						<ul id="vertical" class="for-change">
						@foreach($classmedia as $classmedias)
							<li>
								<!-- <picture>
									<source media="(max-width:700px)" srcset="{{ url('/image/slider-1.jpg') }}">
									<source media="(min-width: 700px)" srcset="{{ url('/image/slider-1.jpg') }}">
									<img src="{{ url('/image/slider-1.jpg') }}" alt="Flowers" style="width:auto;">
								</picture> -->
								
							
							<img src="{{$classmedias->file_url}}" style="width:100%;">
							
							</li>
							@endforeach
							
						</ul>

						<div class="details-block">
							<h4>Details:</h4>
							<p>{{$classname->write_up}}</p>
						</div>

						<div class="aminity-all">
							<span>Aminities:</span>
							<span class="fa fa-glass"></span><span class="fa fa-glass"></span> <span class="fa fa-wifi"></span> <span class="fa fa-bus"></span> <span class="fa fa-building"></span> <span class="fa fa-camera"></span> <span class="fa fa-glass"></span> <span class="fa fa-wifi"></span> <span class="fa fa-bus"></span> <span class="fa fa-building"></span> <span class="fa fa-camera"></span> <span class="fa fa-glass"></span> <span class="fa fa-wifi"></span>
						</div>
						@endforeach
					</div>
					<div class="class-full-details">
						<div class="class-schdule">
							<div class="class-count">
							Classes {{$totalClass}}
							</div>
							<div class="class-header bor-bot">
								<div class="class-name2 float-left list-1 same-font padding-same-to-all">
									Class Name
								</div>
								<div class="float-left only">
									<div class="class-schdule2 float-left list-2 same-font padding-same-to-all d-none d-lg-block">
										Schedule
									</div>

									<div class="class-time2 float-left list-3 same-font padding-same-to-all d-none d-lg-block">
										Time
									</div>
									<div class="class-details2 float-left list-4 same-font padding-same-to-all d-none d-lg-block">
										Details
									</div>

									<div class="class-fee2 float-left list-5 same-font padding-same-to-all d-none d-lg-block">
										Fee
									</div>
									<div class="class-booking float-left same-font padding-same-to-all list-6 d-none d-lg-block">
										Booking
									</div>
								</div>
							</div>
						@foreach ($getallClass as $gelallclasses)
							<div class="class-row padding-same-to-all bor-bot">
								<div class="class-title float-left list-1 d-none d-lg-block">
									<p>{{$gelallclasses->name}}</p>
									<a href="#">read info</a>
								</div>
								<div class="accordion" id="accordion-2">
									<div class="card">
										<div class="card-header d-lg-none" id="accordion-2">
											<div class="class-title float-left list-1">
												<p>{{$gelallclasses->name}}</p>
												<a href="#">read info</a>
											</div>
											<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#class-1" aria-expanded="true" aria-controls="collapseOne">
												Details
											</button>
										</div>
										<div id="class-1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-2">
											<div class="card-body">
												<div class="d-lg-none small-see">
													Schedule
												</div>
												<div class="class-schedule-day float-left list-2 small-see">
													<span>S</span>
													<span>M</span>
													<span>T</span>
													<span>W</span>
													<span>T</span>
													<span>F</span>
													<span class="holiday">S</span>
												</div>
												<div class="d-lg-none small-see">
													Timing
												</div>
												<div class="class-timing float-left list-3 small-see">
												{{$gelallclasses->timing}} to {{$gelallclasses->endtiming}}
												</div>
												<div class="d-lg-none small-see">
													Age Group
												</div>
												<div class="class-age float-left list-4 small-see">
												{{$gelallclasses->write_up}}| on-going
												</div>
												<div class="d-lg-none small-see">
													Fee</div>
												<div class="class-fee float-left list-5 small-see">
												{{$gelallclasses->price}}
												</div>
												<div class="d-lg-none small-see">
													Booking</div>
												<div class="class-booking2 float-left list-6 small-see">
																<a id="button1" class="details edit" href="javascript:void(0)" data-toggle="modal" data-target="#uploadModals">Request a Trial</a>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							@endforeach
						</div>
					</div>

					<div class="location-full-details">
						<h2 class="bor-bot">Locations</h2>
						<div class="location padding-same-to-all bor-bot bor-top">
							<a href="https://goo.gl/maps/9MisERVo1Lq" target="_blank"><span class="fa fa-map-marker"></span> K-40, K Block, Jangpura Extention, Delhi - 110014</a>
							<a href="https://goo.gl/maps/9MisERVo1Lq" class="d-lg-block d-none float-right short" target="_blank">(view on map)</a>
						</div>
						<div class="location padding-same-to-all bor-bot bor-top">
							<a href="https://goo.gl/maps/9MisERVo1Lq" target="_blank"><span class="fa fa-map-marker"></span> K-40, K Block, Jangpura Extention, Delhi - 110014</a>
							<a href="https://goo.gl/maps/9MisERVo1Lq" class="d-lg-block d-none float-right short" target="_blank">(view on map)</a>
						</div>
						<div class="location padding-same-to-all bor-bot bor-top">
							<a href="https://goo.gl/maps/9MisERVo1Lq" target="_blank"><span class="fa fa-map-marker"></span> K-40, K Block, Jangpura Extention, Delhi - 110014</a>
							<a href="https://goo.gl/maps/9MisERVo1Lq" class="d-lg-block d-none float-right short" target="_blank">(view on map)</a>
						</div>
						<div class="location padding-same-to-all bor-bot bor-top">
							<a href="https://goo.gl/maps/9MisERVo1Lq" target="_blank"><span class="fa fa-map-marker"></span> K-40, K Block, Jangpura Extention, Delhi - 110014</a>
							<a href="https://goo.gl/maps/9MisERVo1Lq" class="d-lg-block d-none float-right short" target="_blank">(view on map)</a>
						</div>
						<div class="location padding-same-to-all bor-bot bor-top">
							<a href="https://goo.gl/maps/9MisERVo1Lq" target="_blank"><span class="fa fa-map-marker"></span> K-40, K Block, Jangpura Extention, Delhi - 110014</a>
							<a href="https://goo.gl/maps/9MisERVo1Lq" class="d-lg-block d-none float-right short" target="_blank">(view on map)</a>
						</div>
						<div class="location padding-same-to-all bor-bot bor-top">
							<a href="https://goo.gl/maps/9MisERVo1Lq" target="_blank"><span class="fa fa-map-marker"></span> K-40, K Block, Jangpura Extention, Delhi - 110014</a>
							<a href="https://goo.gl/maps/9MisERVo1Lq" class="d-lg-block d-none float-right short" target="_blank">(view on map)</a>
						</div>
					</div>

					<div class="review-full-details">
						<h2>Review</h2>

						<div class="review-text">
							<h3>4.6</h3>
							<p><span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</p>
							<h6><span class="fa fa-user"></span> 3,135461 total</h6>
						</div>
						<div class="review-bar">
							<div class="review-meter">5 4 3 2 1</div>
							<div class="review-bars">
								<p><span id="green"></span></p>
								<p><span id="light-green"></span></p>
								<p><span id="yellow"></span></p>
								<p><span id="dark-yellow"></span></p>
								<p><span id="red"></span></p>
							</div>
						</div>
					</div>
					<div class="all-reviews">
						<div class="review-list">
							<img src="images/user.png" alt="..">
							<h4>Sonam Sharma</h4>
							<p><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span></p>
							<p class="review-para">My daughter had an absolute wonderful time in the Fantasy Art. Such a creative outlet!</p>
						</div>
						<div class="review-list">
							<img src="images/user.png" alt="..">
							<h4>Sonam Sharma</h4>
							<p><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span></p>
							<p class="review-para">My daughter had an absolute wonderful time in the Fantasy Art. Such a creative outlet!</p>
						</div>
						<div class="review-list">
							<img src="images/user.png" alt="..">
							<h4>Sonam Sharma</h4>
							<p><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span></p>
							<p class="review-para">My daughter had an absolute wonderful time in the Fantasy Art. Such a creative outlet!</p>
						</div>
						<div class="review-list">
							<img src="images/user.png" alt="..">
							<h4>Sonam Sharma</h4>
							<p><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span></p>
							<p class="review-para">My daughter had an absolute wonderful time in the Fantasy Art. Such a creative outlet!</p>
						</div>
						<div class="review-view-more"><a href="#">View more</a></div>
					</div>
					<div class="write-panel">
						<h4>Write a reviews</h4>
	
					<form id="submitForm" method='post' action='' enctype="multipart/form-data">
				     	<input type="hidden" name="_token" value="{{csrf_token()}}">
								<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<input type="text" class="form-control" name="name" placeholder="Name" required>
									</div>
									<div class="col-md-6">
										<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
									</div>
									<div class="col-md-12">
										<textarea name="massege" id="massege " cols="30" rows="2" placeholder="Would you recommend this class, Why?"></textarea>
									</div>
								</div>
							</div>
							<div class="ratings">
								<p>Rate us: <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span></p>
								<div class="buttons">
									<button type="submit" class="btn">Request submit</button>
									<a href="#">Report an issue</a>
								</div>
							</div>

						</form>
					</div>
				</div>
				<div class="col-lg-3 order-1 order-lg-2">
					<div class="owner">
						<div class="owner-name">
							<img src="images/owner.png" alt="">
							<p>Posted By</p>
							<h3>Nitish Kumar</h3>
						</div>
					</div>
					<div class="owner-coaching-details">
						<p><span class="fa fa-map-marker"></span> Location <span class="float-right">Adarsh Nagar</span></p>
						<p><span class="fa fa-calendar"></span> Days <span class="float-right">Mon-Sat</span></p>
						<p><span class="fa fa-clock-o"></span> Timing <span class="float-right">900-5:00</span></p>
					</div>
					<div class="owner-contact">
						<a href="#">Request Call</a>
					</div>
					<div class="google-ads">
						<h5>Google ads master</h5>
						<img src="images/google-ads.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--.wrap-9 ended.-->
	<div id="uploadModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content working-panel payment">
        <div class="modal-header class-provider">
           <h4 class="modal-title">Request for class</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body class-form for-class">
          <!-- Form -->
          <form method='post' action='' enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="form-group">
              <div class="col-sm-10">
                <input type="hidden" class="form-control" id="fid" value="" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="middle" for="title">Name:</label>
              <input type="name" class="form-control" id="name" value="">
            </div>

            <div class="form-group">
              <label class="middle" for="title">Email:</label>
              <input type="name" class="form-control" id="name" value="">
            </div>

			<div class="form-group">
              <label class="middle" for="title">Phone Number:</label>
              <input type="name" class="form-control" id="name" value="">
            </div>


            <div class="form-group">
              <label class="middle" for="title">Address</label>
              <input type="name" class="form-control" id="name" value="">
            </div>

           
            <input type='button' class='btn btn-info' value='Upload' id='upload'>
          </form>
        </div>

      </div>

    </div>
  </div>
<script>
 $(document).on('click', "#button1", function () {
      $('#fid').val($(this).data('id'));
      $('#name').val($(this).data('name'));
      $('#dob').val($(this).data('dob'));
      $('#photo').attr("src", $(this).data('photo'));
      })
    
      $('#upload').click(function () {
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        var id = $("#fid").val();
        var name = $('#name').val();
        var dob = $('#dob').val();
        fd.append('file', files);
        fd.append('id', id);
        fd.append('name', name);
        fd.append('dob', dob);
        $.ajaxSetup({

          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        // AJAX request
        $.ajax({
          url: 'test',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function (data) {
          $('.item' + $('.id').text()).remove();
          window.location.replace('/user/allFamilyView');
        }
        });
      });



		$('#submitForm').on('submit', function(e) {
    e.preventDefault(); 
		$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
		});
    $.ajax({
        type: "POST",
				url: 'sendmail',
        data: $(this).serialize(),
        success: function(msg) {
        alert(msg);
        }
    });
});

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

</html>

@endsection

