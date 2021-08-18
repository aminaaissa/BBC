<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBBcommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_bcommandes', function (Blueprint $table) {
            $table->increments('code');
            $table->integer('client_id')->unsigned();
           
            $table->string('intitule_proj')->nullable();
            $table->string('CodeWilaya')->nullable();
            $table->string('CodeCommune')->nullable();
            $table->string('adress_proj')->nullable();
            $table->string('bureau_etud')->nullable();
        
            $table->string('maitre_oeuv')->nullable();
            $table->string('maitre_oeuvTél')->nullable();
            $table->string('maitre_oeuvFax')->nullable();
            $table->string('maitre_oeuvAdresse')->nullable();
           
            $table->string('maitre_oeuvEmail')->nullable();
           
            $table->string('bureau_etudTél')->nullable();
            $table->string('bureau_etudFax')->nullable();
           

            $table->string('SurfaceConstruitM2')->nullable();
            $table->timestamp('DateDebuttravaux')->nullable();
            $table->string('DateDélaisTravaux')->nullable();
            $table->boolean('AvantProjet')->default(0);
            $table->boolean('Projetdexécution')->default(0);
            $table->boolean('Esquisse')->default(0);
           
            $table->string('IngControlleSite')->nullable();
            $table->string('IngNumeroagrement')->nullable();
            $table->string('laboratoire')->nullable();
            $table->string('laboratoireTél')->nullable();
            $table->string('laboratoireFax')->nullable();
            $table->string('laboratoireAdresse')->nullable();
            $table->string('laboratoireEmail')->nullable();
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
        Schema::dropIfExists('b_bcommandes');
    }
}
