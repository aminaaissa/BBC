<html>
    <head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>



<style>body {
color: #000;
overflow-x: hidden;
height: 100%;
background-color: #FFFFFF;
background-repeat: no-repeat
}

.card0 {

border-radius: 0px
}

.card2 {
margin: 0px 40px
}

.logo {
width: 200px;
height: 100px;
margin-top: 20px;
margin-left: 35px
}

.image {
width: 360px;
height: 280px
}

.border-line {
border-right: 1px solid #EEEEEE
}

.facebook {
background-color: #3b5998;
color: #fff;
font-size: 18px;
padding-top: 5px;
border-radius: 50%;
width: 35px;
height: 35px;
cursor: pointer
}

.twitter {
background-color: #1DA1F2;
color: #fff;
font-size: 18px;
padding-top: 5px;
border-radius: 50%;
width: 35px;
height: 35px;
cursor: pointer
}

.linkedin {
background-color: #2867B2;
color: #fff;
font-size: 18px;
padding-top: 5px;
border-radius: 50%;
width: 35px;
height: 35px;
cursor: pointer
}

.line {
height: 1px;
width: 45%;
background-color: #E0E0E0;
margin-top: 10px
}

.or {
width: 10%;
font-weight: bold
}

.text-sm {
font-size: 14px !important
}

::placeholder {
color: #BDBDBD;
opacity: 1;
font-weight: 300
}

:-ms-input-placeholder {
color: #BDBDBD;
font-weight: 300
}

::-ms-input-placeholder {
color: #BDBDBD;
font-weight: 300
}

input,
textarea {
padding: 10px 12px 10px 12px;
border: 1px solid lightgrey;
border-radius: 2px;
margin-bottom: 5px;
margin-top: 2px;
width: 100%;
box-sizing: border-box;
color: #2C3E50;
font-size: 14px;
letter-spacing: 1px
}

input:focus,
textarea:focus {
-moz-box-shadow: none !important;
-webkit-box-shadow: none !important;
box-shadow: none !important;
border: 1px solid #304FFE;
outline-width: 0
}

button:focus {
-moz-box-shadow: none !important;
-webkit-box-shadow: none !important;
box-shadow: none !important;
outline-width: 0
}

a {
color: inherit;
cursor: pointer
}

.btn-blue {
background-color: #ff9600;
width: 150px;
color: #fff;
border-radius: 2px
}

.btn-blue:hover {
background-color: #ff9600;
cursor: pointer
}

.bg-blue {
color: #fff;
background-color: #3c8dbc
}

@media screen and (max-width: 991px) {
.logo {
margin-left: 0px
}

.image {
width: 300px;
height: 220px
}

.border-line {
border-right: none
}

.card2 {
border-top: 1px solid #EEEEEE !important;
margin: 0px 15px
}
}</style>
<br><br><center>
<img src="{{asset('images/EN-TETE 09 Final.png')}}" alt=""></center>
<br><br><br><br><br><br><br><br><br>
<div class="">
    <body>

        <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

              

                    <!-- We're going to place the form here in the next step -->
                   
<form class="mt-3 review-form-box collapse show" action="{{ route('register.store') }}" method="POST"  style="">
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

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">{{ __('messages.Raison sociale') }} *</label>
                    <input id="form_name" type="text" class="form-control @error('Raisonsocial') is-invalid @enderror" name="Raisonsocial" value="{{ old('Raison sociale') }}" 
                    required autocomplete="name" autofocus>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">{{ __('messages.NIF') }} *</label>
                    <input id="form_lastname" type="text" name="nif" placeholder="{{ __('messages.NIF') }}"required="required" data-error="Lastname is NIF.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">{{ __('messages.name') }} *</label>
                    <input id="form_email" type="text" name="Nom"  required="required"class="form-control" required="required" data-error="Valid Nom is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email"> {{ __('messages.Prénom') }} *</label>
                    <input id="form_email" type="text" name="Prenom" class="form-control" required="required" data-error="Valid Prenom is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div><div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">   {{ __('messages.emailAddress') }} *</label>
                    <input id="form_email" type="text" name="email"type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"ata-error="Valid Prenom is required.">
                  
@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">     {{ __('messages.password') }}  *</label>
                    <input id="form_email" type="password" name="password" placeholder="{{ __('messages.password') }} ">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

 <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">{{ __('messages.wilaya') }}*</label>
                    <select name="country" id="country"class="form-control" required="required" data-error="Please specify your need.">

@foreach(App\Bwilaya::all() as $countryData)

<option value="{{$countryData->CODE_Wilaya}}" selected>{{$countryData->nom_wilaya}}</option>
@endforeach
</select>
                    <div class="help-block with-errors"></div>
                </div>
            </div><div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Commune*</label>
                    <select name="state" id="state" class="form-control">
<option>--Commune--</option>
</select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
        </div>
       

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname"> {{ __('messages.Téléphone') }} *</label>
                    <input id="form_lastname" type="text" name="Téléphone" placeholder="{{ __('messages.Téléphone') }}"required="required" data-error="Lastname is NIF.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname"> {{ __('messages.Fax') }} *</label>
                    <input id="form_lastname" type="text" name="Fax" placeholder="{{ __('messages.Fax') }}"required="required" data-error="Lastname is Fax.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            </div> 
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname"> {{ __('messages.Adresse') }} *</label>
                    <input id="form_lastname" type="text" name="Adresse" placeholder="{{ __('messages.Adresse') }}"required="required" data-error="Lastname is Adresse.">
                    <div class="help-block with-errors"></div>
                </div></div>
               
                <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">  {{ __('messages.Qualité') }} *</label>
                    <input id="form_lastname" type="text" name="Qualité" placeholder="{{ __('messages.Qualité') }}"required="required" data-error="Lastname is Qualité.">
                    <div class="help-block with-errors"></div>
                </div></div>
            </div> 
            <div class="form-group col-md-6">
                   <div class="form-check">  
                        <label class="form-check-label" for="check1">  
                            <input type="checkbox" class="form-check-input" value="1"name="type" @if(old('BureauEtude') ==  1) checked="checked" @endif >Bureau Etude  
                        </label>  
                    </div>  
                    <div class="form-check">  
                        <label class="form-check-label" for="check2">  
                            <input type="checkbox" class="form-check-input" name="type" value="2" @if(old('Laboratoir') ==  1) checked="checked" @endif />Laboratoir  
                        </label>  
                    </div>
                    <div class="form-check">  
                        <label class="form-check-label" for="check2">  
                            <input type="checkbox" class="form-check-input"name="type" value="3" @if(old('Bmaitre') ==  1) checked="checked" @endif />Bmaitre  
                        </label>  
                    </div>  </div> 
           
            <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Inscription</button> </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                <center> <strong>*</strong> <a   href="/"style="color:#ff9600;">   J’ai déjà un compte sur l’espace Clients du CTC 
</a> J’ai déjà un compte sur l’espace Clients du CTC
                   </p>
            </div>
        </div>
    </div>

</form>
                </div>

            </div>

        </div>


       
                    <center><div class="bg-blue py-4">
<div class="row px-3"><small class="ml-4 ml-sm-5 mb-2">     <center>Copyright CTC 2020 Espace Clients  </center>
</small>
</div>
</div></center>
</div>
</div>
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




        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <script src="contact.js"></script>
    </body>
</html>