<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            /*$table->bigInteger('st_courses')->unsigned();
            $table->foreign('st_courses')->references('id')->on('student_courses')->onUpdate('cascade')->onDelete('cascade');
            */
            $table->bigInteger('level');
            $table->bigInteger('college')->unsigned();
            $table->foreign('college')->references('id')->on('colleges')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('department')->unsigned();
            $table->foreign('department')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->float('gpa',9,3)->nullable();
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
        Schema::dropIfExists('student_data');
    }
}
