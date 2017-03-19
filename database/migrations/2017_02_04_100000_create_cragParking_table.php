<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 19/03/2017
 * Time: 10:16
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCragParkingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("cragParking", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("crag_id")->unsigned();
            $table->integer("parkingLocation_id")->unsigned();
            $table->timestamps();

            $table->foreign("crag_id")->references("id")->
            on("crags")->onDelete("cascade");
            $table->foreign("parkingLocation_id")->references("id")->
            on("parkingLocations")->onDelete("cascade");
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cragParking');
    }
}