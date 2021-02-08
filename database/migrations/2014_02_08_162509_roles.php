<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Roles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('roles', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->string('role',49);
            $table->timestamps();
        });
       
        DB::table('roles')->insert([
            'role'=> 'admin',
            'role'=> 'guest',
            'role'=>'editor'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
