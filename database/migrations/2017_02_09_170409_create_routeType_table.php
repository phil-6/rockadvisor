<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RouteType', function (Blueprint $table){
            //primary key
            $table->increments('id');

            //foreign keys
            $table->integer('routeTypeSystemId')->unsigned();
            $table->integer('routeTypeNameId')->unsigned();

            //system timestamps
            $table->timestamps();

            //foreign key references
            $table->foreign('routeTypeSystemId')->references('id')->
                on('routeTypeSystem')->onDelete('restrict');
            $table->foreign('routeTypeNameId')->references('id')->
                on('routeTypeName')->onDelete('restrict');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('RouteType');
    }
}