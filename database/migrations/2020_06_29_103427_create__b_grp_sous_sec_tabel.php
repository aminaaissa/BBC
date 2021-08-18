<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBGrpSousSecTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BGrpGrpSec_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('codeGrpSec')->nullable();
            $table->string('LibelleGrpSec')->nullable();
            $table->timestamp('DateModif')->nullable();


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
        Schema::dropIfExists('_b_grp_sous_sec_tabel');
    }
}
