<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->index()->unsigned()->nullable();
            $table->integer('profile_id')->index()->unsigned()->nullable();

            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('profile_id')->references('id')->on('profiles');
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
        Schema::drop('job_profile');
    }
}
