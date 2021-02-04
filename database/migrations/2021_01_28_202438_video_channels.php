<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VideoChannels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_channels', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('video_id')->unsigned();
            $table->integer('channel_id')->unsigned();
            $table->timestamps();
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
            $table->foreign('channel_id')->references('id')->on('channels')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('channels');
    }
}
