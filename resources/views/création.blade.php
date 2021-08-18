

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

.header{

background-color: #3c8dbc;
position:fixed;
left:0px;
padding: 0px;
top:0px;
height:50px;
width: 100%;
        color:red;
    }

</style>
<body>
  
<div class="container">
<div class="header">
dd

</div>

    <h1 style="color: #ff9600;font-weight: 800;text-align: center;"> Espace d'inscription</h1>
    <div class="flex signup">
    
      <div class="flex-item " style="background-color:white;">
                                <div id="registration-form">
                                                        <form action="{{ route('register.store') }}" method="POST"enctype="multipart/form-data">
                                                        {{ csrf_field() }}


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
</div>@endif

                
  <div class="form-group col-sm-6 col-xs-12">
    
      <label for="id_last_name">{{ __('messages.Raison sociale') }} *</label>
                                     <input id="name" type="text" width="250px" class="form-control "name="Raisonsocial" value="{{ old('Raison sociale') }}" > 
       @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
       
       
        </div>
    <div class="form-group col-sm-6 col-xs-12">
      
      <label for="prenom_four">NIF </label>*
      <input class="form-control" id="prenom_four"name="nif" placeholder="{{ __('messages.NIF') }}"required="required"  type="text" required="">
    </div>
    <div class="form-group col-sm-6 col-xs-12">
    
      <label for="id_last_name">Nom  *</label>*
                                     <input id="name" name="Nom"  type="text" width="250px" class="form-control @error('name') is-invalid @enderror"
       name="name" value="{{ old('name') }}"
       required autocomplete="name" autofocus> 
       @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
       
       
        </div>
    <div class="form-group col-sm-6 col-xs-12">
      
      <label for="prenom_four">Prénom  </label>*
      <input class="form-control" id="prenom_four"name="Prenom"value="{{ old('prenom_four') }}" maxlength="50" name="prenom_four" type="text" required="">
    </div>
     
    <!--           --->
    <div class="form-group col-sm-6 col-xs-12">
    
      <label for="id_last_name">Adresse électronique *  </label>*
                                     <input id="email" name="email"type="text" width="250px" class="form-control @error('email') is-invalid @enderror"
       name="name" value="{{ old('email') }}"
       required autocomplete="email" autofocus> 
       @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
       
       
        </div>
    <div class="form-group col-sm-6 col-xs-12">
      
      <label for="prenom_four">Mot de passe *  </label>
      <input class="form-control" id="password"value="{{ old('password') }}" maxlength="50" name="password" type="password" required="">
    </div>


     <!--           --->

  <div class="form-group col-sm-6 col-xs-12">
    
    <label for="id_last_name">wilaya </label>*
    <select name="country" id="country"class="form-control" required="required" data-error="Please specify your need.">

    

@foreach(App\Bwilaya::all() as $countryData)

<option value="{{$countryData->CODE_Wilaya}}" selected>{{$countryData->nom_wilaya}}</option>
@endforeach
</select>
     
     
      </div>
  <div class="form-group col-sm-6 col-xs-12">
    
    <label for="prenom_four">Commune  </label>
    <select name="state" id="state" class="form-control"required="">
<option>--Commune--</option>
</select>
  </div>

<!--           --->
<div class="form-group col-sm-6 col-xs-12">
    
    <label for="id_last_name">Téléphone   *</label>*
                                   <input id="name" name="Téléphone"type="number" width="250px" class="form-control "
     name="name" value="{{ old('name') }}"
     required autocomplete="name" autofocus> 
     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     
     
      </div>
  <div class="form-group col-sm-6 col-xs-12">
    
    <label for="prenom_four">Fax   </label>*
    <input class="form-control" id="Fax"value="{{ old('Fax') }}" maxlength="50" name="Fax" type="number" required="">
  </div>


  <!--           --->
  <div class="form-group col-sm-6 col-xs-12">
    
    <label for="id_last_name">Adresse    *</label>*
                                   <input id="type" type="text" width="250px" class="form-control @error('type') is-invalid @enderror"
     name="type" value="{{ old('type') }}"
     required autocomplete="name" autofocus> 
     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     
     
      </div>
  <div class="form-group col-sm-6 col-xs-12">
    
    <label for="prenom_four">Qualité     </label>*
    <input class="form-control" id="type"value="{{ old('type') }}" maxlength="50" name="type" type="text" required="">
  </div>

  
  <!--           --->
  <div class="form-group col-sm-6 col-xs-12">
    
  
    
    
    <label>Bureau Etude</label>
    <input type='checkbox'value="1"name="type" @if(old('BureauEtude') ==  1) checked="checked" @endif >
    <label>Laboratoire</label>
    <input type='checkbox'name="type" value="2" @if(old('Laboratoir') ==  1) checked="checked" @endif  >
    <label>Maitre de l'ouvrage </label>
    <input type='checkbox'name="type" value="3" @if(old('Bmaitre') ==  1) checked="checked" @endif  >
</div>
  

  <div class="col-xs-12">
    <button class="btn btn-primary" type="submit">S'INSCRIRE</button>
    <br>
    <a href="/" style="color:#3c8dbc">
              J’ai déjà un compte sur l’espace Client  du CTC  </a>
    
  </div>
  </div>  </div>  </div>
  <script>
$(document).ready(function() {
$('#country').change(function(){
var countryID = $(this).val();
if(countryID){
$.ajax({
type:"GET",
url:"{{url('getstatelist')}}?countryid="+countryID,
success:function(res){
if(res){
$("#state").empty();
$("#state").append('<option>Select</option>');
$.each(res,function(key,value){
$("#state").append('<option value="'+key+'">'+value+'</option>');
});
}else{
$("#state").empty();
}
}
});
}else{
$("#state").empty();
}
});
});
</script>
