<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecsSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecs_schedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_name');
            $table->bigInteger('lecs_schedules_id')->unsigned();
            $table->foreign('lecs_schedules_id')->references('id')->on('lecs_schedules')->onUpdate('cascade')->onDelete('cascade');
            $table->string('instructor_name')->nullable();
            $table->string('professor_name')->nullable();
            $table->string('day');
            $table->string('time_from');
            $table->string('time_to');
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
        Schema::dropIfExists('lecs_schedule');
    }
}
