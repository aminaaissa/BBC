<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbureauEtudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbureau_etudes', function (Blueprint $table) {
            $table->string('code');

             $table->string('nom')->nullable();
             $table->string('adr')->nullable();
             $table->string('tel')->nullable();
              $table->string('fax')->nullable();


            $table->string('email')->unique();
            $table->string('SiteWeb')->nullable();
             $table->string('Wilaya')->nullable();
             $table->string('Commune')->nullable();
             $table->string('CategorieTier')->nullable();
             $table->timestamp('DateModif')->nullable();

            $table->timestamp('DateArrivSrv')->nullable();
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
        Schema::dropIfExists('bbureau_etudes');
    }
}
