<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCragsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crags', function (Blueprint $table){
			$table->increments('id');
			$table->float("lat");
			$table->float("long");
            $table->string("crag_name");
            $table->text("crag_desc");
            $table->int("tidal_range");
            $table->char("orientation",3);
            $table->int("approach_time");
            $table->bool("seepage");
            $table->bool("midges");
            $table->bool("sheltered");
            //$table->int("area_id"); //foreign key

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
        Schema::drop('crags');
    }
}
