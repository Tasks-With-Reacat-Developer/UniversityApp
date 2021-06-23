<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::table('users', function (Blueprint $table) {
      //add new column
      $table->string('student_id');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::table('users', function (Blueprint $table) {
      //drop column
      $table->dropColumn('student_id');
      });
    }
}
