<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login</title>
    <!-- Favicon-->
    <link rel="icon" href="{{url('/')}}/admin_bsb/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{url('/')}}/admin_bsb/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{url('/')}}/admin_bsb/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{url('/')}}/admin_bsb/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{url('/')}}/admin_bsb/css/style.css" rel="stylesheet">
</head>

<body class="login-page" style="background-color: #FFC312">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Login <b>Kuuyyy</b></a>
            <small>Silakan Input Username dan Password mu :)</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="{{ route('login') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            
                        </div>
                        <div class="col-xs-4">
                            <a href="{{route('password.request')}}"><button class="btn btn-block bg-pink waves-effect" type="submit">LOGIN</button></a>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="{{route('register')}}">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="{{route('password.request')}}">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{url('/')}}/admin_bsb/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{url('/')}}/admin_bsb/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{url('/')}}/admin_bsb/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="{{url('/')}}/admin_bsb/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="{{url('/')}}/admin_bsb/js/admin.js"></script>
    <script src="{{url('/')}}/admin_bsb/js/pages/examples/sign-in.js"></script>
</body>

</html>