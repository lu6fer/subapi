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
            $table->increments('id');
	        $table->string('slug')->unique();
            $table->string('name');
	        $table->string('first_name');
            $table->string('email')->unique();
	        $table->string('street');
	        $table->string('city');
	        $table->string('zip_code');
	        $table->string('phone_number');
	        $table->string('mobile_phone');
	        $table->string('pro_phone');
	        $table->date('birthday');
	        $table->string('birth_city');
	        $table->string('birth_country');
            $table->string('password');
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
