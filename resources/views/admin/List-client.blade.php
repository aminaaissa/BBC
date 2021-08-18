<!DOCTYPE html>
<html>

<head>
    @include('admin.layouts.head_admin')
    @extends('admin.layouts.header_admin')<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                                            <h2>Liste des comptes Clients:<span
                                                    style="font-size:21px;font-weight:bold; color:#F44336;">
                                                    <?php $user = Auth::guard('admin')->user(); ?>
                                                    @if ($user->role_id == 1)
                                                    <?php $client=App\User::count();?>{{$client}}</span>

                                                @elseif ($user->role_id == 2)

                                                <?php $user = Auth::guard('admin')->user();
          $wilaya = '%'.$user->Structure.'%';
          $str = substr($wilaya, 1,2);
          $client=App\User::where('wilaya','=',$str)->count();?>{{$client}}</span>

                                                @endif

                                            </h2>

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
                                                <form class="form-inline" method="get" action="/filteradvancedClient">
                                                    <div class="body">


                                                        <h2 class="card-inside-title">Recherche avancée</h2>

                                                        <div class="row clearfix">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control"
                                                                            name="id" placeholder="code" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control"
                                                                            name="Nom" placeholder="Nom" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control"
                                                                            name="Prénom" placeholder="Prénom" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control"
                                                                            name="Raisonsocial"
                                                                            placeholder="Raisonsocial" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control"
                                                                            name="qualité" placeholder="qualité" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-3" style="col-md-5:width:0px">
                                                                <label for="">Type : </label>
                                                                <select name="type" id="" class="form-control"
                                                                    required="required"
                                                                    data-error="Please specify your need.">

                                                                    <option value="1" name="type" selected>Bureau Etude
                                                                    </option>
                                                                    <option value="2" name="type" selected>Laboratoir
                                                                    </option>
                                                                    <option value="3" name="type" selected>Bmaitre
                                                                    </option>
                                                                    <option value="" name="" selected>.... </option>
                                                                </select>

                                                            </div>

                                                        </div>
                                                        <div class="col-md-5 mb-3" style="col-md-5:width:0px">
                                                            <label for="country">Wilaya : *</label>

                                                            <select name="country" id="country" class="form-control"
                                                                data-error="Please specify your need.">
                                                                <?php               $user = Auth::guard('admin')->user();
                                                       $wilaya = '%'.$user->Structure.'%';
                             
                                                  $str = substr($wilaya, 1,2);      ?>
                                                                @if($user->privileges_id == '2')
                                                                <option></option>
                                                                @foreach(App\Bwilaya::where('CODE_Wilaya','=',$str)->get()
                                                                as $countryData)

                                                                <option value="{{$countryData->CODE_Wilaya}}"
                                                                    {{$countryData->CODE_Wilaya ===  request('country') ? ' selected' : '' }}>
                                                                    {{$countryData->nom_wilaya}}</option>
                                                                @endforeach
                                                                @elseif ($user->role_id == 1)
                                                                <option></option>
                                                                @foreach(App\Bwilaya::all() as $countryData)

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

                                                    </div>





                                            </div>


                                            <div class="col text-center">

                                                <button type="submit" class="btn btn-success">Rechercher</button>
                                                <!-- <button class="btn btn-warning" name="reset" value="Reset" id="reset123" onclick="customReset();">Réinitialiser </button>--->
                                                <a href="/List-client" class="btn btn-warning"> Réinitialiser</a>



                                            </div>
                                            </form><br><br>
                                            <table
                                                class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                <thead>
                                                    <tr>
                                                        <th>Nom</th>

                                                        <th>Qualite</th>
                                                        <th>Type</th>
                                                        <th>Wilaya</th>
                                                        <th>Commune</th>
                                                        <th>Adresse</th>

                                                        <th>Raisonsocial</th>
                                                        <th>Telephone <br>Fax</th>
                                                        <th>Compte_email</th>
                                                        <th>Compte</th>
                                                        <th>Bon de commande</th>
                                                        <th>Date de création</th>
                                                        <th>Détails</th>
                                                        <th>désactivé</th>

                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>

                                                        <th>Nom</th>

                                                        <th>Qualite</th>
                                                        <th>Type</th>
                                                        <th>Wilaya</th>
                                                        <th>Commune</th>
                                                        <th>Adresse</th>

                                                        <th>Raisonsocial</th>
                                                        <th>Telephone <br>Fax</th>
                                                        <th>Compte_email</th>
                                                        <th>Compte</th>
                                                        <th>Bon de commande</th>
                                                        <th>Date de création</th>
                                                        <th>Détails</th>
                                                        <th>désactivé</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>


                                                    @foreach($users as $use)
                                                    <tr>



                                                        <td>{{$use->Nom}}</td>

                                                        <td>{{$use->Qualite}}</td>
                                                        <td>
                                                            @if($use->type==1)

                                                            <span class="label bg-orange"> BureauEtude</span>

                                                            @elseif($use->type==3)

                                                            <span class="label bg-orange"> Bmaitre</span>
                                                            @elseif($use->type==2)

                                                            <span class="label bg-orange"> Laboratoir</span>
                                                            @endif
                                                        </td>
                                                        <td>

                                                            @foreach(App\Bwilaya::where('CODE_Wilaya','=',$use->wilaya)->get()
                                                            as $dd)


                                                            <span class="label bg-green"> {{$dd->nom_wilaya}}</span>

                                                            @endforeach



                                                        </td>
                                                        <td>
                                                            @foreach(App\Bcommune::where('ccom','=',$use->commune)->get()
                                                            as $roleb)



                                                            <span class="label bg-green"> {{$roleb->commune}}</span>

                                                            @endforeach

                                                        </td>
                                                        <td>{{$use->Adresse}}</td>

                                                        <td>{{$use->Raisonsocial}}</td>

                                                        <td>{{$use->Telephone}}<br>{{$use->Fax}}</td>

                                                        <td>{{$use->email}}</td>
                                                        @if($use->is_activated)
                                                        <td><span class="label bg-green">Actif</span>
                                                            @else
                                                        <td><span class="label label-warning">Inactifs</span>


                                                            @endif</td>


                                                        <td>
                                                            <div class="col-sm-3">
                                                                <!--<div class="switch">
                                            <label><input type="checkbox" checked="">
                                            <span class="lever switch-col-green"></span></label>
                                        </div>     </div>-->
                                                                <a href="#" class="badge bg-orange">

                                                                    {{ App\B_bcommande::where('client_id', $use->id)->count() }}

                                                                </a>
                                                        </td>
                                                        <td>{{$use->created_at}}</td>
                                                        <td>
                                                            <a href="{{ route('boncom.show', $use->id) }}"
                                                                class="btn btn-success">View </a>
                                                        </td>

                                                        <?php $user = Auth::guard('admin')->user();
   ?>

                                                        @if ($user->role_id == 1) <td>

                                                            @if($use->is_activated)
                                                            <div class="switch">
                                                                <label><input type="checkbox" title="desactive"
                                                                        data-href="{{URL::to('/desactive/'.$use->id)  }}"
                                                                        checked="">
                                                                    <span class="lever switch-col-green"></span></label>
                                                            </div>

                                                            @else
                                                            <div class="switch">

                                                                <label><input type="checkbox" title="active"
                                                                        data-href="{{URL::to('/active/'.$use->id)  }}"
                                                                        checked="">
                                                                    <span class="lever switch-col-grey"></span></label>
                                                            </div>
                                                            @endif
                                                        </td>
                                                        @else
                                                        <td></td>
                                                        @endif
                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>


                </div>
            </div>
        </div>

        </div>
        </div>
        <script>
            $('[title="desactive"]').click(function () {
                var isChecked = $(this).val();
                alert('Êtes-vous sûr de vouloir désactiver  ce Client?');
                window.location.href = $(this).data('href');


            });

        </script>

        <script>
            $('[title="active"]').click(function () {
                var isChecked = $(this).val();
                alert('Êtes-vous sûr de vouloir activer  ce Client?');
                window.location.href = $(this).data('href');


            });

        </script>



    </section>


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
