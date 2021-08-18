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
                                            <h2>Liste des Utilisateures
                                                <span style="font-size:21px;font-weight:bold; color:#F44336;">
                                                    <?php $user = Auth::guard('admin')->user(); ?>

                                                    <?php $client=App\Buser::count();?>{{$client}}</span>





                                            </h2>
                                            <a href="{{url('/ajouter_Busers')}}"><button type="submit"
                                                    class="btn btn-success">Ajouter Utilisateurs</button></a>

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
                                                <form class="form-inline" method="get" action="/filteradvancedBUseres">
                                                    <div class="body">


                                                        <h2 class="card-inside-title">Recherche </h2>
                                                        <div class="row clearfix">


                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control"
                                                                            name="Matricule" placeholder="Matricule" />
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

                                                            <div class="col-md-5 mb-3" style="col-md-5:width:0px">
                                                                <label for="country">Structure : *</label>

                                                                <select name="country" id="country" class="form-control"
                                                                    data-error="Please specify your need.">
                                                                    <option></option>
                                                                    @foreach(App\Bagence::all() as $bagence)

                                                                    <option value="{{$bagence->code_ag}}">
                                                                        {{$bagence->nom_ag}}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>


                                                        </div>





                                                    </div>

                                                    <div class="col text-center">

                                                        <button type="submit"
                                                            class="btn btn-success">Rechercher</button>
                                                        <a href="/filteradvancedBUseres" class="btn btn-warning">
                                                            Réinitialiser</a>

                                                    </div>
                                                </form><br><br>


                                                @if(session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message') }}
                                                </div>
                                                @endif
                                                <table
                                                    class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>Matricule</th>
                                                            <th>Nom</th>
                                                            <th>Prénom</th>
                                                            <th>Service</th>
                                                            <th>Structure BA</th>
                                                            <th>Fonction</th>
                                                            <th>Nom_DR</th>

                                                            <th>Profil</th>
                                                            <th>Privilège</th>
                                                            <th>Dernier Access</th>
                                                            <th>Modifier</th>
                                                            <th>Supprimer</th>

                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Matricule</th>
                                                            <th>Nom</th>
                                                            <th>Prénom</th>
                                                            <th>Service</th>
                                                            <th>Structure BA</th>
                                                            <th>Fonction</th>
                                                            <th>Nom_DR</th>

                                                            <th>Profil</th>
                                                            <th>Privilège</th>
                                                            <th>Dernier Access</th>
                                                            <th>Modifier</th>
                                                            <th>Supprimer</th>

                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        @if($users->count()>0)

                                                        @foreach($users as $use)
                                                        <tr>

                                                            <td>{{$use->Matricule}}</td>

                                                            <td>{{$use->Nom}}</td>
                                                            <td>{{$use->Prénom}}</td>

                                                            <td>{{$use->Service}}</td>



                                                            <td>



                                                                @foreach(App\Bagence::all() as $Bagence)
                                                                @if($Bagence['code_ag']== $use['Structure'] )


                                                                <span
                                                                    class="label bg-orange">{{$Bagence->nom_ag}}</span>
                                                                @endif
                                                                @endforeach





                                                            </td>






                                                            <td>

                                                                @foreach(App\Bfonction::all() as $Bfonction)
                                                                @if($Bfonction['CodeFnt']== $use['Fonction'] )


                                                                <span
                                                                    class="label bg-orange">{{$Bfonction->LibelleFct}}</span>
                                                                @endif
                                                                @endforeach



                                                            </td>

                                                            <td><span class="label bg-orange">{{$use->Nom_DR}}</span>
                                                            </td>
                                                            <!--<td>
@foreach(App\BGrpSSec::all() as $BGrpSSec)
                                                      @if($BGrpSSec['codeGrpSec']==  $use['GroupSec'] )

                                                      <span class="label label-warning">{{$BGrpSSec->LibelleGrpSec}} </span> @endif
                                                      @endforeach




</td>

<td>

@foreach(App\BGrpSSec_tabel::all() as $BGrpSSec)
                                                      @if($BGrpSSec['codeGrpSec']==  $use['GroupSousSec'] )


                                                      <span class="label label-warning">{{$BGrpSSec->LibelleGrpSSec}} </span>  @endif
                                                      @endforeach


</td>-->
                                                            <td><span class="label bg-green">
                                                                    @foreach(App\Role::all() as $role)
                                                                    @if($role['id']== $use['role_id'] )


                                                                    {{$role->slug}} @endif
                                                                    @endforeach

                                                                </span></td>

                                                            <td>
                                                                @foreach(App\Privilege::where('id','=',$use->privileges_id)->get()
                                                                as $role)



                                                                <span class="label bg-green"> {{$role->name}}
                                                                    @endforeach
                                                            </td>
                                                            <td>{{\Carbon\Carbon::parse($use['DernierAccess'])->diffForHumans() }}
                                                                <!--{{$use->DernierAccess}} {{ \Carbon\Carbon::parse($use->DernierAccess)->diffForHumans() }}-->
                                                            </td>
                                                            <td><a href="  {{URL::to('/modifeusers/'.$use->Matricule) 
                          }}">
                                                                    <button class="btn btn-warning btn-sm rounded-0"
                                                                        type="button" data-toggle="tooltip"
                                                                        data-placement="top" title="Modif"><i
                                                                            class="fa fa-trash"></i></button>
                                                                </a> </td>
                                                            <td>@if($use->role_id =='1')
                                                                <span></span>
                                                                @else
                                                                <a href="  {{URL::to('/deleteusers/'.$use->Matricule) 
                          }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur?')"
                                                                    class=""><span class="label bg-green"></span>
                                                                    <button class="btn btn-danger btn-sm rounded-0"
                                                                        type="button" data-toggle="tooltip"
                                                                        data-placement="top" title="Delete"><i
                                                                            class="fa fa-trash"></i></button>
                                                                </a>@endif</td>

                                                        </tr>
                                                        @endforeach @endif
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
            <!-- #END# Task Info -->
            <!-- Browser Usage -->

            <!-- #END# Browser Usage -->
        </div>
        </div>


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
