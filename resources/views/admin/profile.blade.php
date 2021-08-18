@include('admin.layouts.head_admin')
@extends('admin.layouts.header_admin')

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper" style="display: none;">
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
    <div class="overlay" style="display: none;"></div>
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
    @extends('admin.layouts.header_admin')


    <section class="content">
        <div class="container-fluid"><br><br>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                            </div>
                            <div class="content-area">
                                <h3> @if(Auth::guard('admin')->check())
                                    {{Auth::guard('admin')->user()->Nom}}@endif</h3>
                                <p>


                                    @if(Auth::guard('admin')->check())


                                    @foreach(App\Bfonction::all() as $Bfonction)
                                    @if($Bfonction['CodeFnt']== Auth::guard('admin')->user()->Fonction )

                                    {{$Bfonction->LibelleFct}}
                                    @endif
                                    @endforeach
                                    @endif</p>
                                <p>@if(Auth::guard('admin')->check())
                                    {{Auth::guard('admin')->user()->Prénom}}@endif</p>
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>


                                <li>
                                    <span>Matricule</span>
                                    <span>

                                        @if(Auth::guard('admin')->check())
                                        {{Auth::guard('admin')->user()->Matricule}}@endif

                                    </span>
                                </li>
                                <li>
                                    <span>Nom</span>
                                    <span>

                                        @if(Auth::guard('admin')->check())
                                        {{Auth::guard('admin')->user()->Nom}}@endif

                                    </span>
                                </li>
                                <li>
                                    <span>Prénom </span>
                                    <span>

                                        @if(Auth::guard('admin')->check())
                                        {{Auth::guard('admin')->user()->Prénom}}@endif

                                    </span>
                                </li>
                                <li>
                                    <span>Service</span>
                                    <span>

                                        @if(Auth::guard('admin')->check())
                                        {{Auth::guard('admin')->user()->Service}}@endif

                                    </span>
                                </li>
                                <li>
                                    <span>Nom_DR</span>
                                    <span>

                                        @if(Auth::guard('admin')->check())
                                        {{Auth::guard('admin')->user()->Nom_DR}}@endif

                                    </span>
                                </li>
                                <li>
                                    <span>Fonction</span>
                                    <span>
                                        @if(Auth::guard('admin')->check())


                                        @foreach(App\Bfonction::all() as $Bfonction)
                                        @if($Bfonction['CodeFnt']== Auth::guard('admin')->user()->Fonction )

                                        {{$Bfonction->LibelleFct}}
                                        @endif
                                        @endforeach
                                        @endif</span>
                                </li>

                                <li>
                                    <span>Structure</span>
                                    <span>
                                        @if(Auth::guard('admin')->check())


                                        @foreach(App\Bagence::all() as $Bagence)
                                        @if($Bagence['code_ag']== Auth::guard('admin')->user()->Structure )


                                        <span class="label bg-orange">{{$Bagence->nom_ag}}</span> @endif

                                        @endforeach
                                        @endif</span>
                                </li>
                                <li><span>Dernier Access:</span><span>
                                        {{Auth::guard('admin')->user()->DernierAccess}}</span></li>

                        </div>


                    </div>


                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                            role="tab" data-toggle="tab">Home</a></li>
                                    <li role="presentation"><a href="#profile_settings" aria-controls="settings"
                                            role="tab" data-toggle="tab">Paramètre de profile</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                        <?php $user= Auth::guard('admin')->user()->Matricule;

 
 ?>

                                        <form action="{{URL::to('/modifiableuser', $user) }}" class="form-horizontal"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Nom</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="text" class="form-control" name="Nom"
                                                            placeholder="Name Surname"
                                                            value="{{Auth::guard('admin')->user()->Nom}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Prénom</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="text" class="form-control" id="name" name="Prenom"
                                                            placeholder="Name Surname"
                                                            value="{{Auth::guard('admin')->user()->Prénom}}"
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="email" class="form-control" id="Email" name="email"
                                                            placeholder="Email"
                                                            value="{{Auth::guard('admin')->user()->email}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-sm-2 control-label">password</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="password" id="password" name="password"
                                                            class="form-control" data-toggle="password"> </div>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Envoyer</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    @include('admin.layouts.footer_admin')




    <script type="text/javascript">
        $("#password").password('toggle');

    </script>
