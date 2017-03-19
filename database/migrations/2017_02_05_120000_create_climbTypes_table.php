<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClimbTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('climbTypes', function (Blueprint $table){
            //primary key
            $table->increments('id');

            //foreign keys
            $table->integer('climbTypeSystemId')->unsigned()->nullable();
            $table->integer('climbTypeNameId')->unsigned();

            //system timestamps
            $table->timestamps();

            //foreign key references
            $table->foreign('climbTypeSystemId')->references('id')->
                on('climbTypeSystems')->onDelete('restrict');
            $table->foreign('climbTypeNameId')->references('id')->
                on('climbTypeNames')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('climbTypes');
    }
}