<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_busers', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id')->default(2);
            $table->string('Matricule');
            $table->string('Nom')->nullable();
            $table->string('Nomjeunfille')->nullable();
            $table->string('Prénom')->nullable();
            $table->string('Structure')->nullable();
            $table->string('DirectionAntenne')->nullable();
            $table->string('Service')->nullable();
            $table->string('Fonction')->nullable();
            $table->string('password')->nullable();
            $table->string('GroupSec')->nullable();
            $table->string('GroupSousSec')->nullable();
            $table->string('CheminImagefond')->nullable();
            $table->integer('couleurfenetres')->nullable();
            $table->integer('couleurecriture')->nullable();
           $table->string('Createutilisateur')->nullable();
            $table->timestamp('Createdate')->nullable();
            $table->string('Modifutilisateur')->nullable();
            $table->timestamp('Moddate')->nullable();
            $table->timestamp('DernierAccess')->nullable();
            $table->string('NbrAcces')->nullable();
            $table->string('GED')->nullable();
            $table->integer('GEDConsultation')->nullable();
            $table->string('GEDpw')->nullable();
            $table->timestamp('DateEmbouche')->nullable();
            $table->timestamp('DateNaissance')->nullable();
            $table->integer('Sexe')->nullable();
            $table->integer('Etat')->nullable();
            $table->integer('GCProAdministratif')->nullable();
            $table->integer('GCProEcheance')->nullable();
            $table->integer('GCProTEchnique')->nullable();
            $table->integer('GCProSecretariat')->nullable();
            //$table->string('SousStructure')->nullable();
            $table->integer('Actif')->nullable();
            $table->integer('GEDvalidation')->nullable();
            $table->string('PswGt')->nullable();
            $table->string('Gtacces')->nullable();
            $table->string('ArAvHeure')->nullable();
            $table->string('ArAprHeure')->nullable();
            //$table->string('SrAvHeure')->nullable();
           // $table->string('SrAprHeure')->nullable();
            $table->string('CycleHoraire')->nullable();
            $table->string('LieuPointage')->nullable();

            $table->integer('GCProDirecteur')->nullable();

            $table->integer('GCProAvancement')->nullable();

            $table->integer('GCPro_DGP')->nullable();


            $table->string('GECPrivilege')->nullable();

            $table->string('GECPassword')->nullable();
            $table->timestamp('DateModif')->nullable();

            $table->timestamp('DateArrivSrv')->nullable();

           // $table->string('Nom_DR')->nullable();

            $table->integer('PrivilSignCVT')->nullable();

            $table->integer('PrivilSignCVTNiv2')->nullable();
            $table->integer('PrivilModifArticlesCVT')->nullable();


            $table->string('Civilite')->nullable();
           // $table->string('WilayaNaissance')->nullable();
            $table->string('PasswordGCPro')->nullable();
            $table->string('WilayaNaissance')->nullable();
            $table->string('CommuneNaissance')->nullable();
            //
            $table->integer('GComFacturation')->nullable();
            $table->string('PasswordGCom')->nullable();
            $table->timestamp('DateModifConsolid')->nullable();
            $table->integer('PrivilModifEcheanceFhon')->nullable();
            $table->string('Nom_DR')->nullable();
 $table->string('GComCreances')->nullable();
            $table->string('SrvCrl_Tech')->nullable();

            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_busers');
    }
}
