<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMaitreOuvrageToBBcommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('b_bcommandes', function (Blueprint $table) {
            
            $table->string('MaitreOuvrage')->nullable()->after('maitre_oeuvEmail');
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
            $table->dropColumn('MaitreOuvrage');
        });
    }
}
// Ajouter des column des tables php artisan make:migration add_bureau_etudTél_to_b_bcommandes_table --table=b_bcommandes
            