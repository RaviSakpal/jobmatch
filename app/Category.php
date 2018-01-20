<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * @var array
     * This is model is defining categories of users
     * Administrator, Employer and Jobseeker
     */
     protected $fillable = ['name'];


    public function getData(){

       $date= $this->where('id','>','3').get();
        return $date;
    }
}
