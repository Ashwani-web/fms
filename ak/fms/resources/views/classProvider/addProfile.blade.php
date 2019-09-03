@extends('layouts.classProviderPanel')
@section('content')
<div class="col-lg-9">
	<div class="working-panel">
		<div class="class-provider">
			<h4 class="float-left">My Profile</h4>
		</div>
		<div class="class-form">
			<form action="/action_page.php">
				<div class="row">
					<!--<div class="col-lg-6"><label for="username">Username</label> <input type="text" required id="username" autocomplete="off"></div>
									<div class="col-lg-6"><label for="password">Password</label> <input type="password" required id="password" autocomplete="off"></div>-->
					<div class="col-lg-6"><label for="name">Name</label> <input type="text" required id="name"
							autocomplete="off"></div>
					<div class="col-lg-6"><label for="location">Location</label><input type="text" required
							id="location" autocomplete="off"></div>
					<div class="col-lg-6"><label for="state">State</label>
						<select name="state" id="state">
							<option value="0" selected disabled>-- Choose State --</option>
							<option value="1">Uttar Pradesh</option>
							<option value="2">Uttar Pradesh</option>
							<option value="3">Uttar Pradesh</option>
							<option value="4">Uttar Pradesh</option>
							<option value="5">Uttar Pradesh</option>
							<option value="6">Uttar Pradesh</option>
							<option value="7">Uttar Pradesh</option>
							<option value="8">Uttar Pradesh</option>
							<option value="9">Uttar Pradesh</option>
							<option value="10">Uttar Pradesh</option>
							<option value="11">Uttar Pradesh</option>
							<option value="12">Uttar Pradesh</option>
						</select>
					</div>
					<div class="col-lg-6"><label for="city">City</label><input type="text" required id="city"
							autocomplete="off"></div>
					<div class="col-lg-6"><label for="email">Email</label><input type="email" required id="email"
							autocomplete="off"></div>
					<div class="col-lg-6"><label for="phone">Phone</label> <input type="number" required id="phone"
							autocomplete="off"></div>
					<div class="col-lg-12"><label for="query" style="vertical-align: top">Write Up</label><textarea
							name="query" id="query" cols="30" rows="5"></textarea></div>
					<div class="col-lg-12"><label for="pic" class="middle">Photos</label> <input class="file" id="pic"
							type="file" accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile()">
						<p class="photo"> No file chosen<span>Choose File</span></p>
					</div>
					<div class="for-pictures">
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
					</div>
					<div class="col-lg-12"><label for="video" class="middle">Videos</label> <input class="file"
							id="video" type="file" accept="video/mp4,video/x-m4v,video/*">
						<p class="video"> No file chosen<span>Choose File</span></p>
					</div>
					<div class="for-pictures">
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
						<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span
								class="fa fa-times"></span></div>
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-4 scoring">
						<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
					</div>
					<div class="col-lg-6"><label for="score">FMS score</label> <input id="score" type="text"
							value="8/10" readonly></div>
					<div class="col-lg-6"><label for="review">Review &amp; ratings</label> <input id="review"
							type="text" value="4.5/5" readonly></div>
					<div class="col-lg-12"><button class="submit" type="submit">Submit</button></div>
				</div>
			</form>
		</div>
	</div>
</div>



<script type="text/javascript">

	function showCustmoreImage(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('.showImage').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	function showSpouseImage(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('.showSpouseImage').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}


	function showImage(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('.showChieldImage').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$(".priviewImage").change(function () {
		showCustmoreImage(this);
	});


	$(".priviewSpouseImage").change(function () {
		showSpouseImage(this);
	});

	$(".priviewChieldImage").change(function () {
		showImage(this);


	});




	$('.preview').click(function (e) {
		$(this).parent().find('img').remove();
	});


</script>

@endsection