<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEuropeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('europe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->char('feed_id',50);
            $table->char('category',150);
            $table->foreign('feed_id')->references('feed_id')->on('europe_feeds')->onUpdate('cascade');
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
        Schema::dropIfExists('europe_categories');
    }
}
