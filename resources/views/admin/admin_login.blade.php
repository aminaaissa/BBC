<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> Admin </title>
    <!-- Favicon-->
    <link rel="icon" href="admin-asset/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="admin-asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="admin-asset/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="admin-asset/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="admin-asset/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>BDC</b></a>
          
        </div>
        <div class="card">
            <div class="body">
                <form action="{{ route('admin.login') }}"  method="POST">
                @csrf
              
                @if (count($errors) > 0)
@foreach($errors->all() as $error)
<p class="alert alert-danger">{{ $error}}</p>
@endforeach
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>
{{ $message }}
</p>
</div>
@endif
@if ($message = Session::get('warning'))
<div class="alert alert-warning">
<p>
{{ $message }}
</p>
</div>
@endif
                    <div class="msg">Connectez-vous pour démarrer votre session
</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="Matricule" placeholder="Matricule" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="admin-asset/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="admin-asset/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="admin-asset/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="admin-asset/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="admin-asset/js/admin.js"></script>
    <script src="admin-asset/js/pages/examples/sign-in.js"></script>
</body>

</html>