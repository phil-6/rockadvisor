<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routeTypes', function (Blueprint $table){
            //primary key
            $table->increments('id');

            //foreign keys
            $table->integer('routeTypeSystemId')->unsigned()->nullable();
            $table->integer('routeTypeNameId')->unsigned();

            //system timestamps
            $table->timestamps();

            //foreign key references
            $table->foreign('routeTypeSystemId')->references('id')->
                on('routeTypeSystems')->onDelete('restrict');
            $table->foreign('routeTypeNameId')->references('id')->
                on('routeTypeNames')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('routeTypes');
    }
}