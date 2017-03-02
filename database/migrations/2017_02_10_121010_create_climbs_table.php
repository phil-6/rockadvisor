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
           $table->integer("grade_id")->unsigned();
           $table->integer("crag_id")->unsigned();

           $table->timestamps();

           // TODO: Needs looking at - what happens when we delete a topo?
           $table->foreign('topo_id')->references('id')->
                on('topos')->onDelete('set null');
           $table->foreign('grade_id')->references('id')->
                on('grades')->onDelete('restrict');
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
        Schema::drop('climbs');
    }
}
