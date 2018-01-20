<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DownColumnFromJobUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs',function($table){

            $table->dropColumn('companyDes');
        });
        Schema::table('jobUsers',function($table){

            $table->dropColumn('companyDes');
        });
    }

    public function down()
    {

    }
}
