@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <section class="registration">
		<div class="container">
			<div class="row" style="margin-top: 80px;">
				<div class="col-lg-7">
					<div class="img-height">
						<div class="img-middle">
                        <img src=" {{ url('/public/image/meeting.png ') }}" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="fms-form">
						<h2>Log In... :&#41;</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-prepend"><span class="fa fa-user-o"></span></div>
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address / Mobile number" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                        <div class="button-group">
								<button type="submit" class="register">Login</button>
								<a href="{{ route('register') }}" class="reset">Register</a>
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
		</div>
	</section>
</div>
@endsection
