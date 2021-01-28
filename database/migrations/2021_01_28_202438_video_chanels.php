<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VideoChanels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_chanels', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('video_id')->unsigned();
            $table->integer('chanel_id')->unsigned();
            $table->timestamps();
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
            $table->foreign('chanel_id')->references('id')->on('chanels')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chanels');
    }
}
