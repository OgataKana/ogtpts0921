<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests_admin', function (Blueprint $table) {
            $table->increments('request_id');
            $table->integer('genre_id');
            $table->text('comment');
            $table->integer('user_id');
            $table->integer('admin_id');
            $table->boolean('judg');
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
        Schema::dropIfExists('requests_admin');
    }
}
