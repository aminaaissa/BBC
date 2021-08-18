<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title></title>
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
    
   
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
						
						
					</select>
                    </div>
                    <div class="right-phone-box">
                       
                    </div>
                    <div class="our-link">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item"><a class="nav-link" href="{{url('/ajouter_bon')}}"> Ajouter un bon de commande  </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/Compte')}}"> Mon Compte   </a></li>
                  
                        <li class="nav-item"><a class="nav-link" href="{{url('/logout-compte')}}">Se déconnecter</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                   
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
    
        <div class="container">
        <div class="title-left">
                                    <h3>MISSION DE CONTROLE TECHNIQUE (CTC) DE NORMALISATION DE RISQUE- MISSION M1</h3>
                                </div>
                                <form action="/saveBon" method="POST"enctype="multipart/form-data">
{{ csrf_field() }}
@error('email')
<span>
    <strong>{{ $message }}</strong>
</span>
@enderror
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Maitre de l’Ouvrage :</h3>
                        </div>
                  
                        <form class="needs-validation" novalidate>
                       

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Maitre de l’Ouvrage  *</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName"placeholder="" value="{{Auth::guard('web')->user()->Nom}}"readonly >
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Nif*</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="{{Auth::guard('web')->user()->Raisonsocial}}" readonly>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Adresse *</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="{{Auth::guard('web')->user()->Adresse}}" readonly>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Email*</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="{{Auth::guard('web')->user()->email}}" readonly>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Tél *</label>
                                    @if (Auth::guard('web')->user()->type=='1') 
                
                                    <input type="text" class="form-control" id="firstName" 
                                    placeholder="" value="{{Auth::guard('web')->user()->Telephone}}"
                                     readonly>
@else
<input type="text" class="form-control" id="firstName" 
                                    placeholder="" value=""
                                     readonly>
@endif


                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Fax*</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="{{Auth::guard('web')->user()->Fax}}" readonly>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                 
                            <div class="title-left">
                            
							  
                        </div>
                            <h3>Intitulé du Projet :  *</h3>
                            <div class="mb-3">
                              
                                <input type="text" class="form-control" id="address2" name="intitule_proj" placeholder=""> </div>
								
								 <label for="address2">Situation du Projet :  *</label>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Wilaya : *</label>
                                    <select name="CodeWilaya"class="browser-default custom-select">
                                    @foreach(App\Bwilaya::all() as $role)

  <option value="{{$role->commune}}" selected>{{$role->nom_wilaya}}</option>
  @endforeach
</select>
                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">Commune  *</label>
                                    <select name="CodeCommune"class="browser-default custom-select">
                                    @foreach(App\Bcommune::all() as $role)

  <option value="{{$role->CODE_Wilaya}}" selected>{{$role->nom_wilaya}}</option>
  @endforeach
</select>
                                    <div class="invalid-feedback"> </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Lieu  *</label>
                                    <input type="text" name="adress_proj"class="form-control" id="zip" placeholder="" required>
                                    <div class="invalid-feedback"> Zip code required. </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <table class="table"  style="border: 1px solid black;">
                        <tr>
                            <th>Surface TotaleDate prévisionnelledu Terrain D’Assiette en M²</th>
                            <th>Date prévisionnelle du début des travaux</th>
                            <th>DélaisdesTravaux en Mois</th>
                        </tr>
                        <tr>
                            <td><input type="text"name="SurfaceConstruitM2"  class="form-control" /></td>
                            <td><input type="date"name="DateDebuttravaux"  class="form-control" /></td>
                            <td><input type="date" name="DateDélaisTravaux"class="form-control" /></td>
                        </tr>
                      
                        </tr>    </table>
                           
                            <hr class="mb-4">
                            <div class="title"> <span>Avancement des études à la date du Bonde Commande :</span> </div>
                            <div class="d-block my-3">
                                
                                <label class="checkbox-inline">
  <input type="checkbox"name="AvantProjet" type="checkbox"value="1"> AvantProjet
</label><br>


