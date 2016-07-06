<?php

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
            $table->increments('id',5);
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->string('badgeNumber',50);
            $table->string('emailAddress')->unique();
            $table->string('username',50);
            $table->string('password', 60);
            $table->string('active',5)->default(0);
            $table->string('role',5)->default(0);
            $table->string('code',60);
            $table->string('passTemp',60);
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
        Schema::drop('users');
    }
}
