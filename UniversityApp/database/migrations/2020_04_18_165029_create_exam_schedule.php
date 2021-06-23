<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_schedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_name');
            $table->bigInteger('exams_schedules_id')->unsigned();
            $table->foreign('exams_schedules_id')->references('id')->on('exams_schedules')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('exam_schedule');
    }
}
