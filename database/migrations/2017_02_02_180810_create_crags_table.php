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
            $table->string("name");
            $table->text("description");
            $table->integer('tidal_range')->unsigned();
            $table->char("orientation", 3);
            $table->integer('approach_time')->unsigned();
            $table->boolean("seepage");
            $table->boolean("midges");
            $table->boolean("sheltered");
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
