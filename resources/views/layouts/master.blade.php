<!DOCTYPE html>
<<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Metas -->
    <title>Bon De Commande</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
@include('layouts.headre')
@yield('content')

@include('layouts.footer')


    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">

					<select  onchange="location = this.value;"id="basic" class="selectpicker show-tick form-control">
					<option>language</option>
					@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
					
 <option hreflang="{{ $localeCode }}"value="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }}</option>
 @endforeach
</select>
                    </div>

					
                    <div class="right-phone-box">
                        <p>Tél : <a href="#"> +213 023 77 57 97</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#">{{ __('messages.compte') }}</a></li>
                            <li><a href="#">{{ __('messages.location') }}  </a></li>
                            <li><a href="#">{{ __('messages.Contacter Nous') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    
    <!-- End Main Top -->

    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>{{ __('messages.Account') }}  </h3>
                    </div>
					<form class="mt-3 review-form-box collapse show" id="formRegister" style="">                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputEmail" class="mb-0">{{ __('messages.emailAddress') }}</label>
                                <input type="email" class="form-control" id="InputEmail" placeholder="{{ __('messages.email') }}"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword" class="mb-0">{{ __('messages.password') }} </label>
                                <input type="password" class="form-control" id="InputPassword" placeholder="{{ __('messages.password') }} "> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">{{ __('messages.Connexion') }}</button>
                    </form>
                   
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>{{ __('messages.New Account') }} </h3>
                    </div>
                   
                    <form class="mt-3 review-form-box collapse show" id="formRegister" style="">
                        <div class="form-row">
						<div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">{{ __('messages.Raison sociale') }} </label>
                                <input type="text" class="form-control" id="InputName" placeholder="{{ __('messages.Raison sociale') }}"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">{{ __('messages.NIF') }}</label>
                                <input type="text" class="form-control" id="InputLastname" placeholder="{{ __('messages.NIF') }}"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">{{ __('messages.name') }} </label>
                                <input type="text" class="form-control" id="InputName" placeholder="First Name"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">{{ __('messages.Prénom') }} </label>
                                <input type="text" class="form-control" id="InputLastname" placeholder="Last Name"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">{{ __('messages.emailAddress') }}</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="{{ __('messages.email') }}"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">{{ __('messages.password') }}  </label>
								<input type="password" class="form-control" id="InputPassword1" placeholder="{{ __('messages.password') }} "> </div>
								<div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">{{ __('messages.Téléphone') }}</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="{{ __('messages.Téléphone') }}"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">{{ __('messages.Fax') }}  </label>
								<input type="password" class="form-control" id="InputPassword1" placeholder="{{ __('messages.Fax') }} "> </div>
								<div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">{{ __('messages.Adresse') }}  </label>
								<input type="password" class="form-control" id="InputPassword1" placeholder="{{ __('messages.Adresse') }} "> </div>
								<div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">{{ __('messages.Qualité') }}  </label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="{{ __('messages.Qualité') }} "> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">{{ __('messages.inscription') }}</button>
                    </form>
                </div>
            </div>
            
    </div>

    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>



   


    <!-- Start Footer  -->
    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>