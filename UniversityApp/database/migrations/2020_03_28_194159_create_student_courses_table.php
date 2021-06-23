<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_data_id')->unsigned();
            $table->foreign('student_data_id')->references('id')->on('student_data')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onUpdate('cascade')->onDelete('cascade');
            $table->float('mid_term_grade')->nullable();
            $table->float('grade')->nullable();
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
        Schema::dropIfExists('student_courses');
    }
}
