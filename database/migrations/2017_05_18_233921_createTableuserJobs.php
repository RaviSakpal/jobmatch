<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableuserJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobUsers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('job_title');
            $table->string('description');
            $table->integer('wage');
            $table->longText('company');
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
        //
    }
}
