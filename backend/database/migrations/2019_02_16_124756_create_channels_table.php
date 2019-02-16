<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->increments('id');
            $table->char('channel',50);
            $table->mediumText('title');
            $table->mediumText('link');
            $table->mediumText('description')->nullable($value = true);
            $table->char('language',50);
            $table->char('copyright',100);
            $table->char('lastBuildDate',50);
            $table->char('image_title',50);
            $table->char('image_url',100);
            $table->char('image_link',100);
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
        Schema::dropIfExists('channels');
    }
}
