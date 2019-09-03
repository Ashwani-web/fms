@extends('layouts.classProviderPanel')
@section('content')
<div class="col-lg-9">
					<div class="working-panel">
						<div class="class-provider">
							<h4 class="float-left">Class</h4>
						</div>
						<div class="class-form for-class">
							<form action="/action_page.php">
								<div class="row">
									<div class="col-lg-12"><label for="c_name" class="middle">Class name</label> <input type="text" required id="c_name" autocomplete="off"></div>
									<div class="col-lg-6"><label for="category">Category</label>
										<select name="category" id="category">
											<option value="0" selected disabled>-- Choose Category --</option>
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
									<div class="col-lg-6"><label for="sub_category">Subcategory</label>
										<select name="sub_category" id="sub_category">
											<option value="0" selected disabled>-- Choose Subcategory --</option>
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
									<div class="col-lg-12"><label for="pic" class="middle">Photos</label> <input class="file" id="pic" type="file" accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile()">
										<p class="photo"> No file chosen<span>Choose File</span></p>
									</div>
									<div class="for-pictures for-provider">
										<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span class="fa fa-times"></span></div>
										<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span class="fa fa-times"></span></div>
										<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span class="fa fa-times"></span></div>
										<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span class="fa fa-times"></span></div>
										<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span class="fa fa-times"></span></div>
									</div>
									<div class="col-lg-12"><label for="video" class="middle">Videos</label> <input class="file" id="video" type="file" accept="video/mp4,video/x-m4v,video/*">
										<p class="video"> No file chosen<span>Choose File</span></p>
									</div>
									<div class="for-pictures for-provider">
										<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span class="fa fa-times"></span></div>
										<div class="preview"><img src="../images/Add%20Class.jpg" alt=""><span class="fa fa-times"></span></div>
									</div>
									<div class="col-lg-12"><label for="query" style="vertical-align: top">Write Up</label><textarea name="query" id="query" cols="30" rows="5"></textarea></div>
									<!--<div class="col-lg-4 scoring">
										<label for="safety">Safety</label><input type="number" maxlength="1"> / 10
									</div>-->
									<div class="col-lg-6"><label for="date">Class schedule</label> <input type="date" id="date"></div>
									<div class="col-lg-6"><label for="time">Class time</label> <input type="time" id="time"></div>
									<div class="col-lg-6"><label for="price">Price</label> <input id="price" type="number"></div>
									<div class="col-lg-6"><label for="review">Review &amp; ratings</label> <input id="review" type="text" value="4.5/5" readonly></div>
									<div class="col-lg-12 big">
										<h5 class="small1">Achievements List</h5>
										<div class="row">
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
											<div class="col-lg-3 col-sm-6 achievement">
												<label for="achi1">Achievement 1</label>
												<input type="checkbox" id="achi1">
											</div>
										</div>
									</div>
									<div class="col-lg-12"><label for="total_seats" class="middle">Total seats</label> <input type="text" id="total_seats"></div>
									<div class="col-lg-6 seats">
										<label for="seats_left">Seats-left</label> <input type="number" id="seats_left">
									</div>
									<div class="col-lg-6 seats">
										<label for="seats_enrolled">Seats enrolled</label> <input type="number" id="seats_enrolled" style="width: calc(100% - 110px)">
									</div>
									<div class="col-lg-12"><button class="submit" type="submit">Submit</button></div>
								</div>
							</form>
						</div>
					</div>
				</div>
@endsection