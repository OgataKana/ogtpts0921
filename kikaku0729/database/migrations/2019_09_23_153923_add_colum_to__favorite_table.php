<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumToFavoriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('favorites', function (Blueprint $table) {
        // $table->foreign('user_id')
        // ->references('id')
        // ->on('users')
        // ->onDelete('cascade'); // userが削除されたとき、それに関連するlikeも一気に削除される


        // $table->foreign('admin_id')
        //     ->references('id')
        //     ->on('admins')
        //     ->onDelete('cascade'); // adminが削除されたとき、それに関連するlikeも一気に削除される
        // });
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
