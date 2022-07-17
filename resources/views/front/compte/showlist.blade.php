<head>
    @include('front.layoutsfront.head-front')

</head>
@extends('front.layoutsfront.header-front')

<section class="content">

    <div class="row clearfix">

        <!-- Task Info -->
        <div class="">
            <div class="card">
                <div class="header">
                    <br><br>
                    <a href="{{url('/ajouter_bon_new')}}" class="btn btn-success">Ajouter </a> <br><br>
                    <h2>Liste des bon de commandes </h2>

                    <div class="table-responsive">
                        <?php ?>
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th>intitulé projet</th>
                                    <th>Wilaya</th>
                                    <th>Commune</th>
                                    <th>adresse projet</th>
                                    <th>bureau etude</th>

                                    <th>maitre oeuvrage </th>
                                    <th>Ing Controlle Site</th>
                                    <th>laboratoire</th>

                                    <th>Détails</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($bcommandeuser->count()>0)

                                @foreach($bcommandeuser as $use)
                                <tr>



                                    <td>{{$use->intitule_proj}}</td>
                                    <td>


                                        @foreach(App\Bwilaya::all() as $dd)
                                        @if($dd->CODE_Wilaya== $use->CodeWilaya )

                                        <span class="label bg-green"> {{$dd->nom_wilaya}}</span>
                                        @endif
                                        @endforeach</td>
                                    <td>

                                        @foreach(App\Bcommune::all() as $roleb)

                                        @if($roleb->ccom== $use->CodeCommune )

                                        <span class="label bg-green"> {{$roleb->commune}}</span>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>

                                        {{$use->adress_proj}}


                                    </td>
                                    <td>

                                        {{$use->bureau_etud}}

                                    </td>
                                    <td> <span class="label bg-green"> {{$use->MaitreOuvrage}}</span></td>

                                    <td> <span class="label label-warning"> {{$use->IngControlleSite}}</span></td>

                                    <td>{{$use->laboratoire}}</td>





                                    <td>
                                        <a href="{{ route('boncom.showPDF', $use->code) }}" class="btn btn-warning"
                                            target="_blank">Imprimer </a>
                                    </td>
                                    <td>
                                        @if($use->docSig === '1')
                                        <a href="{{  asset('documentsigne/'.$use->docSig)}}.pdf"
                                        class="btn btn-warning" target="_blank"data-item="88850864" title="Lire ">
                                       Document scanner </a>
                                            @else 
                                            
                                            @endif
                                    </td>

                                    <td>
                                        <a href="{{ url('chargerdocument',$use->code)}}" onclick="myFunction()"
                                            class="btn btn-success">charger pour envoyer </a>
                                    </td>
                                    <td>
                                        <a href=" {{asset('documentsigne/'.$use->docSig)}}.pdf"target="_blank"
                                            class="btn btn-success">Document finale </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('documentsigneEnvoyer', $use->code) }}" class="btn btn-warning"
                                            target="_blank">Envoyer  </a>
                                    </td>
                                </tr>
                                @endforeach


                                @else
                                <div data-item-id="16437222" class="results-item">
                                    <h1 style="color: #ff9600;"> AUCUN BON DE COMMANDE TROUVÉE
                                </div>
                                @endif

                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="body">
                    <div class="row clearfix">


                    </div>
                    <!-- #Footer -->
                    </aside>
                    <!-- #END# Left Sidebar -->
                    <!-- Right Sidebar -->

                    <!-- #END# Right Sidebar -->
</section>

@include('front.layoutsfront.footer_front')
