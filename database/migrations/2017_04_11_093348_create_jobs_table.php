<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('job_title');
            $table->integer('photo_id')->unsigned()->index();
            $table->string('skill1');
            $table->string('skill2');
            $table->string('skill3');
            $table->string('skill4');
            $table->integer('experience');
            $table->string('description');
            $table->string('internest1');
            $table->string('internest2');
            $table->string('internest3');
            $table->string('internest4');
            $table->string('wage');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}
