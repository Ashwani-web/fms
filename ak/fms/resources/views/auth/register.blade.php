@extends('layouts.app')

@section('content')


<!--Registration started.-->
<section class="registration">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="img-height">
						<div class="img-middle">
							<img src=" {{ url('/public/image/meeting.png ') }}" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="fms-form">
						<h2>Register... :&#41;</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="input-prepend"><span class="fa fa-user-o"></span></div>
                            <label for="name" class="col-md-4 control-label"> Name</label>

                            <div class="col-md-6">
                                
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Name" autocomplete="off">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-prepend"><span class="fa fa-envelope"></span></div>
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email Address">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                        <div class="input-prepend"><span class="fa fa-phone"></span></div>
                        <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required placeholder="Phone">

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                        <div class="input-prepend"><span class="fa fa-user-o"></span></div>
                        <label for="phone_number" class="col-md-4 control-label">User Type</label>

                            <div class="col-md-6">
                                
                                <input  id="user_type" type="radio" name="user_type" value="custmor"><span style="display: inherit;margin-top: -18px;">Custmor</span>
                                <input id="user_type" type="radio" name="user_type" value="user"><span style="display: inherit;margin-top: -17px;">User </span>
                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-prepend"><span class="fa fa-lock"></span></div>
                        <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password"> 

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                        <div class="input-prepend"><span class="fa fa-lock"></span></div>
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Re-type password">
                            </div>
                        </div>

                        <div class="button-group">
                            <button type="submit" class="register">Register</button>
                            <a href="{{ route('login') }}" class="reset">Login</a>
                        </div>
                        </div>

                        <p class="join">Or you can join with</p><br>
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
	<!--Registration ended.-->

@endsection
