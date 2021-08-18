<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrivilegesToBusers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_busers', function (Blueprint $table) {
           $table->integer('privileges_id')->nullable()->after('role_id');
            // $table->foreign('privileges_id')->references('id')->on('privileges')->onDelete('cascade')->after('role_id');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_busers', function (Blueprint $table) {
            //
            $table->dropColumn('privileges_id');
        });
    }
}
