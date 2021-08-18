
<nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars" style="display: none;"></a>
                <a class="navbar-brand" href="index.html">Bon de commande</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                    <?php    $users = DB::table('notifications') ->join('_busers', 'notifications.notifiable_id', '=', '_busers.id')
                                                                     ->join('Bagences ', '_busers.Structure', '=', 'Bagences .code_ag')
                                                                    // ->where('_busers.Matricule','=',Auth::guard('admin')->user()->Matricule)
                                                                     ->where('type', 'App\Notifications\NouveauxBonDeCommande')
                                                                     ->select('notifications.*', 'Bagences.*', '_busers.*')
                                                                     //->orderBy('notifications.created_at','desc')
                                                                 
                                                                    ->get(); 
        $userss= DB::select("select b.Matricule,b.Structure, c.code_ag,c.nom_ag,c.WilayaAg,c.CommuneAg ,c.Nom_DR ,a.notifiable_type,a.data,a.type,a.created_at,a.notifiable_id
                           from notifications as a
                            inner join _busers as b
                                                   on a.notifiable_id = b.Structure
                            inner join Bagences as c
                                                  on b.Structure = c.code_ag
                                                 ");
                                                 
                                                 
                                                  $notifications= DB::table('notifications')->leftJoin('users', 'notifications.notifiable_id','users.id')->get();

                                                                               // return $userss;                                                                 
                              ?>
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">
                                 <!----------           Pour RoleAdmin et                   ----> 
                              <?php $user = Auth::guard('admin')->user(); ?>
                            @if ($user->role_id == 1) 
                            {{ App\Notification::where('type', 'App\Notifications\NouveauxBonDeCommande')->count() }} 
                            @elseif($user->role_id ==2) 
 <?php  $countt=DB::select( "select COUNT(*)as con from ( select b.Matricule,b.Structure, c.code_ag,c.nom_ag,c.WilayaAg,c.CommuneAg ,c.Nom_DR ,a.notifiable_type,a.data,a.type
                                 from notifications as a
                                                                inner join _busers as b
                                                                                       on a.notifiable_id = b.Structure
                                                                 inner join Bagences as c
                                                                                         on b.Structure = c.code_ag)as p");
                                                                                    
                                                                                         ?>
                                                                                         @foreach($countt as $a)
                                                                                         {{$a->con}}

                                                                                         @endforeach
                                                                                        
                      @endif
                         
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS NV Bon de  commande</li>
                            <li class="body">
                                <ul class="menu">
                               

                             

@if ($user->role_id == 1) 
@foreach ( App\Notification::where('type', 'App\Notifications\NouveauxBonDeCommande')->latest('created_at') ->get() as $notification)
                                <li>
                                        <a href="javascript:void(0);" class=" waves-effect waves-block">

                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">bookmark</i>
                                            </div>
                                            
                                            <div class="menu-info">
                                            <h4>{{ $notification->data['email'] }} </h4>
                                                <p>
                                                    <i class="material-icons">access_time</i>vient d'envoyer un Bon de Commande' :
                                                     {{ Carbon\Carbon::parse($notification->created_at)->diffForHumans()}}
                                                </p>
                                            </div> 
                                        </a>
                                    </li>
                            @endforeach

@elseif ($user->role_id ==2)  

                                @foreach ( $userss as $notification)
                                <li>
                                        <a href="javascript:void(0);" class=" waves-effect waves-block">

                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">bookmark</i>
                                            </div>
                                            
                                            <div class="menu-info">
                                                <h4>{{ $notification->data }}</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i>vient d'envoyer un Bon de Commande' :
                                                     {{ Carbon\Carbon::parse($notification->created_at)->diffForHumans()}}
                                                </p>
                                            </div> 
                                        </a>
                                    </li>
                            @endforeach
                                   @endif
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);" class=" waves-effect waves-block">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">person_add</i>
                      
                            <span class="label-count">                      
                {{ App\Notification::where('type', 'App\Notifications\NouveauxClients')->count() }} 
</span>
                          
                        </a>
                        <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS NouveauxClients</li>
                        <li class="body">
                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 254px;"><ul class="menu" style="overflow: hidden; width: auto; height: 254px;">
                        @foreach ( App\Notification::where('type', 'App\Notifications\NouveauxClients')->latest('created_at') ->get() as $notification)
 <li>
                                        <a href="javascript:void(0);" class=" waves-effect waves-block">

                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            
                                            <div class="menu-info">
                                                <h4>{{ $notification->data['email'] }} </h4>
                                                <p>
                                                    <i class="material-icons">access_time</i>vient de créer un cmpte à : {{ Carbon\Carbon::parse($notification->created_at)->diffForHumans()}}
                                                </p>
                                            </div> 
                                        </a>
                                    </li>@endforeach
                                    
                                    
                                    
                                    
                                    
                                    
                                </ul>
                                <div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 254px;">
                         
                        <li class="footer">
                            <a href="javascript:void(0);" class=" waves-effect waves-block">View All Notifications</a>
                        </li>
                    </ul>
                    <!-- Tasks -->
                   
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>

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
                @if(Auth::guard('admin')->check())
    Bonjour  :{{Auth::guard('admin')->user()->Nom}} @endif</div>
    <div class="email"> 
                @if(Auth::guard('admin')->check())
                Matricule  :{{Auth::guard('admin')->user()->Matricule}}@endif</div>
               <!--    <div class="email"> 
                @if(Auth::guard('admin')->check())
   Email  :{{Auth::guard('admin')->user()->email}}@endif</div>-->
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="/profile"><i class="material-icons">person</i>Profile</a></li>
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
            <?php $user = Auth::guard('admin')->user();
   ?>


            <?php $user = Auth::guard('admin')->user();
   ?>

@if ($user->role_id == 1)  
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="/admin/Dashboard">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="active">
                    <a href="https://drawsql.app/ctc/diagrams/bon-de-commande/embed" target="_blank">
                        <i class="material-icons">home</i>
                        <span>Shéma Base De Données</span>
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
                    <a href="/Bcommande">
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
                <li class="active">
                    <a href="/BMaitre_ouvrage">
                        <i class="material-icons">person</i>
                        <span> BMaitre_ouvrage
</span>
                    </a>
                </li>










            </ul>
            @elseif ($user->role_id ==2)  
            <ul>
            <li class="active">
                    <a href="{{url('List-client')}}">
                        <i class="material-icons">person</i>
                        <span>Clients</span>
                    </a>
                </li>
                <li class="active">
                    <a href="/Bcommande">
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
                <li class="active">
                    <a href="/BMaitre_ouvrage">
                        <i class="material-icons">person</i>
                        <span> BMaitre_ouvrage
</span>
                    </a>
                </li>
                <li class="active">
                    <a href="/filteradvancedBUseres">
                        <i class="material-icons">person</i>
                        <span>Utilisateures</span>
                    </a>
                </li>
            </ul>
            @elseif ($user->role_id ==3) 
            <ul>
            <li class="active">
                    <a href="{{url('List-client')}}">
                        <i class="material-icons">person</i>
                        <span>Clients</span>
                    </a>
                </li>
                <li class="active">
                    <a href="/Bcommande">
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
                <li class="active">
                    <a href="/BMaitre_ouvrage">
                        <i class="material-icons">person</i>
                        <span> BMaitre_ouvrage
</span>
                    </a>
                </li>
                
            </ul>
            @endif
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