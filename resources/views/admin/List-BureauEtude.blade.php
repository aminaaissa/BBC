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
                                            <h2>Bbureau Etude</h2>
                                            <br> <br>



                                        </div>

                                        <div class="body">
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card">
                                                        <form class="form-inline" method="get"
                                                            action="/filteradvancedbbureau">
                                                            <div class="body">


                                                                <h2 class="card-inside-title">Recherche </h2>
                                                                <div class="row clearfix">


                                                                </div>
                                                                <div class="row clearfix">

                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control"
                                                                                    name="code" placeholder="code" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control"
                                                                                    name="nom" placeholder="nom" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control"
                                                                                    name="Wilaya"
                                                                                    placeholder="Wilaya" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control"
                                                                                    name="commune"
                                                                                    placeholder="commune" />
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-3">
                                                                        <b>Role</b>

                                                                        <select name="dr"
                                                                            class="browser-default custom-select">
                                                                            @foreach(App\Entreprise::all() as $dr)

                                                                            <option value="{{$dr->id}}" selected>
                                                                                {{$dr->Abrv}}</option>
                                                                            @endforeach
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">

                                            <table class="table table-hover dashboard-task-infos">
                                                <thead>
                                                    <tr>


                                                        <th>nom</th>

                                                        <th>tel</th>

                                                        <th>Fax</th>
                                                        <th>email</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if($bureauE->count()>0)

                                                    @foreach($bureauE as $use)
                                                    <tr>



                                                        <td>{{$use->bureau_etud}}</td>

                                                        <td>{{$use->bureau_etudTél}}</td>
                                                        <td>{{$use->bureau_etudFax}}</td>






                                                    </tr>
                                                    @endforeach @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #END# Task Info -->
                            <!-- Browser Usage -->

                            <!-- #END# Browser Usage -->
                        </div>
                    </div>

                    @include('admin.layouts.footer_admin')
