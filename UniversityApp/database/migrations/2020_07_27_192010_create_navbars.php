<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavbars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nav_id')->nullable()->unsigned();
            $table->foreign('nav_id')->references('id')->on('nav__multi_links')->onUpdate('cascade')->onDelete('cascade');
            $table->string('page_title');
            $table->string('link');
            $table->string('type')->nullable();
            $table->string('language');
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
        Schema::dropIfExists('navbars');
    }
}
