<!DOCTYPE html>
<html>

<head>
    @include('admin.layouts.head'
    )
    @extends('admin.layouts.header')

<body class="theme-red">
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
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
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
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i
                                class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar"
                                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar"
                                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
                                class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('admin-asset/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::guard('admin')->user()->name}}vvvvvvvvvvvv

                    </div>
                    <div class="email"></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>

                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('logout')}}"><i class="material-icons">input</i>Se déconnecter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/admin/Dashboard">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{url('List-client')}}">
                            <i class="material-icons">person</i>
                            <span>Clients</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="/filteradvancedBUseres">
                            <i class="material-icons">person</i>
                            <span>Utilisateures</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons">person</i>
                            <span>Bon de commande</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="/bbureau">
                            <i class="material-icons">person</i>
                            <span> bbureau_etudes
                            </span>
                        </a>
                    </li>









                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">

                </div>
                <div class="version">

                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->

        <!-- #END# Right Sidebar -->
    </section>


    <section class="content">
        <div class="container-fluid">



            <div class="row clearfix">
                <!-- Task Info -->
                <div class="">
                    <div class="card">
                        <div class="header">
                            <h2>BMaitre_ouvrage</h2>
                            <br> <br>



                        </div>

                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <form class="form-inline" method="get" action="/filterBMaitre_ouvrage">
                                            <div class="body">


                                                <h2 class="card-inside-title">Recherche </h2>
                                                <div class="row clearfix">


                                                </div>
                                                <div class="row clearfix">

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="code"
                                                                    placeholder="code" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="nom"
                                                                    placeholder="nom" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="Wilaya"
                                                                    placeholder="Wilaya" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="commune"
                                                                    placeholder="commune" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-3">
                                                        <b>DR</b>

                                                        <select name="dr" class="browser-default custom-select">
                                                            @foreach(App\Entreprise::all() as $dr)

                                                            <option value="{{$dr->id}}" selected>{{$dr->Abrv}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>





                                            </div>
                                            <div class="col text-center">

                                                <button type="submit" class="btn btn-success">Rechercher</button>
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


                                        <th>code</th>
                                        <th>nom</th>
                                        <th>Adresse</th>

                                        <th>tel</th>

                                        <th>Fax</th>
                                        <th>email</th>
                                        <th>SiteWeb</th>
                                        <th>Wilaya</th>
                                        <th>Commune</th>
                                        <th>CategorieTier</th>
                                        <th>Abrevation</th>
                                        <th>FamilleMouvrage</th>
                                        <th>DateModif </th>
                                        <th>DateArrivSrv</th>
                                        <th>MotDePasse</th>
                                        <th>ValidUser</th>
                                        <th>CompteComptable</th>

                                        <th>Nom_DR</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @if($bmaitre->count()>0)

                                    @foreach($bmaitre as $bma)
                                    <tr>
                                        <td>{{$bma->code}}</td>


                                        <td>{{$bma->nom}}</td>
                                        <td>{{$bma->adr}}</td>
                                        <td>{{$bma->tel}}</td>
                                        <td>{{$bma->fax}}</td>
                                        <td>{{$bma->email}}</td>
                                        <td>{{$bma->SiteWeb}}</td>

                                        <td>{{$bma->Bwilaya_code}}</td>
                                        <td>{{$bma->ccom}}</td>
                                        <td>{{$bma->CategorieTier}}</td>
                                        <td> {{$bma->Abrevation}}</td>
                                        <td> {{$bma->FamilleMouvrage}}</td>
                                        <td> {{$bma->DateModif}}</td>
                                        <td> {{$bma->DateArrivSrv}}</td>
                                        <td> {{$bma->MotDePasse}}</td>
                                        <td> {{$bma->ValidUser}}</td>
                                        <td> {{$bma->CompteComptable}}</td>
                                        <td> {{$bma->Nom_DR}}</td>






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
    </section>
    @include('admin.layouts.footer')

    <!-- Jquery Core Js -->
    <script src="{{asset('admin-asset/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('admin-asset/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('admin-asset/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('admin-asset/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('admin-asset/plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('admin-asset/plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{asset('admin-asset/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{asset('admin-asset/admin-asset/plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{asset('admin-asset/plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/flot-charts/jquery.flot.time.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{asset('admin-asset/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('admin-asset/js/admin.js')}}"></script>
    <script src="{{asset('admin-asset/js/pages/index.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('admin-asset/js/demo.js')}}"></script>
</body>

</html>
