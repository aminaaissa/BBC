<!DOCTYPE html>
<html>

<head>
@include('front.layoutsfront.head-front')

</head>
@extends('front.layoutsfront.header-front')

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
                                <h3> @if(Auth::guard('web')->check())
    {{Auth::guard('web')->user()->Nom}}@endif</h3>
                                <p>
                                
                                
                                </p>
                                <p></p>
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                            

                           
                                <li>
                                    <span>Nom</span>
                                    <span> 
                                    {{Auth::guard('web')->user()->Nom}}
                               
    
</span>
                                </li>
                                <li>
                                    <span>Prénom </span>
                                    <span> 
                                
                                    {{Auth::guard('web')->user()->Prenom}}  
    
</span>
                                </li>
                                <li>
                                    <span>Qualite</span>
                                    <span> 
                                      {{Auth::guard('web')->user()->Qualite}} 
                                
    
</span>
                                </li> <li>
                                    <span>Adresse</span>
                                    <span> 
                                    {{Auth::guard('web')->user()->Adresse}} 
                              
    
</span>
                                </li>
                                <li>
                                    <span>Raisonsocial</span>
                                    <span> 
                                    {{Auth::guard('web')->user()->Raisonsocial}}
    </span>
                                </li>

                                <li>
                                    <span>Telephone</span>
                                    <span>  {{Auth::guard('web')->user()->Telephone}}
                                </span>
                                </li>
                               <li> <span>Fax</span>
                               <span>  {{Auth::guard('web')->user()->Fax}}
                                </span></li>
                              
                                <li> <span>email</span>
                               <span>  {{Auth::guard('web')->user()->email}}
                                </span></li>

                               
                        </div>
                        
                        
                    </div>

                   
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                   
                                    <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Paramètre de profile</a></li>
                                </ul>

                                <div class="tab-content">
                           
                                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                    <?php $user= Auth::guard('web')->user()->id;

 
 ?>

                                    <form action="{{URL::to('/modifiableclient', $user) }}" class="form-horizontal"method="POST"enctype="multipart/form-data">
                                    @csrf
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Nom</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="text" class="form-control" name="Nom" placeholder="Name Surname" value="{{Auth::guard('web')->user()->Nom}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Prénom</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="text" class="form-control" id="name" name="Prenom" placeholder="" value="{{Auth::guard('web')->user()->Prenom}}" required="">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Qualite </label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="text" class="form-control" id="name" name="Qualite" placeholder="" value="{{Auth::guard('web')->user()->Qualite }}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Adresse </label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="text" class="form-control" id="name" name="Adresse" placeholder="" value="{{Auth::guard('web')->user()->Adresse }}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Raisonsocial </label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="text" class="form-control" id="name" name="Raisonsocial" placeholder="" value="{{Auth::guard('web')->user()->Raisonsocial }}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Telephone </label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="text" class="form-control" id="name" name="Telephone" placeholder="" value="{{Auth::guard('web')->user()->Telephone }}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NameSurname" class="col-sm-2 control-label">Fax </label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="text" class="form-control" id="name" name="Fax" placeholder="" value="{{Auth::guard('web')->user()->Fax }}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                        <input type="email" class="form-control"readonly id="Email" name="email" placeholder="Email" value="{{Auth::guard('web')->user()->email}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Image / logo</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line focused">
                                                    <input type="file" name="image">                                                    </div>
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






    <script type="text/javascript">
	$("#password").password('toggle');
</script>



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
  <!-- Jquery DataTable Plugin Js -->
  <script src="{{asset('admin-asset/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin-asset/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin-asset/js/pages/tables/jquery-datatable.js')}}"></script>
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


