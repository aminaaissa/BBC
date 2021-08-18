<!DOCTYPE html>
<html>

<head>
    @include('admin.layouts.head_admin')
    @extends('admin.layouts.header_admin')
    <style>
        .col-md-5 {
            width: 20%;
        }

    </style>

<body class="theme-red">

    <div class="overlay"></div>

    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Bon de commande</a>
            </div>

        </div>
    </nav>
    <!-- #Top Bar -->

    <section class="content">

        <div class="container-fluid" style="padding-left:0px;important!">



            <div class="row clearfix">


                <div class="">
                    <div class="">


                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                    style="padding-left:0px;important!">
                                    <div class="card">
                                        <div class="header">
                                            <?php $client=App\B_bcommande::count();?>
                                            <h2>Liste des bons de commandes<span
                                                    style="font-size:21px;font-weight:bold; color:#F44336;">
                                                    <?php $user = Auth::guard('admin')->user(); ?>
                                                    @if ($user->role_id == 1)
                                                    <?php $client=App\User::count();?>{{$client}}</span>

                                                @elseif ($user->role_id == 2)

                                                <?php $user = Auth::guard('admin')->user();
          $wilaya = '%'.$user->Structure.'%';
          $str = substr($wilaya, 1,2);
          $client=App\B_bcommande::where('CodeWilaya','=',$str)->count();?>{{$client}}</span>

                                                @endif </h2>
                                            <ul class="header-dropdown m-r--5">
                                                <li class="dropdown">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="material-icons">more_vert</i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="javascript:void(0);">Action</a></li>
                                                        <li><a href="javascript:void(0);">Another action</a></li>
                                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <form class="form-inline" method="get" action="/filteradvancedBC">
                                                    <div class="body">


                                                        <h2 class="card-inside-title">Recherche </h2>
                                                        <div class="row clearfix">


                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control"
                                                                            name="intitule_proj"
                                                                            placeholder="intitulé projet" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control"
                                                                            name="bureau_etud"
                                                                            placeholder="bureau etud" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control"
                                                                            name="maitre_oeuv"
                                                                            placeholder="maitre d'oeuvre" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control"
                                                                            name="Commune" placeholder="Commune" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 mb-3" style="col-md-5:width:0px">
                                                                <label for="country">Wilaya : *</label>

                                                                <select name="country" id="country" class="form-control"
                                                                    data-error="Please specify your need.">
                                                                    <?php               $user = Auth::guard('admin')->user();
                                                       $wilaya = '%'.$user->Structure.'%';
                             
                                                  $str = substr($wilaya, 1,2);      ?>
                                                                    @if($user->role_id == '2')
                                                                    <!-- #Top admin -->
                                                                    <option></option>
                                                                    @foreach(App\Bwilaya::where('CODE_Wilaya','=',$str)->get()
                                                                    as $countryData)

                                                                    <option value="{{$countryData->CODE_Wilaya}}"
                                                                        {{$countryData->CODE_Wilaya ===  request('country') ? ' selected' : '' }}>
                                                                        {{$countryData->nom_wilaya}}</option>
                                                                    @endforeach
                                                                    @elseif ($user->role_id == 1)
                                                                    <!-- #Top super_admin -->
                                                                    <option></option>
                                                                    @foreach(App\Bwilaya::all() as $countryData)

                                                                    <option value="{{$countryData->CODE_Wilaya}}"
                                                                        {{$countryData->CODE_Wilaya ===  request('country') ? ' selected' : '' }}>
                                                                        {{$countryData->nom_wilaya}}</option>
                                                                    @endforeach
                                                                    @elseif ($user->role_id ==3)
                                                                   <!-- #Top gestionnaire -->
                                                                   <option></option>
                                                                    @foreach(App\Bwilaya::where('CODE_Wilaya','=',$str)->get()
                                                                    as $countryData)

                                                                    <option value="{{$countryData->CODE_Wilaya}}"
                                                                        {{$countryData->CODE_Wilaya ===  request('country') ? ' selected' : '' }}>
                                                                        {{$countryData->nom_wilaya}}</option>
                                                                    @endforeach
                                                                    @endif
                                                                </select>

                                                            </div>

                                                            <div class="col-md-5 mb-3">
                                                                <label for="country">Commune : *</label>
                                                                <select name="state" id="state" class="form-control">
                                                                    <option></option>
                                                                </select>

                                                            </div>
                                                            <div class="col-md-5 mb-3" style="col-md-5:width:0px">

                                                                <?php               $user = Auth::guard('admin')->user();
                                                       $wilaya = '%'.$user->Structure.'%';
                                                       $agence=$user->Structure;
                             
                                                        $str = substr($wilaya, 1,2);      ?>
                                                                @if($user->role_id == '2')
                                                                <!-- #Top admin -->
                                                                <b>Nom_DR</b>
                                                                <div class="input-group">
                                                                    <select id="Nom_DR" name="Nom_DR"
                                                                        class="form-control">
                                                                        <option></option>
                                                                        @foreach(App\Bagence::where('code_ag','=',$agence)->get()
                                                                        as $countryData)
                                                                        <option value="{{$countryData->code_ag}}"
                                                                            {{$countryData->code_ag ===  request('country') ? ' selected' : '' }}>
                                                                            {{$countryData->Nom_DR}}</option>

                                                                        @endforeach

                                                                    </select>
                                                                    </select>
                                                                </div>
                                                                @elseif ($user->role_id == 1)
                                                                <!-- #Top super_admin -->
                                                                <b>Nom_DR</b>
                                                                <div class="input-group">
                                                                    <select id="Nom_DR" name="Nom_DR"
                                                                        class="form-control">
                                                                        <option></option>
                                                                        @foreach(App\Bagence::select('Nom_DR')->groupBy('Nom_DR')->get()
                                                                        as $countryData)
                                                                        <option value="{{$countryData->code_ag}}"
                                                                            {{$countryData->code_ag ===  request('country') ? ' selected' : '' }}>
                                                                            {{$countryData->Nom_DR}}</option>

                                                                        @endforeach

                                                                    </select>
                                                                    </select>
                                                                </div>
                                                                @elseif ($user->role_id == 3)
                                                                <!-- #Top gestionnaire -->
                                                                <b>Nom_DR</b>
                                                                <div class="input-group">
                                                                    <select id="Nom_DR" name="Nom_DR"
                                                                        class="form-control">
                                                                        <option></option>
                                                                        @foreach(App\Bagence::where('code_ag','=',$agence)->get()
                                                                        as $countryData)
                                                                        <option value="{{$countryData->code_ag}}"
                                                                            {{$countryData->code_ag ===  request('country') ? ' selected' : '' }}>
                                                                            {{$countryData->Nom_DR}}</option>

                                                                        @endforeach

                                                                    </select>
                                                                    </select>
                                                                </div>
                                                                @endif

                                                            </div>


                                                            <div class="col-md-3">
                                                                <b>Structure</b>
                                                                <div class="input-group">
                                                                    <select id="code_ag" name="structure"
                                                                        class="form-control">
                                                                        <option></option>
                                                                        @if($user->privileges_id == '2')
                                                                          <!-- #Top admin -->
                                                                        @foreach(App\Bagence::where('Nom_DR','=',$countryData->Nom_DR)->get()
                                                                        as $role)


                                                                        <option value="{{$role->code_ag}}"
                                                                            name="structure" class="form-control"
                                                                            {{$role->code_ag ===  request('structure') ? ' selected' : '' }}>
                                                                            <?php      $structure=$role->code_ag;
                                                                           echo  $str = substr($structure, 0,2); ?>


                                                                            {{$role->nom_ag}} <span
                                                                                style="text-align=left">{{ App\B_bcommande::where('CodeWilaya', $str)->count() }}</span>
                                                                        </option>
                                                                        @endforeach
                                                                        @elseif ($user->role_id == 1)
                                                                         <!-- #Top super_admin -->
                                                                        @foreach(App\Bagence::get() as $role)


                                                                        <option value="{{$role->code_ag}}"
                                                                            name="structure" class="form-control"
                                                                            {{$role->code_ag ===  request('structure') ? ' selected' : '' }}>
                                                                            <?php      $structure=$role->code_ag;
                                                                             $str = substr($structure, 0,2); ?>


                                                                            {{$role->nom_ag}}

                                                                            {{ App\B_bcommande::where('CodeWilaya', $str)->count() }}
                                                                        </option>
                                                                        @endforeach
                                                                        @elseif ($user->role_id == 3)
                                                                         <!-- #Top gestionnaire -->
                                                                         @if($user->privileges_id == '1') <!-- #Top gestionnaire  locale-->
                                                                        
                                                                       
                                                                        @foreach(App\Bagence::where('code_ag','=',$agence)->get()
                                                                        as $countryData)
                                                                        <option value="{{$countryData->code_ag}}"
                                                                            {{$countryData->code_ag ===  request('country') ? ' selected' : '' }}>
                                                                            {{$countryData->nom_ag}}</option>frsdf

                                                                        @endforeach

                                                                   

                                                                         @elseif($user->privileges_id == '2')<!-- #Top gestionnaire  Régional -->
                                                                        @foreach(App\Bagence::where('Nom_DR','=',$countryData->Nom_DR)->get()
                                                                        as $role)


                                                                        <option value="{{$role->code_ag}}"
                                                                            name="structure" class="form-control"
                                                                            {{$role->code_ag ===  request('structure') ? ' selected' : '' }}>
                                                                            <?php      $structure=$role->code_ag;
                                                                           echo  $str = substr($structure, 0,2); ?>


                                                                            {{$role->nom_ag}} <span
                                                                                style="text-align=left">{{ App\B_bcommande::where('CodeWilaya', $str)->count() }}</span>
                                                                        </option>
                                                                        @endforeach
                                                                        @elseif($user->privileges_id == '3')<!-- #Top gestionnaire  Nationale -->
                                                                        @foreach(App\Bagence::all()
                                                                        as $role)


                                                                        <option value="{{$role->code_ag}}"
                                                                            name="structure" class="form-control"
                                                                            {{$role->code_ag ===  request('structure') ? ' selected' : '' }}>
                                                                            <?php      $structure=$role->code_ag;
                                                                           echo  $str = substr($structure, 0,2); ?>


                                                                            {{$role->nom_ag}} <span
                                                                                style="text-align=left">{{ App\B_bcommande::where('CodeWilaya', $str)->count() }}</span>
                                                                        </option>
                                                                        @endforeach
                                                                        @endif 
                                                                        @endif

                                                                    </select> </div>
                                                            </div>

                                                        </div>




                                                    </div>
                                                    <div class="col text-center">

                                                        <button type="submit"
                                                            class="btn btn-success">Rechercher</button>
                                                        <a href="/Bcommande" class="btn btn-warning"> Réinitialiser</a>
                                                    </div>
                                                </form><br><br>
                                                <table
                                                    class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>Client</th>
                                                            <th>intitule_proj</th>
                                                            <th>Wilaya</th>
                                                            <th>Commune</th>
                                                            <th>adresse projet</th>
                                                            <th>bureau etude</th>

                                                            <th>maitre oeuv</th>
                                                            <th>Ing ControlleSite</th>
                                                            <th>laboratoire</th>
                                                            <th>date de Création</th>
                                                            <th>document signé</th>
                                                            <th>Détails</th>

                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Client</th>
                                                            <th>intitule_proj</th>
                                                            <th>Wilaya</th>
                                                            <th>Commune</th>
                                                            <th>adresse projet</th>
                                                            <th>bureau etude</th>

                                                            <th>maitre oeuv</th>
                                                            <th>Ing ControlleSite</th>
                                                            <th>laboratoire</th>
                                                            <th>date de Création</th>
                                                            <th>document signé</th>
                                                            <th>Détails</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        @if($bcommande->count()>0)

                                                        @foreach($bcommande as $use)
                                                        <tr>
                                                            <td>
                                                                {{$use->client_id}}
                                                                @foreach(App\User::all() as $roleb)

                                                                @if($roleb['id'] == $use['client_id'] )

                                                                {{$roleb->Nom}} /{{$roleb->Prenom}}
                                                                @endif
                                                                @endforeach


                                                            </td>


                                                            <td>{{$use->intitule_proj}}</td>
                                                            <td> <?php 
                                             $wilaya = '%'.$use->CodeWilaya.'%';
      $str = substr($wilaya, 1,2); ?>

                                                                @foreach(App\Bwilaya::all() as $dd)
                                                                @if($dd['CODE_Wilaya']== $str )

                                                                <span class="label bg-green"> {{$dd->nom_wilaya}}</span>
                                                                @endif
                                                                @endforeach</td>
                                                            <td>

                                                                @foreach(App\Bcommune::all() as $roleb)

                                                                @if($roleb['ccom']== $use['CodeCommune'] )

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
                                                            <td> <span class="label bg-green">
                                                                    {{$use->maitre_oeuv}}</span></td>

                                                            <td> <span class="label label-warning">
                                                                    {{$use->IngControlleSite}}</span></td>

                                                            <td>{{$use->laboratoire}}</td>
                                                            <td>{{$use->created_at}}</td>


                                                            <td>
                                                            @if($use->documentsigne == 1)
                                                       <span class="label bg-green"> signé</span>
                                                            @else
                                                   <span class="label label-warning"> non signé</span>


                                                            @endif </td>

                                                            <td>
                                                                <a href="{{ route('boncom.showPDF', $use->code) }}"
                                                                    class="btn btn-success" target="_blank">View </a>
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
                                    </div>
                                </div>
                            </div>




                        </div>


    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    @include('admin.layouts.footer_admin')
    <script>
        $(document).ready(function () {
            $('#country').change(function () {
                var countryID = $(this).val();
                if (countryID) {
                    $.ajax({
                        type: "GET",
                        url: "{{url('getstatelist')}}?countryid=" + countryID,
                        success: function (res) {
                            if (res) {
                                $("#state").empty();
                                $("#state").append('<option></option>');
                                $.each(res, function (key, value) {
                                    $("#state").append('<option value="' + key +
                                        '">' + value + '</option>');
                                });
                            } else {
                                $("#state").empty();
                            }
                        }
                    });
                } else {
                    $("#state").empty();
                }
            });
        });

    </script>
    <script></script>
    <script>
        $(document).ready(function () {
            $('#Nom_DR').change(function () {
                var countryID = $(this).val();
                if (countryID) {
                    $.ajax({
                        type: "GET",
                        url: "{{url('getstructurelist')}}?countryid=" + countryID,
                        success: function (res) {
                            if (res) {
                                $("#structure").empty();
                                $("#structure").append('<option></option>');
                                $.each(res, function (key, value) {
                                    $("#structure").append('<option value="' + key +
                                        '">' + value + '</option>');
                                });
                            } else {
                                $("#structure").empty();
                            }
                        }
                    });
                } else {
                    $("#structure").empty();
                }
            });
        });

    </script>
