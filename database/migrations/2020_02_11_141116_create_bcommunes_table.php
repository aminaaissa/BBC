<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBcommunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bcommunes', function (Blueprint $table) {
            $table->bigIncrements('ccom');
            $table->string('commune');
            $table->timestamp('DateModif');
            $table->unsignedBigInteger('Bwilaya_code');

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
        Schema::dropIfExists('bcommunes');
    }
}
