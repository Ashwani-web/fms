@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
    <section class="registration ">
		<div class="container">
			<div class="row" style="margin-top: 80px;">
				<div class="col-lg-7">
					<div class="img-height">
						<div class="img-middle">
<<<<<<< Updated upstream
                        <img src=" {{ url('/image/meeting.png') }}" alt="">
=======
                        <img src=" {{ url('/image/meeting.png ') }}" alt="">
>>>>>>> Stashed changes
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="fms-form">
						<h2>Log In... :&#41;</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

                        <form class="form-horizontal" method="POST" action="{{ url('login') }}">
                        {{ csrf_field() }}
						<input type="hidden" name="email" required id="user_name" value="" placeholder="Email Address / Mobile number" autocomplete="off">
                        <div class="form-group">
                                <div class="input-prepend"><span class="fa fa-user-o"></span></div>
                                <input type="email" name="email" required id="user_name" value="{{ old('email') }}" placeholder="Email Address / Mobile number" autocomplete="off">
								
                                <span class="help-block">
                                    <strong></strong>
                                 </span>
                            </div>
                            <div class="form-group">
								<div class="input-prepend"><span class="fa fa-lock"></span></div>
								<input type="password"  id="password" required id="password" name="password" placeholder="Password" autocomplete="off">
								<span class="fa fa-eye show" onclick="myFunction()"></span>
                                <span class="help-block">
                                            <strong></strong>
                                </span>
                        
                        	</div>


                            <div class="button-group">
                                    <button type="submit" class="register">Login</button>
                                    <a href="{{ url('registers') }}" class="reset">Register</a>
                            </div>

                            <p class="join">Or you can join with</p><br>
                                <div class="join-link">
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
