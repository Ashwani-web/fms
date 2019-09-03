<!--Registration started.-->
@extends('layouts.app')

@section('content')
<section class="registration" style="display:block" id="user_registration" > 
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="img-height">
						<div class="img-middle">
						<img src="{{ url('/public/image/meeting.png ') }}" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="fms-form">
						<h2>Register... :&#41;</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

						<form method="POST" action="{{ url('/register') }}">
						{{ csrf_field() }}
						
							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								<div class="input-prepend"><span class="fa fa-user-o"></span></div>
								<input type="text" required id="name"name="name" placeholder="Name" autocomplete="off">
								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong> {{ $errors->first('name') }}</strong>
                                    </span>
									@endif
							</div>
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<div class="input-prepend"><span class="fa fa-envelope"></span></div>
								<input type="email" required id="email" name="email" placeholder="Email Address" autocomplete="off">
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
								<div class="input-prepend"><span class="fa fa-phone"></span></div>
								<input type="number" required id="phone_number" name="phone_number" maxlength="10" placeholder="Phone" autocomplete="off">
								@if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
									@endif
							</div>

							<div class="form-group{{ $errors->has('user_type') ? ' has-error' : '' }}">
								<div class="input-prepend"><span class="fa fa-filter"></span></div>
								<select name="user_type" id="">
									<option value="0"> -- Choose type -- </option>
									<option value="user">User</option>
									<option value="class provider">Class Provider</option>
								</select>
								@if ($errors->has('user_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_type') }}</strong>
                                    </span>
									@endif
							</div>
							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<div class="input-prepend"><span class="fa fa-lock"></span></div>
								<input type="password" required id="password" name="password" placeholder="Password" autocomplete="off">
								<span class="fa fa-eye show" onclick="myFunction()"></span>
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
									@endif
							</div>
							<div class="form-group">
								<div class="input-prepend"><span class="fa fa-lock"></span></div>
								<input type="password" required id="password_confirmation" name="password_confirmation" placeholder="Re-type password" autocomplete="off">
							</div>
							<div class="button-group">
                            <button type="submit" class="register">Register</button>
                            <a href="{{ url('login') }}" class="reset">Login</a>
                            </div>
							<p class="join">Or you can join with</p>
							<div class="join-link">
								<a href="#"><img src=" {{ url('/public/image/google.png ') }}" alt=""></a>
								<a href="#"><img src=" {{ url('/public/image/facebook.png ') }}" alt=""></a>
							</div> 
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
	function myFunction() {
	var x = document.getElementById("password");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}
</script>
	@endsection
	

	<!--Registration ended.-->