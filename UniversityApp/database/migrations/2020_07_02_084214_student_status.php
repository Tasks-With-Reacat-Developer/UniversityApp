<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::table('student_data', function (Blueprint $table) {
    //add new column
     $table->string('student_status')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_data', function (Blueprint $table) {
            //drop column
            $table->dropColumn('student_status');
        });
    }
}
