

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ctc') }}</title>

    <!-- Scripts -->
    <script src="{{asset('admin-asset/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{asset('admin-asset/css/3dd76dd9d38b.css') }}" rel="stylesheet">
  
    <link href="{{asset('admin-asset/css/app.css') }}" rel="stylesheet">
    <link href="{{asset('admin-asset/css/a15f99dab305.css') }}" rel="stylesheet">

    
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
html{
  background: url('/images/silhouette-of-a-city-213.png?5b762c809e63') no-repeat center bottom #fff;
  
  
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;}

html.login body{background:transparent}
    .body{color: !important;padding-top:0px !important; }
*.header .navbar{

background-color:#3c8dbc;
color:#FFF;
}

.header .navbar ul {

list-style: none;
padding-left: 0;
overflow: hidden;
}
.header .navbar ul li {
float: left;
padding: 10px;

list-style: none;

}</style>
<body>
<div class="header">
<div class="navbar">

</div>

</div>
  
    <br><br> <br><br>
<div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        <div class="box box-solid">

          <div class="box-body">
            <p class="text-center text-login" style="font-size:17px">Connectez-vous à l’espace client du CTC </p>
            <br>
            <p class="text-center text-muted">Se connecter avec votre compte CTC</p>
            <div class="row">

              <!-- loginForm -->
              <div class="col-sm-7 login-block with-border">

              


                <p class="text-center text-muted" style="font-size:17px">Identifiez-vous</p>
               
                  <form method="POST" action="{{url('/login-user')}}">
                    {{csrf_field()}}

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
                  
          
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label" style="font-size:17px">
                                Adresse mail :</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                              
                            </div>
                        </div><br><br>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="font-size:17px">Mot de passe :</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control"name="password" required>

                               
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                Connectez-vous
                                </button>
                                <br>  <br>  <br>  <br>  <br>  <br>
          
                            </div>
                        </div>
                      
                        
                    </form>
              </div>
              <!-- ./loginForm -->

              <!-- register -->
              <div class="col-sm-5 login-block">
                <p class="text-center text-muted" style="font-size:17px">Pas encore de compte ?</p>
                <p class="text-center">
                  <small  style="font-size:17px">Inscrivez-vous gratuitement en créant votre compte.</small>
                </p>
                <div class="actions-block text-right">
                 
                  <a class="btn btn-primary btn-skin" href="/registerClient"  style="font-size:17px">S'inscrire</a>
                </div>
              </div>
              <!-- ./register -->

            </div>
          </div>
        </div>
     
      </div>
     <style>