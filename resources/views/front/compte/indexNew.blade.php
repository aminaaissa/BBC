
<!DOCTYPE html>
<html>

<head>
@include('front.layoutsfront.head-front')

</head>
@extends('front.layoutsfront.header-front')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Bon de commande </div><?php $client=App\B_bcommande::where('client_id','=',Auth::guard('web')->user()->id)->count();?>
                            <div class="number count-to" data-from="0" data-to="{{$client}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Bureau Etude </div><?php $client=App\B_bcommande::where('client_id','=',Auth::guard('web')->user()->id)->count();?>
                            <div class="number count-to" data-from="0" data-to="{{$client}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Laboratoire Etudes
de Sol <br>(Géotechnique) : </div><?php $client=App\B_bcommande::where('client_id','=',Auth::guard('web')->user()->id)->count();?>
                            <div class="number count-to" data-from="0" data-to="{{$client}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
        </div>
        </div>

<br>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                      <div class="card">
                                                                     
                                                         <div class="body">
                                                                  <div class="chart-container">
                                                                              <div class="pie-chart-container"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                                                  <canvas id="pie-chart" style="display: block; height: 407px; width: 822px;" width="739" height="366" class="chartjs-render-monitor"></canvas>
                                                                                 </div>
                                                                </div>
                                                         </div>
                                                          </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h2>Bureau Etude
</h2>
                           
                        </div>
                        <div class="body">
                        <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                    
                                            <th style="width:10%">Dénomination</th>
                                            <th style="width:20%">Adresse</th>
                                            <th style="width:10%">Tél/Fax</th>
                                            <th style="width:10%">Ingenieur Chargé du l'Etude G.Civil</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody> 
                                           @foreach(App\B_bcommande::where('client_id','=',Auth::guard('web')->user()->id)->get() as $bureau)                            
                                        <tr>
                                    
                                            <td>{{$bureau->bureau_etud}}</td>
                                            <td>{{$bureau->bureau_etudFax}}</td>
                                            <td> 
                                                                <span class="label bg-orange"> </span>
                                         </td>
<td>                          <span class="label label-warning"> {{$bureau->IngControlleSite}}</span>


                          </td>
                                            
                                        </tr>@endforeach
                                                                           
                                        
                                                                           
                                        
                                                                           
                                        
                                                                           
                                        
                                                                          </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    @include('front.layoutsfront.footer_front')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
 
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
          text: " nbr de bon de commande  par wilaya ",
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
