<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEuropeFeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('europe_feeds', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('guid');
            $table->mediumText('title');
            $table->mediumText('link');
            $table->mediumText('description');
            $table->char('pubDate', 50);
            $table->char('feed_id',50)->unique();
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
        Schema::dropIfExists('europe_feeds');
    }
}
