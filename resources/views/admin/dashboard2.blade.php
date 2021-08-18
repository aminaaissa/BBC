
@include('admin.layouts.head')
@extends('admin.layouts.header')

<body class="theme-pink">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
   
    
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Admin</div> <?php $satatic=App\Buser::count();?>
                            <div class="number count-to" data-from="0" data-to="{{$satatic}}" data-speed="1000" data-fresh-interval="20">
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">Clients</div><?php $client=App\User::count();?>
                            <div class="number count-to" data-from="0" data-to="{{$client}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">BMaitre_ouvrage</div><?php $client=App\BMaitre_ouvrage::count();?>
                            <div class="number count-to" data-from="0" data-to="{{$client}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">bbureau_etudes</div><?php $client=App\BbureauEtude::count();?>
                            <div class="number count-to" data-from="0" data-to="{{$client}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Bon de commande Validée</div><?php $client=App\B_bcommande::count();?>
                            <div class="number count-to" data-from="0" data-to="{{$client}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
            
           
            </div>
            <!-- #END# CPU Usage -->
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Les cinq Dernier <label class="badge badge-warning"> Clients</label>
 Inscrits</h2>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody> 
                                  @foreach(\App\User::orderby('created_at','desc')->take(5)->get() as $client)
                                     
                                        <tr>
                                            <td>{{$client->id}}</td>
                                            <td>{{$client->Nom}}</td>
                                            <td>{{$client->email}}</td>
                                            <td> @if($client->type==1)

<span class="label bg-orange">  BureauEtude</span>

@elseif($client->type==3)

<span class="label bg-orange">  Bmaitre</span>
@elseif($client->type==2)

<span class="label bg-orange">  Laboratoir</span>
@endif</td>
                                            
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
    <div class="container-fluid">
            <div class="block-header">
               
            </div>
            <div class="row clearfix">
             
            </div>
        </div>
           
 @include('admin.layouts.footer')
