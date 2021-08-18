<html class="chrome">
    <head>
    @include('admin.layouts.head_admin'
)
</head>

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
  <!-- Latest CSS -->
 
</head>
<
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Management</h2>
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
                        <div class="icon"><?php $client=App\User::count();?>
                            <i class="">{{$client}}</i>
                        </div>
                        <div class="content">
                            <div class="text">Clients</div>
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
                        <div class="icon"><?php $client=App\B_bcommande::count();?>
                            <i class="-icons">{{$client}}</i>
                        </div>
                        <div class="content">
                            <div class="text">Bon de commande Validée</div>
                            <div class="number count-to" data-from="0" data-to="" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <?php      ?>
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                                         <div class="header">
                            <h2>DIAGRAMME CIRCULAIRE</h2>
                           
                                           </div>
                              <div class="body">
                                 <div class="chart-container">
                                                       <div class="pie-chart-container">
                                <canvas id="pie-chart"style="display: block; height: 295px; width: 596px;"></canvas>
                                                     </div>
                               </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DIAGRAMME CIRCULAIRE
</h2>
                            <
                        </div>
                        <div class="body">
                        <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                    
                                            <th style="width:10%">Nom</th>
                                            <th style="width:20%">Email</th>
                                            <th style="width:10%">Type</th>
                                            <th style="width:10%">Compte</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody> 
                                  @foreach(\App\User::orderby('created_at','desc')->take(5)->get() as $client)
                                     
                                        <tr>
                                    
                                            <td>{{$client->Nom}}</td>
                                            <td>{{$client->email}}</td>
                                            <td> @if($client->type==1)

                                       <span class="label bg-orange">  BureauEtude</span>

                                         @elseif($client->type==3)

                                                                <span class="label bg-orange">  Bmaitre</span>
                                         @elseif($client->type==2)

                                                                <span class="label bg-orange">  Laboratoir</span>
                                             @endif</td>
<td> @if($client->is_activated)
                          <span class="label bg-green">Actif</span>
                          @else
                         <span class="label label-warning">Inactifs</span>


                          @endif</td>
                                            
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        
 
  <!-- javascript --> @include('admin.layouts.footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
   <script>
  $(function(){
      //get the pie chart canvas
      var cData = JSON.parse(`<?php echo $chart_data ?? ''; ?>`);
      var ctx = $("#pie-chart");
 
      //pie chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: "Users Count",
            data: cData.data,
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Last Week Registered Users -  Day Wise Count",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create Pie Chart class object
      var chart1 = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options
      });
 
  });
</script>
</body>
</html>