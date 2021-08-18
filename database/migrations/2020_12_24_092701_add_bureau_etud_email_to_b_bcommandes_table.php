<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBureauEtudEmailToBBcommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('b_bcommandes', function (Blueprint $table) {
            $table->string('bureau_etudEmail')->nullable()->after('bureau_etudAdr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('b_bcommandes', function (Blueprint $table) {
            //
            $table->dropColumn('bureau_etudEmail');
        });
    }
}