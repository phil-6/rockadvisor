<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClimbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('climbs', function (Blueprint $table){
           $table->increments('id');
           $table->string ("name");
           $table->text("description");
           $table->integer("length")->unsigned();

           $table->integer("topo_id")->unsigned()->nullable()->default(null);
           $table->integer("grade_id")->unsigned()->nullable()->default(null);
           $table->integer("crag_id")->unsigned();

           $table->timestamps();

           $table->foreign('topo_id')->references('id')->
                on('topos')->onDelete('restrict');
           $table->foreign('grade_id')->references('id')->
                on('grades')->onDelete('restrict');
           $table->foreign('crag_id')->references('id')->
                on('crags')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('climbs');
    }
}
