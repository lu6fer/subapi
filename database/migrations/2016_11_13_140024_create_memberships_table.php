<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('licence');
            $table->string('asac');
            $table->date('date');
            $table->integer('origin')->unsigned()->index();
            $table->foreign('origin')->references('id')->on('membership_origins')->onDelete('cascade');
            $table->boolean('magazine')->nullable();
            $table->boolean('tank')->nullable();
            $table->boolean('regulator')->nullable();
            $table->boolean('supervisor')->nullable();
            $table->boolean('pool_lannion')->nullable();
            $table->boolean('free_pool')->nullable();
            $table->boolean('pool_trestel')->nullable();
            $table->boolean('local_access')->nullable();
            $table->string('insurance');
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
        Schema::dropIfExists('memberships');
        //Schema::dropIfExists('membership_origins');
    }
}
