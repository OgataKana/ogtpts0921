<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->string('user_nickname', 15)->nullable();
            $table->string('user_tel')->length(11)->nullable();
            $table->string('user_address')->nullable();
            $table->integer('user_gender')->nullable();
            $table->string('user_genre')->nullable();
            $table->integer('user_height')->length(3)->nullable();
            $table->integer('user_camera_id')->nullable();
            $table->string('image')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
