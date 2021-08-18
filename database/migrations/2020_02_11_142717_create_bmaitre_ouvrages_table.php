<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBmaitreOuvragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bmaitre_ouvrages', function (Blueprint $table) {
            $table->bigIncrements('code');
            $table->string('adr')->nullable();
            $table->string('tel')->nullable();

            $table->string('fax')->nullable();
            $table->string('email')->unique();
            $table->string('nom')->nullable();
         $table->string('SiteWeb')->nullable();

            $table->unsignedBigInteger('Bwilaya_code')->nullable();
            $table->unsignedBigInteger('ccom')->nullable();
            $table->string('CategorieTier')->nullable();
            $table->string('Abrevation')->nullable();
            $table->string('FamilleMouvrage')->nullable();
            $table->timestamp('DateModif')->nullable();
            $table->timestamp('DateArrivSrv')->nullable();
            $table->string('MotDePasse')->nullable();
            $table->string('ValidUser')->nullable();
            $table->string('CompteComptable')->nullable();
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
        Schema::dropIfExists('bmaitre_ouvrages');
    }
}
