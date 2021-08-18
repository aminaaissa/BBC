<!DOCTYPE html>
<html>

<head>
    @include('admin.layouts.head_admin'
    )
    @extends('admin.layouts.header_admin')
    <style>
        .col-md-5 {
            width: 20%;
        }

    </style>

<body class="theme-red">
    <!-- Page Loader -->

    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->

    <!-- #END# Search Bar -->
    <!-- Top Bar -->
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
                                            <h2>Liste des bons de commandes pour Client </h2>

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
                                            <div class="card">
                                                <form class="form-inline" method="get" action="/filteradvancedBCC">
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

                                                                    <option selected></option>
                                                                    @foreach(App\Bwilaya::all() as $countryData)

                                                                    <option value="{{$countryData->CODE_Wilaya}}"
                                                                        {{$countryData->CODE_Wilaya ===  request('country') ? ' selected' : '' }}>
                                                                        {{$countryData->nom_wilaya}}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>

                                                            <div class="col-md-5 mb-3">
                                                                <label for="country">Commune : *</label>
                                                                <select name="state" id="state" class="form-control">
                                                                    <option>--Commune--</option>
                                                                </select>

                                                            </div>


                                                        </div>





                                                    </div>
                                                    <div class="col text-center">

                                                        <button type="submit"
                                                            class="btn btn-success">Rechercher</button>
                                                    </div>
                                                </form><br><br>
                                            </div>
                                            <table
                                                class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                <thead>
                                                    <tr>
                                                        <th>Client</th>
                                                        <th>intitule_proj</th>
                                                        <th>CodeWilaya</th>
                                                        <th>CodeCommune</th>
                                                        <th>adress_proj</th>
                                                        <th>bureau_etud</th>

                                                        <th>maitre_oeuv</th>
                                                        <th>IngControlleSite</th>
                                                        <th>laboratoire</th>
                                                        <th>Date de création</th>
                                                        <th>Détails</th>

                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Client</th>
                                                        <th>intitule_proj</th>
                                                        <th>CodeWilaya</th>
                                                        <th>CodeCommune</th>
                                                        <th>adress_proj</th>
                                                        <th>bureau_etud</th>

                                                        <th>maitre_oeuv</th>
                                                        <th>IngControlleSite</th>
                                                        <th>laboratoire</th>
                                                        <th>Date de création</th>
                                                        <th>Détails</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @if($bcommande->count()>0)

                                                    @foreach($bcommande as $use)
                                                    <tr>
                                                        <td>

                                                            @foreach(App\User::all() as $roleb)

                                                            @if($roleb['id']== $use['client_id'] )

                                                            {{$roleb->Nom}} /{{$roleb->Prenom}}
                                                            @endif
                                                            @endforeach


                                                        </td>


                                                        <td>{{$use->intitule_proj}}</td>
                                                        <td>

                                                            <?php 
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
                                                        <td> <span class="label bg-green"> {{$use->maitre_oeuv}}</span>
                                                        </td>

                                                        <td><span class="label label-warning">
                                                                {{$use->IngControlleSite}}</span></td>

                                                        <td>{{$use->laboratoire}}</td>

                                                        <td>{{$use->created_at}}</td>



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
                                <!-- #END# Task Info -->
                                <!-- Browser Usage -->

                                <!-- #END# Browser Usage -->
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
