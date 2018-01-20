<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoblistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joblists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_name');
            $table->integer('job_rank');
            $table->string('job_company');
            $table->longText('job_des');
            $table->longText('company_des');
            $table->integer('jobcategory_id');
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
