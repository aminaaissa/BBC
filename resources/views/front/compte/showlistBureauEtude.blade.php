<head>
@include('front.layoutsfront.head-front')

</head>
@extends('front.layoutsfront.header-front')

    <section class="content">
        <div class="container-fluid">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

          

            <div class="row clearfix">
            
               
                <div class="">
                    <div class="card">
                        <div class="header">
                 
                        <h2>Liste des Bureau Etudes   </h2><br>
                        <div class="table-responsive">
                         
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                <th>Dénomination</th>
                                <th>Tel</th>
                                <th>Fax</th>
                             
                                </tr>
                            </thead>
                            <tbody>
                            @if($BureauEtude->count()>0)

@foreach($BureauEtude as $use)
                                <tr>
                                 


                                    <td>{{$use->bureau_etud}}</td>
                                     
                                       <td>
                                       
                                       {{$use->bureau_etudTél}}
                                      
                                       
                                       </td>
                                        <td>
                                    
                                        {{$use->bureau_etudFax}}
                                        
                                        </td>
                                        
                                           
                                             
                  
                                              
                                              
                                          
                                </tr>
                                @endforeach
                                
                                
                                @else 
        <div data-item-id="16437222" class="results-item">
        <h1 style="color: #ff9600;"> AUCUN BUREAU ETUDE   TROUVÉE</div>
        @endif
               
                            </tbody>
                        </table>
                    </div>
                           
                        </div>
                        
                        <div class="body">
                        <div class="row clearfix">
                
               
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    
@include('front.layoutsfront.footer_front')