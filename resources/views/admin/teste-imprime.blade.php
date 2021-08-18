
<!DOCTYPE html>







<html lang="en">
<head>
    <title>BC AISSA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Override some Bootstrap CDN styles - normally you should apply these through your Bootstrap variables    body { font-family: "Roboto", serif; font-size: 0.8rem; font-weight: 400; line-height: 1.4; color: #000000; }/ sass -->
    <style>
        body { font-family: "Roboto", serif; font-size: 0.8rem; font-weight: 400; line-height: 1.4; color: #000000; }
        h1, h2, h4, h5 { font-weight: 700; color: #000000; }
        h1 { font-size: 2rem; }
        h2 { font-size: 1.6rem; }
        h4 { font-size: 1.2rem; }
        h5 { font-size: 1rem; }
        .table { color: #000; }
        .table td, .table th { border-top: 1px solid #000; }
        .table thead th { vertical-align: bottom; border-bottom: 2px solid #000; }

        @page {
            margin-top: 2.5cm;
            margin-bottom: 2.5cm;
        }

        @page :first {
            margin-top: 0;
            margin-bottom: 2.5cm;
        }

        d{
  padding-left: 50px;
}
    </style>
    <style>
        
    </style>

</head>
<body>
   

<div style="background-color: #3c8dbc; height: 10px;">

<div class="container-fluid pt-2 pt-md-4 px-md-5" >

    <!-- Invoice  <div style="width: 210mm; height: 297mm"> -->

   
    <!-- Invoice items table -->
    @if($bcommande->count()>0)

@foreach($bcommande as $use)
    <table class="table">
    <TR style="outline: thin solid">
<th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="33%">
<span style="font-size:14px; color: #000; font-family: Helvetica Neue, Helvetica-, Arial, sans-serif;font-style: italic;">
<span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Maitre de l’Ouvrage
 :</span></TD>
 <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width=33% colspan="3">{{Auth::guard('web')->user()->Nom}}</TD>
     
<TR>
   <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="33%">
   <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Adresse :</span></TD>
    <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="33%" colspan="3">{{Auth::guard('web')->user()->Adresse}}</TD>
    <TR>
   <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="33%" >
   <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Nif :</span></TD>
    <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="33%" colspan="2">{{Auth::guard('web')->user()->Nif}}</TD>
    <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="50%">
    <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Tel</span>: &ensp;{{Auth::guard('web')->user()->Telephone}}</TD>
      <TR>
   <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="33%" >
   <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">E-MAIL :</span></TD>
    <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="33%" colspan="2">{{Auth::guard('web')->user()->email}}</TD>
    <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width=50%>
    <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Fax :&ensp;{{Auth::guard('web')->user()->Fax}}</span></TD>
        </TR>
     
<TR>
      <tr>
      <td style="text-align: center; color: #497db5;font-size: 20px;font-weight: bold;"colspan="5">
    BON DE COMMANDE</h5></center><h5 class="text-center pt-2" style="color: #497db5;font-size: 21px;">
      
      MISSION DE CONTROLE TECHNIQUE (CTC) DE NORMALISATION DE RISQUE- MISSION M1

  </h5></td>

      </tr>  
        
    
<TR style="outline: thin solid">
<th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="33%">Intitulé du Projet :</th>

    <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="33%" colspan="3">{{$use->intitule_proj}}   </th>
     
<TR>
<th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="33%">Situation du Projet :</th>
<th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="20%">
<span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">wilaya :</span>
<br> @foreach(App\Bwilaya::where('CODE_Wilaya','=',$use->CodeWilaya)->get() as $dd)
             
             {{$dd->nom_wilaya}}
             @endforeach</th>
             <th style="font-size: 17px;padding: 0 10px; align:right" width="20%">
             <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Commune :</span>
              <d>
             
              @foreach(App\Bcommune::where('ccom','=',$use->CodeCommune)->get() as $dd)
              
              {{$dd->commune}}</d> @endforeach</th>
              <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" width="50%">
              <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">lieu dit </span></th>
        </TR>
     
    <TR>
  <th scope="col" rowspan="4"style="outline: thin solid ;padding: 0 10px;padding: 0 10px;font-size: 18px;width:20%; text-align:center;width=33% ">
  <br><center>Maitre d’œuvre :</Th>
    
  <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" colspan="2"> 
  <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Dénomination  :</span> &ensp; {{$use->maitre_oeuv}} </th> 
  <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" rowspan="9" >
    
  <table  class="table"style="box-sizing: content-box !important;"> 
            
            <tr> 
            <th rowspan="3"> 
                 <p class="">Avancement des études à la date du bon de commande</p>  </td> 
            <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;"><br>Esquisse <br>
            <center> <input type="checkbox" name="Esquisse"class="styled"  type="checkbox"@if ($use->Esquisse == "1")
                        {{'checked'}}
                      @endif></center><br></td> 
                <!-- This cell will  <SPAN STYLE="writing-mode: vertical-lr;
                     -ms-writing-mode: tb-rl;
                     transform: rotate(180deg);">take up space on  
                    two rows -->
                
            </tr> 
            
            <tr> 
            <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;">Avant <br>Projet <br>  <center><input type="checkbox"@if ($use->AvantProjet == "1")
                        {{'checked'}}
                      @endif>  </center><br></td> 
            </tr> <tr> 
            <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;">Projet <br>d'exécution <br> <center><input type="checkbox"@if ($use->Projetdexécution == "1")
                        {{'checked'}}
                      @endif> </center><br><br></td> 
            </tr>  
        </table>
                
                </td> 
     </TR>
    <tr>	
    <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" colspan="2">
    <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Adresse  :</span>&ensp;{{$use->maitre_oeuvAdresse}}</th> 
				</tr>
				<tr>	
                <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" colspan="2">
                <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;"> Email :</span>&ensp;{{$use->maitre_oeuvEmail}}</th> 
				</tr>
				<tr>	
                <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;">
                <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Tél :</span>&ensp; {{$use->maitre_oeuvTél}}</td> 
                <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;">
                <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Fax :</span>&ensp; {{$use->maitre_oeuvFax}}</td>   
				</tr>
        <TR>
 <th scope="col" rowspan="5"style="outline: thin solid ;padding: 0 10px;padding: 0 10px;font-size: 18px;width:20%;width=33% ">
 <br><center>Bureau d’Etudes Techniques:</center></Th>
 <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" colspan="2">
 <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;"> Dénomination  :</span>&ensp;{{$use->bureau_etud}}</td> 
     </TR>
    <tr>	
    <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" colspan="2">
    <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;"> Adresse :</span>&ensp;{{$use->maitre_oeuvAdresse}}</td> 
				</tr>
       
				<tr>	
                <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" colspan="2"> 
                <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;"> Tél-Fax-Email  :</span>&ensp;{{$use->bureau_etudTél}}-{{$use->bureau_etudFax}}-{{$use->maitre_oeuvEmail}}</td> 
				</tr>
        <tr>	
        <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" colspan="2">       <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;"> Ingénieur Chargé de l'Etude G.Civil:&ensp;</span>{{$use->IngControlleSite}} </td> 
				</tr>
				<tr>	
                <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" colspan="">      <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Numéro d'agrement:(tableau des Ingénieurs) :</span></td>
         
                <td>&ensp;{{$use->IngNumeroagrement}} </td> 
				</tr>
        <TR>
        <th scope="col" rowspan="5"style="outline: thin solid ;padding: 0 10px;padding: 0 10px;font-size: 18px;width:20%;width=33% ">
        <br><center>Laboratoire Etudes<br>
de Sol  <br>
(Géotechnique) :</center></th>
<th style="outline: thin solid ;padding: 0 10px;font-size: 18px;"  colspan="3"> 
<span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;"> Dénomination :</span>&ensp;{{$use->laboratoire}}</td> 
     </TR>
    <tr>	
    <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" colspan="3">
    <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">  Adresse :</span>&ensp;{{$use->laboratoireAdresse}} </td> 
				</tr>
       
				<tr>	
                <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;"  colspan="3"> 
                <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;"> Email :</span>&ensp;{{$use->laboratoireEmail}} </td> 
				</tr>
        <tr>	
        <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;"  width=33% >
        <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Tél :</span>&ensp;{{$use->laboratoireTél}} </td> 
        <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;"  colspan="2">
        <span style="font-size:11pt; color: #000; font-family: 'Arial', 'Open Sans', sans-serif;font-style: italic;">Fax  :</span>&ensp;{{$use->laboratoireFax}}</td> 
				</tr>
				</tr>
    

    
    
</TABLE>


<!-- Thank you note -->
<center>
<h5 class="" style="color: #497db5;font-size: 20px;font-weight: bold;">
DESCRIPTION DES BATIMENTS et/ou OUVRAGES
    

</h5></center>
<h5 class="text-center pt-2"></h5>
</h5>
<table class="table">
		
		<tr>
			<th style="padding: 0 10px;font-size: 17px; width:35%;">Surface Totale <br>
      du Terrain D’Assiette en M² : {{$use->SurfaceConstruitM2}} </th>
			<th style="font-size: 17px;"><center>Date prévisionnelle <br>
      du début des travaux  :{{$use->DateDebuttravaux}}</center> </th>
      <th colspan="2"style="font-size: 17px;"><center>Délais des Travaux <br> en Mois: {{$use->DateDélaisTravaux}} mois</center> </th>
      
		</tr>
    <tr style="outline: thin solid">
       <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;" ><center>Désignation du Bâtiment  <br>et/ou Ouvrage </center> </th>
    
     <th style="outline: thin solid ;padding: 0 10px;font-size: 18px;">  <center>Emprise du Bâtiment <br>
     et /ou Ouvrage <br>au Sol en M² </center> 
</th>

  <th style="outline: thin solid;padding: 0 10px;font-size: 15.5px;"><center>Nombre d’Etages du<br>Bâtiment<br>et/ou Hauteur de l’ouvrage</center> </th>
<th style="outline: thin solid;padding: 0 10px;font-size: 18px;" ><center>Nombre de  <br>
Bâtiments <br>
et/ou Ouvrages</center> </td>
    </tr>
    @if($bbloc->count()>0)
    @foreach($bbloc as $blo) 
     <tr style="outline: thin solid"> 
      <td style="outline: thin solid ;padding: 0 10px;font-size: 17px;">  
     <center> {{$blo->Désignation}}</center>
      </td> 
      <td style="outline: thin solid ;padding: 0 10px;font-size: 17px;">  
      <center>{{$blo->EmpriseduBatiment}}</center>
      </td><td style="outline: thin solid ;padding: 0 10px;font-size: 17px;">  
      <center>{{$blo->NombredEtages}}</center>
      </td>
      <td style="outline: thin solid ;padding: 0 10px;font-size: 17px;"><center> {{$blo->NombredeBatiment}} </center> </td>
    </tr>
    @endforeach

    @else
    
    @endif
       <tr>
         
       <th style="outline: thin solid"colspan="2"><center>Le Maitre d’ouvrage
         
        <br> Date, Signature, Cachet et Griffe</center>
        <br><br><br><br>
</th>
<th style="outline: thin solid"colspan="2"><center>Authentification par le Maitre d’œuvre
         
        <br> Date, Signature et Cachet
</center>
        <br><br><br><br>
</th>
         
       </tr>
		</table>
       
    	
@endforeach
@endif
        <h5 class="text-center pt-2" style="color: #497db5;font-size: 20px;">
        CADRE RESERVE AU CTC
    </h5>

<table class="table" >
    <tr>
		
		
   
    <tr >
    <th style="border-bottom:1px solid white; border-right:1px solid black ;border-left:1px solid black">
                <h5 class="mb-1"><center>Reçu le</center></h5>
                <br><br><br>
            </td><th style="border-bottom:1px solid white; border-right:1px solid black"  width="200px;">
                <h5 class="mb-1"><center> Vérifié par</center></h5>
                <br><br><br>
            </td><th style="border-bottom:1px solid white; border-right:1px solid black">
                <h5 class="mb-1"><center>Décision du Directeur d’Agence</center></h5>
                <br><br><br>
            </td>
            <th style="border-bottom:1px solid white; border-right:1px solid black"class="font-weight-bold align-middle text-right text-nowrap"><center>Visa Direction Régionale</center><br><br><br></td>
        </tr>
		</table></div>

        <script>

window.print();
</script>