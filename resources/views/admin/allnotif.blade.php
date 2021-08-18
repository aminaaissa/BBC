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


                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card">
                                                        <div class="header">
                                                            <h2>
                                                                Liste des Notifications Bon de commmande envoyé au
                                                                Client:
                                                                <span
                                                                    style="font-size:21px;font-weight:bold; color:#F44336;">
                                                                    <?php $client=App\Notification::where('type', 'App\Notifications\NouveauxBonDeCommande')
                                ->where('notifiable_type', 'App\User')->count();?>{{$client}}</span></h2>
                                                            </h2>

                                                        </div>
                                                        <div class="body table-responsive">
                                                            <table
                                                                class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                                <thead>
                                                                    <tr>


                                                                        <th>Utilisateurs Notifier</th>
                                                                        <th>Utilisateurs Email</th>
                                                                        <th>Date d'envoi</th>
                                                                    </tr>
                                                                </thead>

                                                                @foreach(App\Notification::where('type',
                                                                'App\Notifications\NouveauxBonDeCommande')->where('notifiable_type','App\User')->get()
                                                                as $notif)
                                                                <tbody>
                                                                    <tr>

                                                                        <td>

                                                                            @foreach(App\User::get() as $not)
                                                                            @if($not['id'] == $notif['notifiable_id'] )

                                                                            {{$not->Nom}}
                                                                            @endif
                                                                            @endforeach

                                                                        </td>
                                                                        <td>
                                                                            @foreach(App\User::get() as $not)
                                                                            @if($not['id'] == $notif['notifiable_id'] )

                                                                            {{$not->email}}
                                                                            @endif
                                                                            @endforeach</td>
                                                                        <td>{{$notif->created_at}}</td>

                                                                    </tr>

                                                                </tbody>
                                                                @endforeach

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>






                                            @include('admin.layouts.footer_admin')
