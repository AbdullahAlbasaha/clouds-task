<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin|Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset('admins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admins/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admins/plugins/iCheck/square/blue.css')}}">


</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Login</b> </a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg ">Sign in to start your session</p>
        <p class="login-box-msg text-red"><strong>{{ $errors->first('loginFailed') }}<strong></p>
        <form action="{{ url('admin/login') }}" method="post">
                 @csrf
            <div class="form-group has-feedback {{ $errors->has('email')?"has-error":"" }}">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <strong class="text-red">{{ $errors->first('email') }}</strong>
            </div>

            <div class="form-group has-feedback {{ $errors->has('password')?"has-error":"" }}">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <strong class="text-red">{{ $errors->first('password') }}</strong>
            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('admins/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('admins/bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>
