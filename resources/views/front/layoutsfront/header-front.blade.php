<body class="theme-blue">
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
    
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar"style="background-color:#00BCD4 !important">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="#">Bon de commande</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">
                            {{ App\Notification::where('type', 'App\Notifications\NouveauxBonDeCommande') ->where('notifiable_id','=',Auth::guard('web')->user()->id) ->count() }} 

                      
                         
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS NV Bon de  commande</li>
                            <li class="body">
                                <ul class="menu">
                                @foreach ( App\Notification::where('type', 'App\Notifications\NouveauxBonDeCommande') ->where('notifiable_id','=',Auth::guard('web')->user()->id) ->orderBy('created_at','desc')->get() as $notification)
                                <li>
                                        <a href="javascript:void(0);" class=" waves-effect waves-block">

                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">bookmark</i>
                                            </div>
                                            
                                            <div class="menu-info">
                                                <h4>{{ $notification->data['email'] }} </h4>
                                                <p>
                                                    <i class="material-icons">access_time</i>Vosu avez envoyer un bon de commande ' : {{ Carbon\Carbon::parse($notification->created_at)->diffForHumans()}}
                                                </p>
                                            </div> 
                                        </a>
                                    </li>
                            @endforeach
                                   
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);" class=" waves-effect waves-block">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                   
                    <!-- #END# Tasks -->
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
                    @if(Auth::guard('web')->check())
                    Bonjour  :{{Auth::guard('web')->user()->Nom}}@endif
                    
                    </div>
                    <div class="email">  @if(Auth::guard('web')->check())
                    Bonjour  :{{Auth::guard('web')->user()->email}}@endif</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="/profile-client"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            
                            <li role="separator" class="divider"></li>
                            <li><a href="/logout-compte"><i class="material-icons">input</i>Se déconnecter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                   
                    <li>
                        <a href="Compte" >
                            <i class="material-icons">home</i>
                            <span>Tableau de bord</span>
                        </a>
                      
                    </li> 
                    <li class="active">
                        <a href="{{url('list_bbcommandeClient')}}">
                            <i class="material-icons">assignment</i>
                            <span>Bon de commandes</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <i class="material-icons">person</i>
                            <span> Suivi Situation des projets </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">assignment</i>
                            <span>RECEVABILITE DU DOSSIER</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">
                            <li>
                                <a href="pages/forms/basic-form-elements.html" class=" waves-effect waves-block"> DOSSIER EN COURS </a>
                            </li>
                            <li>
                                <a href="pages/forms/advanced-form-elements.html" class=" waves-effect waves-block"> DOSSIER NON RECEVABLE </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">assignment</i>
                            <span>TRAITEMENT DES DOSSIERS RECEVABLES</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">
                            <li>
                                <a href="pages/forms/basic-form-elements.html" class=" waves-effect waves-block"> EN COURS DE TRAITEMENT</a>
                            </li>
                            <li>
                                <a href="pages/forms/advanced-form-elements.html" class=" waves-effect waves-block"> EXAMINES</a>
                            </li>
                           
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">assignment</i>
                            <span>CONTRÔLE CHANTIER</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">
                            <li>
                                <a href="pages/forms/basic-form-elements.html" class=" waves-effect waves-block"> NON DEMARRES</a>
                            </li>
                            <li>
                                <a href="pages/forms/advanced-form-elements.html" class=" waves-effect waves-block"> EN COURS
</a>
                            </li>
                            <li>
                                <a href="pages/forms/advanced-form-elements.html" class=" waves-effect waves-block">A L'ARRÊT
</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#">
                            <i class="material-icons">person</i>
                            <span>  Upload dossier techniques </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <i class="material-icons">person</i>
                            <span>  Upload courrier </span>
                        </a>
                    </li>
                   
                    <li class="active">
                        <a href="{{url('list_BureauEtudeClient')}}">
                            <i class="material-icons">person</i>
                            <span>Bureau Etude</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="/reclamation">
                            <i class="material-icons">person</i>
                            <span>Réclamation client</span>
                        </a>
                    </li>
                    
                   
                    
                   
                   
                    
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy;  <a href="javascript:void(0);">Copyright CTC 2020 Espace Client</a>.
                </div>
               
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>
