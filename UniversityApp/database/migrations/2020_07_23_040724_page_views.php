<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PageViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('page_views', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('views')->nullable();
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
      Schema::dropIfExists('page_views');
    }
}
