<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBGrpSSecTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BGrpSSec_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('codeGrpSec')->nullable();
            $table->string('LibelleGrpSSec')->nullable();
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
        Schema::dropIfExists('_b_grp_s_sec_tabel');
    }
}
