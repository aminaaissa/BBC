
<!DOCTYPE html>
<html>

<head>
@include('front.layoutsfront.head-front')

</head>
@extends('front.layoutsfront.header-front')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Bon de commande Validée</div><?php $client=App\B_bcommande::where('client_id','=',Auth::guard('web')->user()->id)->count();?>
                            <div class="number count-to" data-from="0" data-to="{{$client}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section class="content">
   
       <div class="container-fluid"style="padding-left:0px;important!">
           
          

   
                            <form action="/saveBon" method="POST"enctype="multipart/form-data">
{{ csrf_field() }}
@error('email')
<span>
<strong>{{ $message }}</strong>
</span>
@enderror

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                        <div class="row">
                        @if (Auth::guard('web')->user()->type == 3) 
                        
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Maitre de l’Ouvrage  *</label>
                                <input type="text"style="width: 200%;"  class="form-control" id="firstName" name="MaitreOuvrage"placeholder="" value="{{Auth::guard('web')->user()->Nom}}"readonly >
                            </div>
                            @else
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Maitre de l’Ouvrage  *</label>
                                <input type="text"style="width: 200%;"  class="form-control" id="firstName" name="MaitreOuvrage"placeholder="" value="" >
                            </div>
                            @endif

                        </div> 
                        <div class="row">
                        @if (Auth::guard('web')->user()->type == 3) 
                        <div class="col-md-6 mb-3">
                      
                                <label for="firstName">Adresse *</label>
                                <input type="text" class="form-control"style="width: 200%;"  id="MaitreOuvrageAdr" placeholder="" value="{{Auth::guard('web')->user()->Adresse}}" readonly>
                               

                            </div>
                            
                            @else
                            <div class="col-md-6 mb-3">
                      
                      <label for="firstName">Adresse *</label>
                      <input type="text" name="MaitreOuvrageAdr"class="form-control" id="firstName" >

                        </div>                                 
@endif
                        <div class="row">
                        @if (Auth::guard('web')->user()->type == 3) 
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Raison social*</label>
                                <input type="text" class="form-control" name="MaitreOuvrageRS" placeholder="" value="{{Auth::guard('web')->user()->Raisonsocial}}" readonly>
                            </div>
                            @else
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Raison social*</label>
                                <input type="text" class="form-control" id="lastName"name="MaitreOuvrageRS" placeholder="" value="" >
                            </div>
                            @endif
                            @if (Auth::guard('web')->user()->type == 3) 
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Nif*</label>
                                <input type="text" class="form-control" id="lastName"  name="MaitreOuvrageNif"placeholder="" value="{{Auth::guard('web')->user()->Nif}}" readonly>
                            </div>
                            @else
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Nif*</label>
                                <input type="text" class="form-control"  name="MaitreOuvrageNif"id="lastName" placeholder="" value="" >
                            </div>
                            @endif
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Tél *</label>
                                @if (Auth::guard('web')->user()->type == 3) 
            
                                <input type="text" class="form-control" id="firstName" 
                                placeholder="" name="MaitreOuvrageTel"value="{{Auth::guard('web')->user()->Telephone}}"
                                 readonly>
@else
<input type="text" name="Telephone"class="form-control" id="firstName" name="MaitreOuvrageTel"
                                placeholder="" value=""
                                 >
@endif


                              
                            </div>
                            @if (Auth::guard('web')->user()->type == 3) 
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Email*</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" name="MaitreOuvrageEmail"value="{{Auth::guard('web')->user()->email}}" readonly>
                            </div>
                            @else
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Email*</label>
                                <input type="text" class="form-control" id="lastName"  name="MaitreOuvrageEmail"placeholder="" value="" >
                            </div>
                            @endif
                            @if (Auth::guard('web')->user()->type == 3) 
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Fax*</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" name="MaitreOuvrageFax" value="{{Auth::guard('web')->user()->Fax}}" readonly>
                            </div>
                            @else
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Fax*</label>
                                <input type="text" class="form-control" id="lastName" name="MaitreOuvrageFax"placeholder="" value="" >
                            </div>
                            @endif
                        </div>
                        <div class="input-group">
                        <center><h3>BON DE COMMANDE
