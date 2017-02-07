<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table){
           $table->increments('id');
           $table->string ("name");
           $table->text("description");
           $table->integer("length")->unsigned();

           //$table->integer("topo_id")->unsigned();
           //$table->integer("grade_id")->unsigned();
           $table->integer("crag_id")->unsigned();

           $table->timestamps();

           //$table->foreign('topo_id')->references('id')->
                //on('topos')->onDelete('cascade');
           //$table->foreign('grade_id')->references('id')->
                //on('grades')->onDelete('cascade');
           $table->foreign('crag_id')->references('id')->
               on('crags')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('routes');
    }
}
