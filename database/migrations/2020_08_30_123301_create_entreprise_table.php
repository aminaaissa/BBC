<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepriseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise', function (Blueprint $table) {
            $table->id();
            $table->string('NbrSociete')->nullable();
            $table->string('Raison_sociale')->nullable();
            $table->string('Abrv')->nullable();
            $table->string('AbrvArb')->nullable();

                $table->string('Adresse')->nullable();
                $table->string('CodeFnt')->nullable();
               // $table->string('NbrSociete')->nullable();
                $table->string('Raison_socArb')->nullable();

                $table->string('AdresseArb')->nullable();
                 
                $table->string('AdresseAng')->nullable();
                $table->string('Tel')->nullable();
           

                $table->string('Fax')->nullable();
                $table->string('Telegraphe')->nullable();
                $table->string('RC')->nullable();
            
                $table->string('IA')->nullable();
            
                $table->string('IF')->nullable();

                $table->string('Compte_bancaire')->nullable();
            
              //  $table->string('IF')->nullable();
            
            
            
            
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
        Schema::dropIfExists('entreprise');
    }
}
