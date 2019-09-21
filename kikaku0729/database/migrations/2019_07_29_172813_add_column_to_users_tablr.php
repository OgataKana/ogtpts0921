<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToUsersTablr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {  
            $table->string('user_nickname', 15)->nullable();
            $table->string('user_tel')->length(11)->nullable();
            $table->string('user_address')->nullable();
            $table->integer('user_gender')->nullable();
            $table->string('user_genre')->nullable();
            $table->integer('user_height')->length(3)->nullable();
            $table->integer('user_camera_id')->nullable();
            $table->string('image')->nullable();
            
        });
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