</h3></center>
                    </div>
                    <div class="input-group">
                        <center><h3>
                    MISSION DE CONTROLE TECHNIQUE (CTC) DE NORMALISATION DE RISQUE- MISSION M1
                    </h3></center>
                    </div>
                    <h3>Intitulé du Projet :  *</h3>
                        <div class="mb-3">
                          
                            <input type="text" class="form-control" id="address2" name="intitule_proj" placeholder=""> </div>
                          <br>
                             <label for="address2">Situation du Projet :  *</label>
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Wilaya : *</label>
                                <select name="country" id="country"class="form-control" required="required" data-error="Please specify your need.">

@foreach(App\Bwilaya::all() as $countryData)

<option value="{{$countryData->CODE_Wilaya}}" selected>{{$countryData->nom_wilaya}}</option>
@endforeach
</select>
                            
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Commune  *</label>
                                <select name="state" id="state" class="form-control">
<option>--Commune--</option>
</select>
                                <div class="invalid-feedback"> </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">Lieu  *</label>
                                <input type="text" name="adress_proj"class="form-control" id="zip" placeholder="" required>
                               
                            </div>
                        </div>
                        <div class="input-group"> <h3> Avancement des études à la date du Bon de Commande :</h3> </div>
                        
                        <div>
  <input type="checkbox" id="AvantProjet" name="AvantProjet">
  <label for="AvantProjet">AvantProjet</label>
  <input type="checkbox" id="Projetd’exécution" name="Projetd’exécution">
  <label for="Projetd’exécution">Projetd’exécution</label>
  <input type="checkbox" id="Esquisse" name="Esquisse">
  <label for="Esquisse">Esquisse</label>
</div>

                        <div class="input-group">
                                <h3>Maitred’œuvre :</h3>
                            </div>
                            <div class="mb-3">
                          
                          <label for="address2">Dénomination:  *</label>
                         <input type="text"name="maitre_oeuv" class="form-control"
                          id="address2" placeholder=""> 
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Adresse *</label>
                                <input type="text" class="form-control" name="maitre_oeuvAdresse" id="firstName" placeholder="" value="" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Email*</label>
                                <input type="text" class="form-control"name="maitre_oeuvEmail" id="lastName" placeholder="" value="" >
                            </div>
                        </div>
                            
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
                        <div class="title-left">
                                    <h3>Bureau d’Etudes Techniques</h3>
                                </div>
                        
                                @if (Auth::guard('web')->user()->type == 1) 
                                <div class="mb-3">
                          
                          <label for="address2">Dénomination:  *</label>
                         <input type="text" name="bureau_etud"class="form-control" id="address2" value="{{Auth::guard('web')->user()->Nom}}"readonly>
                      </div>

                              @else

        <select id="sel"class="form-control" name="bureauSel"  onchange="toggle()">
		
		   <option   class="form-control"selected disabled>Selectionée un Bureau Etude</option>

            <option value="new"  style="color:red" class="form-control" >Ajouter un  Nouveau Bureau Etude</option>
            @foreach(App\B_bcommande::select('bureau_etud')->where('client_id','=',Auth::guard('web')->user()->id)->groupBy('bureau_etud')->get() as $bureau)
       
                                             <option class="form-control"  value="{{$bureau->bureau_etud}}">{{$bureau->bureau_etud}}</option>
         
                                              @endforeach
        </select>@endif
    </p>
  
    <div id="cont" style="display:none;
        border:solid 1px #CCC;padding:10px;">

        Dénomination: <input type="text" name="bureau_etud"class="form-control" id="name" />
        Adresse: <input type="text" name="bureau_etudAdr"class="form-control" id="name" />
        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Tél : *</label>
                                <input type="text"name="bureau_etudTél" class="form-control" id="address2" placeholder="">
                                <div class="invalid-feedback"> </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Fax  *</label>
                                <input type="text" name="bureau_etudFax"class="form-control" id="address2" placeholder="">
                                <div class="invalid-feedback"> . </div>
                            </div>
                            
                        </div>


                    
