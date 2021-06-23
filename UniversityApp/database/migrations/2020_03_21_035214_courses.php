<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Courses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('department_id')->unsigned()->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('course_group')->unsigned()->nullable();
            $table->foreign('course_group')->references('id')->on('course_groups')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('course_order')->unsigned()->nullable();
            $table->foreign('course_order')->references('id')->on('course_orders')->onUpdate('cascade')->onDelete('cascade');
            $table->string('course_name');
            $table->bigInteger('course_number');
            $table->integer('hours');
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
        Schema::dropIfExists('courses');
    }
}
