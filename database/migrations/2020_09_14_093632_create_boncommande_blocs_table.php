<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoncommandeBlocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boncommande_blocs', function (Blueprint $table) {
            $table->bigIncrements('code');
            
            $table->integer('bcommande_code');

            $table->string('Désignation')->nullable();
            $table->string('NombredEtages')->nullable();
            $table->string('NombredeBatiment')->nullable();
            $table->string('EmpriseduBatiment')->nullable();
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
        Schema::dropIfExists('boncommande_blocs');
    }
}
