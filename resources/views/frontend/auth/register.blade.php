<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset('admins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('admins/dist/css/AdminLTE.min.css')}}">

</head>
<body>
    <style>
        body {
        padding-top: 90px;
    }
    .panel-login {
        border-color: #ccc;
        -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
    }
    .panel-login>.panel-heading {
        color: #00415d;
        background-color: #fff;
        border-color: #fff;
        text-align:center;
    }
    .panel-login>.panel-heading a{
        text-decoration: none;
        color: #666;
        font-weight: bold;
        font-size: 15px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }
    .panel-login>.panel-heading a.active{
        color: #029f5b;
        font-size: 18px;
    }
    .panel-login>.panel-heading hr{
        margin-top: 10px;
        margin-bottom: 0px;
        clear: both;
        border: 0;
        height: 1px;
        background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    }
    .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
        height: 45px;
        border: 1px solid #ddd;
        font-size: 16px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }
    .panel-login input:hover,
    .panel-login input:focus {
        outline:none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        border-color: #ccc;
    }
    .btn-login {
        background-color: #59B2E0;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #59B2E6;
    }
    .btn-login:hover,
    .btn-login:focus {
        color: #fff;
        background-color: #53A3CD;
        border-color: #53A3CD;
    }
    .forgot-password {
        text-decoration: underline;
        color: #888;
    }
    .forgot-password:hover,
    .forgot-password:focus {
        text-decoration: underline;
        color: #666;
    }

    .btn-register {
        background-color: #1CB94E;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #1CB94A;
    }
    .btn-register:hover,
    .btn-register:focus {
        color: #fff;
        background-color: #1CA347;
        border-color: #1CA347;
    }

    </style>
    <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">

                                <div class="col-xs-12">
                                    <a href="#" id="register-form-link">Register</a>
                                </div>
                                <div class="col-xs-12">
                                    <p class="login-box-msg text-red"><strong>{{ $errors->first('loginFailed') }}<strong></p>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="register-form" action="{{ route('register') }}" method="post" role="form" >
                                        @csrf
                                        <div class="form-group has-feedback {{ $errors->has('name')?"has-error":"" }}">
                                            <input type="text" name="name" id="username" tabindex="1" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                            <strong class="text-red">{{ $errors->first('name') }}</strong>
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('email')?"has-error":"" }}">
                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="{{ old('email') }}">
                                            <strong class="text-red">{{ $errors->first('email') }}</strong>
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('password')?"has-error":"" }}">
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                                 <strong class="text-red">{{ $errors->first('password') }}</strong>
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('password')?"has-error":"" }}">
                                            <input type="password" name="password_confirmation" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                                 <strong class="text-red">{{ $errors->first('password') }}</strong>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                </div>
                                                <div class="col-sm-6 col-sm-offset-1">
                                                    <a href="{{ route('login') }}" class="btn btn-primary">login</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery 2.2.3 -->
<script src="{{ asset('admins/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('admins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script>
        $(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
         $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
         $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

    });

    </script>

</body>
</html>
