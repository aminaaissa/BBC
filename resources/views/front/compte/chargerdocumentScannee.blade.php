<!DOCTYPE html>
<html>
<link href="{{asset('admin-asset/plugins/dropzone/dropzone.css')}}" rel="stylesheet">
<!-- Bootstrap Spinner Css -->
<script src="{{asset('admin-asset/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<link href="{{asset('admin-asset/plugins/jquery-spinner/css/bootstrap-spinner.css')}}" rel="stylesheet">

<head>
    @include('front.layoutsfront.head-front')

</head>
@extends('front.layoutsfront.header-front')
<style>
    .inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    .inputfile+label {
        font-size: 1.25em;
        font-weight: 700;
        color: white;
        background-color: black;
        display: inline-block;
    }

    .inputfile:focus+label,
    .inputfile+label:hover {
        background-color: #8BC34A;
    }

</style>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text">Bon de commande Validée</div>
                        <?php $client=App\B_bcommande::where('client_id','=',Auth::guard('web')->user()->id)->count();?>
                        <div class="number count-to" data-from="0" data-to="{{$client}}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="content">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Télécharger le document scannée avec cachet &amp; &amp;
                    </h2>

                </div>
                <div class="body">
                    <form action="{{route('boncom.uploadsigne',$use->code)}}" id="frmFileUpload"
                        class="dropzone dz-clickable" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if (count($errors) > 0)
              @foreach($errors->all() as $error)
              <p class="alert alert-danger">{{ $error}}</p>
              @endforeach
              @endif
              
                        <div class="dz-message">
                            <input type="file" value="docSig" accept=".pdf" name="docSig" class="form-control">
                            <label for="file">Choisissez un fichier
                            </label>
                            <h3>Télécharger document ici ou click to télécharger .</h3>
                        </div>
                        <center> <button type="submit" value=" Enregistrez" class="btn btn-success"
                                id="submit">Enregistrez</button></center>

                    </form>

                </div>
            </div>
        </div>
    </div>




















    @include('front.layoutsfront.footer_front')