</body>
<script>
    function toggle() {
        var cont = document.getElementById('cont');
		                                          if(document.getElementById('sel').value =="new"){
                                                     cont.style.display = 'block';
                                                     
                                                   
													                                                }
																									
																									else {
                                                                                                        
																									  cont.style.display = 'none';

																									}
                       }
</script>
                        </div>   
                        <div class="row">
                                                  <div class="col-md-5 mb-3">
                                                          <label for="country">Ingénieur Chargé de l'Etude G.Civil  : *</label>
                                                      <input type="text"name="IngControlleSite" class="form-control" id="address2" placeholder="">
                                                      <div class="invalid-feedback">
                                                 </div>
                                </div>
                                <div class="row">
                                                  <div class="col-md-4 mb-3">
                                                        <label for="state">Numéro d'agrement Ingénieurs :*</label>
                                                         <input type="text" name="IngNumeroagrement "class="form-control" id="address2" placeholder="">
                                                         <div class="invalid-feedback"> . </div>
                                                  </div>
                                                  </div>
    </div>

<br><br><br>
<!--  <div class="title-left">
                                <h3>Bureau d’Etudes Techniques</h3>
                            </div> 
                            @if (Auth::guard('web')->user()->type == 1) 
                            <div class="mb-3">
                          
                             <label for="address2">Dénomination:  *</label>
                            <input type="text" name="bureau_etud"class="form-control" id="address2" value="{{Auth::guard('web')->user()->email}}"readonly>
                         </div>
                         @else
                         <div class="mb-3">
                        
                          <label for="address2">Dénomination:  *</label>
                         <input type="text" name="bureau_etud"class="form-control" id="address2" required>
                      </div>

                         @endif
                         <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Tél : *</label>
                                  @if (Auth::guard('web')->user()->type == 1) 
             <input type="text"name="bureau_etudTél" class="form-control" 
         value="{{Auth::guard('web')->user()->Telephone}}" readonlyid="address2" placeholder=""readonly>
@else

<input type="text"name="bureau_etudTél" class="form-control" 
                                value="" readonlyid="address2" placeholder="">
@endif


                              
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Fax  *</label>
                                @if (Auth::guard('web')->user()->type == 1) 
                                <input type="text"name="bureau_etudFax" class="form-control" id="address2"value="{{Auth::guard('web')->user()->Fax}}" readonly>
                       @else      
<input type="text"name="bureau_etudFax" class="form-control" 
                                value="" readonlyid="address2" placeholder="">
