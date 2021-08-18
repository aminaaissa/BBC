<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBagencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {  
        
        
    


        Schema::create('bagences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_ag')->nullable();
        
            $table->string('nom_ag')->nullable();
            $table->string('adresse')->nullable();
            $table->string('Tel')->nullable();
            $table->string('Fax')->nullable();
            $table->string('Telegraphe')->nullable();
          
            $table->string('Email')->unique();
            $table->string('RC')->nullable();
            $table->string('IA')->nullable();
            $table->string('Nif')->nullable();
            $table->string('Compte_bancaire')->nullable();
            $table->string('NSS')->nullable();
            $table->string('abreger')->nullable();
            $table->integer('Sommeil')->nullable();
            $table->integer('NumeroRef')->nullable();
            $table->string('LieuSortant')->nullable();
            $table->timestamp('DateCourrier')->nullable();
            $table->integer('NumeroSequentiel')->nullable();
            $table->integer('VisibleGCPRO')->nullable();
            $table->integer('GuichetUnique')->nullable();
            
            $table->string('WilayaAg')->nullable();
            $table->string('CommuneAg')->nullable();
            $table->timestamp('DateModifConsolid')->nullable();
            $table->timestamp('DateModif')->nullable();
            $table->string('Nom_DR')->nullable();

            

         
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
        Schema::dropIfExists('bagences');
    }
}
