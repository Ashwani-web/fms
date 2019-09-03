<!DOCTYPE html>
<html>

<head>
    <title>FmS Login Panel</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Overlock|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
<![endif]-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">

</head>

<body>
    <!--Nav bar Started.-->
    <div class="nav-fixed">
        <nav id="header-back">
            <div class="container">
                <div class="row">
                    <div class="col-2"><a class="logo" href="index.html"><img src="/image/logo.png" alt=""></a></div>
                </div>
            </div>
        </nav>
    </div>
    <div class="header-gap"></div>
    <!--Nav bar Ended.-->

    <!--Registration started.-->
    <section class="registration">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="fms-form">
                        <h2>Admin Log In... :&#41;</h2>

                        <form class="form-horizontal" method="POST" action="{{ route('admin.adminlogin.submit') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-prepend"><span class="fa fa-user-o"></span></div>

                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address">

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="input-prepend"><span class="fa fa-lock"></span></div>
                                

                                    <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            <div class="button-group">
                                <button type="submit" class="register">Login</button>

                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Registration ended.-->
</body>

</html>