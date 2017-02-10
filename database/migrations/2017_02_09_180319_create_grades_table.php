<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table){
            $table->increments('id');
            $table->integer('routeTypeId')->unsigned();
            $table->char('technical_grade', 10)->nullable();
            $table->char('severity_grade', 10)->nullable();
            $table->integer('score')->unsigned()->nullable();

            //system timestamps
            $table->timestamps();

            //foreign key reference
            $table->foreign('routeTypeId')->references('id')->
                on('routeTypes')->onDelete('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grades');
    }
}
