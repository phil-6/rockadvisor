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
        Schema::create("crags", function (Blueprint $table){
			$table->increments("id");
            $table->double("lat",11,8);
            $table->double("lng",11,8);
            $table->string("name");
            $table->text("description");
            $table->integer("tidalRange")->unsigned()->nullable()->default(null);
            $table->char("orientation", 3);
            $table->integer("approach_time")->unsigned();
            $table->string("approachDetails");
            $table->string("rockType")->nullable()->default(null);

            $table->boolean("seepage")->default(false);
            $table->boolean("midges")->default(false);
            $table->boolean("sheltered")->default(false);
            
            $table->integer("area_id")->unsigned();

			$table->timestamps();

            $table->foreign("area_id")->references("id")->
                on("areas")->onDelete("cascade");

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