@endif   
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Ingénieur Chargé de l'Etude G.Civil *</label>
                                <input type="text" class="form-control" name="IngControlleSite" placeholder="" value="" required>
                           
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Numéro d'agrement Ingénieurs :*</label>
                                <input type="text" class="form-control" name="IngNumeroagrement" placeholder="" value="" required>
                               
                            </div>
                          
                        </div>-->
                        <div class="title">
                        <div class="title-left">
                                <h3>Laboratoire Etudes de Sol(Géotechnique) :</h3>
                            </div>  </div>
                            @if (Auth::guard('web')->user()->type == 2) 
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Dénomination :</label>
                                 <input type="text"style="width:100%;" name="laboratoire" class="form-control" id="cc-number"value="{{Auth::guard('web')->user()->Nom}}" readonly>
                       
                            </div>
                            @else
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Dénomination :</label>
                                 <input type="text"style="width:100%;" name="laboratoire" class="form-control" id="cc-number" placeholder="" required>
                       
                            </div>

                            @endif
                           
                            <div class="col-md-6 mb-3">
                            @if (Auth::guard('web')->user()->type == 2) 
                                <label for="firstName">Adresse *</label>
                                <input type="text" name="laboratoireAdresse" class="form-control" id="firstName" placeholder="" value="{{Auth::guard('web')->user()->Adresse}}" readonly>
                                @else   <label for="firstName">Adresse *</label>
                                <input type="text" name="laboratoireAdresse" class="form-control" id="firstName" placeholder="ghgh"  required>
                               
                               </div> 
                               @endif
                            </div> 
                            @if (Auth::guard('web')->user()->type == 2)
                                <div class="col-md-6 mb-3">
                            <label for="cc-expiration">Email:</label>
                                
                                <input type="text"name="laboratoireEmail" class="form-control" id="cc-expiration" value="{{Auth::guard('web')->user()->email}}" readonly>
                            </div>
                            @else
                            <div class="col-md-6 mb-3">
                            <label for="cc-expiration">Email:</label>
                                
                                <input type="text"name="laboratoireEmail" class="form-control" id="cc-expiration" placeholder="" required>
                            </div>
                            @endif
                            <div class="row">
                            @if (Auth::guard('web')->user()->type == 2)
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Tél *</label>
                                <input type="text"name="laboratoireTél" class="form-control" value="{{Auth::guard('web')->user()->Telephone}}" readonly>
                            </div>
                            @else
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Tél *</label>
                                <input type="text"name="laboratoireTél" class="form-control" id="firstName" placeholder="" value="" required>
                            </div>
                            @endif
                            @if (Auth::guard('web')->user()->type == 2)
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Fax*</label>
                                <input type="text"name="laboratoireFax" class="form-control" id="lastName" value="{{Auth::guard('web')->user()->Fax}}" readonly>
                           
                            </div>
                           @else
                           <div class="col-md-6 mb-3">
                                <label for="lastName">Fax*</label>
                                <input type="text"name="laboratoireFax" class="form-control" id="lastName" placeholder="" value="" required>
                           
                            </div>

                           @endif
                        </div>
                        
                    
                   
                            <hr class="mb-4">
                            <div class="title-left">
                                <h3>DESCRIPTION DES BATIMENTS et/ou OUVRAGES</h3>
                            </div>
                        <table class="table"  style="border: 1px solid black;">
                    <tr>
                        <th>Surface Totale du Terrain D’Assiette en M²</th>
                        <th>Date prévisionnelle du début des travaux</th>
                        <th>Délais desTravaux en Mois</th>
                    </tr>
                    <tr>
                        <td><input type="text"name="SurfaceConstruitM2"  class="form-control" /></td>
                        <td><input type="date"name="DateDebuttravaux"  class="form-control" /></td>
                        <td><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="DateDélaisTravaux"class="form-control" /></td>
                    </tr>
                  
                    </tr>    </table>
                       
                        <hr class="mb-4">
                    <table class="table table-bordered" id="dynamicTable">  
        <tr>
        <th>Désignation du Bâtiment et/ou Ouvrage</th>
                        <th>Emprise du Bâtimentet /ou Ouvrageau Sol enm²</th>
                        <th>Nombre  d’Etages du Bâtiment et/ou Hauteurdel’ouvrage</th>
                        <th>Nombre de Bâtimentset/ou Ouvrages</th>
                        <th>Action</th>
        </tr>
        <tr>  
            <td><input type="text" name="addmore[0][Désignation]"  class="form-control" /></td>  
            <td><input type="text" name="addmore[0][EmpriseduBatiment]"  class="form-control" /></td>  
            <td><input type="text"  name="addmore[0][NombredEtages]"  class="form-control" /></td>  
            <td><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"name="addmore[0][NombredeBatiment]"  class="form-control" /></td>  

            <td><button type="button" name="add" id="add" class="btn btn-success">Ajouter une ligne</button></td>  
        </tr>  
    </table> 
    <div class="col text-center">

    <button type="submit" value=" Enregistrez" class="btn btn-warning" id="submit" >Enregistrez</button>
    <button type="submit" value=" Enregistrez" class="btn btn-success" id="submit" >Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
</form>
    </div>
</div>

<script type="text/javascript">
   
   var i = 0;
      
   $("#add").click(function(){
  
       ++i;
  
       $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][Désignation]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][EmpriseduBatiment]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][NombredEtages]" class="form-control" /></td> <td><input type="text" name="addmore['+i+'][NombredeBatiment]" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Supprimer</button></td></tr>');
   });
  
   $(document).on('click', '.remove-tr', function(){  
        $(this).parents('tr').remove();
   });  
  
</script>
   
@include('front.layoutsfront.footer_front')
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


</html>