<label class="checkbox-inline">
  <input type="checkbox"name="AvantProjet" type="checkbox"value="1"> Projetd’exécutionI </label>
  <br> 
  <label class="checkbox-inline">
  <input type="checkbox"name="Esquisse"type="checkbox"value="1">Esquisse </label>
                                
                            </div>
                            <br>  <br>  <br>
                            <hr class="mb-1"> </form>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                               
							
								 <div class="title-left">
                                    <h3>Maitred’œuvre :</h3>
                                </div>
                                <div class="mb-3">
                              
								 <label for="address2">Dénomination:  *</label>
                                <input type="text"name="maitre_oeuv" class="form-control"
                                 id="address2" placeholder=""> </div>
								
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Tél : *</label>
                                    <input type="text"name="maitre_oeuvTél" class="form-control" id="address2" placeholder="">
                                    <div class="invalid-feedback"> </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">Fax  *</label>
                                    <input type="text" name="maitre_oeuvFax"class="form-control" id="address2" placeholder="">
                                    <div class="invalid-feedback"> . </div>
                                </div>
                                
                            </div>
                                
                            </div>
							 <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Adresse *</label>
                                    <input type="text" class="form-control" name="maitre_oeuvAdresse" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Email*</label>
                                    <input type="text" class="form-control"name="maitre_oeuvEmail" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                                
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Bureau d’Etudes Techniques</h3>
                                </div>
                               
                                 <div class="mb-3">
                              
								 <label for="address2">Dénomination:  *</label>
                                <input type="text" name="bureau_etud"class="form-control" id="address2" placeholder=""> </div>
								
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Tél : *</label>
                                      @if (Auth::guard('web')->user()->type=='1') 
                 <input type="text"name="bureau_etudTél" class="form-control" 
             value="{{Auth::guard('web')->user()->Telephone}}" readonlyid="address2" placeholder=""readonly>
@else

<input type="text"name="bureau_etudTél" class="form-control" 
                                    value="" readonlyid="address2" placeholder="">
@endif


                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">Fax  *</label>
                                    @if (Auth::guard('web')->user()->type=='1') 
                                    <input type="text"name="bureau_etudFax" class="form-control" id="address2"value="{{Auth::guard('web')->user()->Fax}}" readonly>
                           @else      
<input type="text"name="bureau_etudTél" class="form-control" 
                                    value="" readonlyid="address2" placeholder="">
@endif   <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                              
                            </div>
                            <div class="title">
                            <div class="title-left">
                                    <h3>Laboratoire Etudesde Sol(Géotechnique) :</h3>
                                </div>  </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Dénomination :</label>
                                     <input type="text"name="laboratoire" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback"> Name on card is required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                <label for="cc-expiration">Email:</label>
                                    <input type="text"name="laboratoireEmail" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback"> Expiration date required </div>
                                </div>
                            </div>
                            <div class="row">
                            
                            <div class="col-md-6 mb-3">
                                    <label for="firstName">Adresse *</label>
                                    <input type="text" name="laboratoireAdresse" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div> 
                                </div>
                                
                            </div>
							 <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Tél *</label>
                                    <input type="text"name="laboratoireTél" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Fax*</label>
                                    <input type="text"name="laboratoireFax" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Ingénieur Chargé de l'Etude G.Civil *</label>
                                    <input type="text" class="form-control" name="IngControlleSite" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Numéro d'agrement Ingénieurs :*</label>
                                    <input type="text" class="form-control" name="IngNumeroagrement" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                        <div class="title-left">
                                    <h3>DESCRIPTION DES BATIMENTS et/ou OUVRAGES</h3>
                                </div>
                        <table class="table table-bordered" id="dynamicTable">  
            <tr>
            <th>Désignation du Bâtiment et/ou Ouvrage</th>
                            <th>EmpriseduBâtimentet /ou Ouvrageau Sol enm²</th>
                            <th>Nombre  d’EtagesduBâtimentet/ou Hauteurdel’ouvrage</th>
                            <th>Nombre deBâtimentset/ou Ouvrages</th>
                            <th>Action</th>
            </tr>
            <tr>  
                <td><input type="text" name="addmore[0][Désignation]"  class="form-control" /></td>  
                <td><input type="text" name="addmore[0][EmpriseduBatiment]"  class="form-control" /></td>  
                <td><input type="text" name="addmore[0][NombredEtages]"  class="form-control" /></td>  
                <td><input type="text" name="addmore[0][NombredeBatiment]"  class="form-control" /></td>  

                <td><button type="button" name="add" id="add" class="btn btn-success">Ajouter une ligne</button></td>  
            </tr>  
        </table> 
        <div class="col text-center">

        <button type="submit" value=" Enregistrez" class="btn btn-success" id="submit" >Enregistrez</button>
                       
                        </div>
                    </div>
                </div>
            </div>
</form>
        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    
    <!-- End Instagram Feed  -->


   
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
      
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    
<script type="text/javascript">
   
   var i = 0;
      
   $("#add").click(function(){
  
       ++i;
  
       $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][name]" class="form-control" /></td><td><input type="text" name="addmore['+i+'][name]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][qty]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][price]" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Supprimer</button></td></tr>');
   });
  
   $(document).on('click', '.remove-tr', function(){  
        $(this).parents('tr').remove();
   });  
  
</script>
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