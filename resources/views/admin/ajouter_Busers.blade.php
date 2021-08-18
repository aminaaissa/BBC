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
                                            <h2>Création Nouveau Utilisateur</h2>
                                        </div>
                                        <!-- Color Pickers -->
                                        <form action="/register-buser" method="POST" enctype="multipart/form-data">
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

                                                            <div class="demo-masked-input">
                                                                <div class="row clearfix">
                                                                    <div class="col-md-3">
                                                                        <b>Matricule</b>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="material-icons">date_range</i>
                                                                            </span>
                                                                            <div class="form-line">
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="{{ old('Matricule') }}"
                                                                                    name="Matricule"
                                                                                    placeholder="Matricule" required>




                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <b>Email</b>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="material-icons">email</i>
                                                                            </span>

                                                                            <div class="form-line">
                                                                                <input type="text" name="email"
                                                                                    value="{{ old('email') }}"
                                                                                    class="form-control email"
                                                                                    placeholder="Ex: example@example.com">
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <b>Profile</b>

                                                                        <select name="role"
                                                                            class="browser-default custom-select">
                                                                            @foreach(App\Role::all() as $role)

                                                                            <option value="{{$role->id}}" selected>
                                                                                {{$role->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>


                                                                    <div class="col-md-3">
                                                                        <b>Privillège</b>

                                                                        <select name="privilege"
                                                                            class="browser-default custom-select">


                                                                            <option value="1" selected>Local</option>
                                                                            <option value="2" selected>Régional</option>
                                                                            <option value="3" selected>National</option>
                                                                        </select>
                                                                    </div>



                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-md-3">
                                                                        <b>Nom_DR</b>
                                                                        <div class="input-group">
                                                                            <select id="Nom_DR" name="Nom_DR"
                                                                                class="browser-default custom-select">


                                                                                <option value="DG" selected>DG</option>
                                                                                <option value="DG_" selected>DG_
                                                                                </option>
                                                                                <option value="DRC" selected>DRC
                                                                                </option>
                                                                                <option value="DRE" selected>DRE
                                                                                </option>
                                                                                <option value="DRO" selected>DRO
                                                                                </option>
                                                                                <option value="DRSE" selected>DRSE
                                                                                </option>



                                                                            </select>
                                                                            </select>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-3">
                                                                        <b>Structure</b>
                                                                        <div class="input-group">
                                                                            <select id="code_ag" name="code_ag"
                                                                                class="browser-default custom-select">
                                                                                @foreach(App\Bagence::all() as $role)


                                                                                <option value="{{$role->code_ag}}"
                                                                                    name="code_ag"> {{$role->nom_ag}}
                                                                                </option>
                                                                                @endforeach
                                                                            </select> </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <b>Password</b>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="material-icons">vpn_key</i>
                                                                            </span>
                                                                            <div class="form-line">
                                                                                <input type="password"
                                                                                    class="form-control key"
                                                                                    name="Password"
                                                                                    placeholder="Password">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                </div>
                                                <!-- #END# Color Pickers -->
                                                <!-- File Upload | Drag & Drop OR With Click & Choose -->
                                                <!-- Masked Input -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">

                                                            <div class="body">

                                                                <div class="demo-masked-input">
                                                                    <div class="row clearfix">
                                                                        <div class="col-md-3">
                                                                            <b>NOm</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i
                                                                                        class="material-icons">date_range</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text"
                                                                                        class="form-control date"
                                                                                        name="Nom" placeholder="Nom">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <b>Nomjeunfille</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i
                                                                                        class="material-icons">date_range</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text"
                                                                                        name="Nomjeunfille"
                                                                                        class="form-control date"
                                                                                        placeholder="Nomjeunfille">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <b>Prénom</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="material-icons">person</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text" name="Prénom"
                                                                                        class="form-control time12"
                                                                                        placeholder="Prénom">
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-3">
                                                                            <b>Sous Structure</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i
                                                                                        class="material-icons">access_time</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text"
                                                                                        name="SousStructure"
                                                                                        class="form-control time12"
                                                                                        placeholder="SousStructure">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <b>Direction Antenne</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="material-icons">person</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text"
                                                                                        name="DirectionAntenne"
                                                                                        class="form-control datetime"
                                                                                        placeholder="DirectionAntenne">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <b> Service</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="material-icons">person</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text" name="Service"
                                                                                        class="form-control money-dollar"
                                                                                        placeholder="Service">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <b>Fonction</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="material-icons">person</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text" name="Fonction"
                                                                                        class="form-control mobile-phone-number"
                                                                                        placeholder="Fonction">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <b>Wilaya de Naissance</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i
                                                                                        class="material-icons">date_range</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text"
                                                                                        name="WilayadeNaissance"
                                                                                        class="form-control datetime"
                                                                                        placeholder="WilayadeNaissance">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <b> Commune de Naissance</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i
                                                                                        class="material-icons">attach_money</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text"
                                                                                        name="CommunedeNaissance"
                                                                                        class="form-control money-dollar"
                                                                                        placeholder="CommunedeNaissance">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <b>Civilité</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="material-icons">person</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text" name="Civilité"
                                                                                        class="form-control mobile-phone-number"
                                                                                        placeholder="Civilité">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <b>sexe</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="material-icons">person</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text" name="sexe"
                                                                                        class="form-control mobile-phone-number"
                                                                                        placeholder="sexe">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!--   <div class="col-md-3">
                                        <b>Money (Euro)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">euro_symbol</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control money-euro" placeholder="Ex: 99,99 €">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>IP Address</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">computer</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control ip" placeholder="Ex: 255.255.255.255">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Credit Card</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">credit_card</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control credit-card" placeholder="Ex: 0000 0000 0000 0000">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Email Address</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control email" placeholder="Ex: example@example.com">
                                            </div>
                                        </div>
                                    </div>-->

                                                                        <div class="col-md-3">
                                                                            <b>GroupSec</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i
                                                                                        class="material-icons">vpn_key</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text" name="GroupSec"
                                                                                        class="form-control key"
                                                                                        placeholder="GroupSec">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <b>GroupSousSec</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i
                                                                                        class="material-icons">vpn_key</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="text"
                                                                                        name="GroupSousSec"
                                                                                        class="form-control key"
                                                                                        placeholder="GroupSousSec">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <b>DateEmbouche</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i
                                                                                        class="material-icons">date_range</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="date"
                                                                                        name="DateEmbouche"
                                                                                        class="form-control "
                                                                                        placeholder="DateEmbouche"
                                                                                        required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <b>DateNaissance</b>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i
                                                                                        class="material-icons">date_range</i>
                                                                                </span>
                                                                                <div class="form-line">
                                                                                    <input type="date"
                                                                                        name="DateNaissance"
                                                                                        class="form-control "
                                                                                        placeholder="DateNaissance"
                                                                                        required>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- #END# Masked Input -->
                                                <!-- Input Group -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">
                                                            <div class="header">
                                                                <h2>
                                                                    GCPRO
                                                                </h2>
                                                                <ul class="header-dropdown m-r--5">
                                                                    <li class="dropdown">
                                                                        <a href="javascript:void(0);"
                                                                            class="dropdown-toggle"
                                                                            data-toggle="dropdown" role="button"
                                                                            aria-haspopup="true" aria-expanded="false">
                                                                            <i class="material-icons">more_vert</i>
                                                                        </a>
                                                                        <ul class="dropdown-menu pull-right">
                                                                            <li><a href="javascript:void(0);">Action</a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);">Another
                                                                                    action</a></li>
                                                                            <li><a href="javascript:void(0);">Something
                                                                                    else here</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="body">
                                                                <h2 class="card-inside-title">GCProAdministratif</h2>
                                                                <div class="row clearfix">
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="material-icons">person</i>
                                                                            </span>
                                                                            <div class="form-line">
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    placeholder="GCProAdministratif">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    placeholder="GCProEcheance">
                                                                            </div>
                                                                            <span class="input-group-addon">
                                                                                <i class="material-icons">send</i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="material-icons">person</i>
                                                                            </span>
                                                                            <div class="form-line">
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    placeholder="GCProTEchnique">
                                                                            </div>
                                                                            <span class="input-group-addon">
                                                                                <i class="material-icons">send</i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <h2 class="card-inside-title">GCProSecretariat</h2>
                                                                <div class="row clearfix">
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">

                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="GCProSecretariat">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder=",[GCProDirecteur]">
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="GCProAvancement">
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="GCPro_DGP">
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <h2 class="card-inside-title">
                                                                    GED

                                                                </h2>
                                                                <h2 class="card-inside-title">GED</h2>
                                                                <div class="row clearfix">
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="material-icons">person</i>
                                                                            </span>
                                                                            <div class="form-line">
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    placeholder="GCProAdministratif">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    placeholder="GCProEcheance">
                                                                            </div>
                                                                            <span class="input-group-addon">
                                                                                <i class="material-icons">send</i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="material-icons">person</i>
                                                                            </span>
                                                                            <div class="form-line">
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    placeholder="GCProTEchnique">
                                                                            </div>
                                                                            <span class="input-group-addon">
                                                                                <i class="material-icons">send</i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row clearfix">
                                                                    <div class="col-md-4">

                                                                        <div class="col-md-4">
                                                                            <div class="input-group">
                                                                                <div class="form-line">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="GED">
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="input-group">
                                                                                <div class="form-line">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="GEDConsultation">
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="input-group">
                                                                                <div class="form-line">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="GEDpw">
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="input-group">
                                                                                <div class="form-line">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="GEDvalidation">
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <h2 class="card-inside-title"></h2>
                                                                <div class="row clearfix">
                                                                    <div class="col text-center">

                                                                        <button type="submit"
                                                                            class="btn btn-success">Ajouter</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                        <!-- #END# Input Group -->
                                        <!-- Multi Select -->

                                        <!-- #END# Multi Select -->


                                        <!-- Advanced Select -->

                                        <!-- #END# Advanced Select -->
                                        <!-- Input Slider -->

                                        <!-- #END# Input Slider -->
                                    </div>
    </section>

    @include('admin.layouts.footer_admin')

</html>
