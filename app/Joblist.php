<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joblist extends Model
{
    //

    public function jobcategory(){

        return $this->belongsTo('App\Jobcategory');

    }

    public function getall(){

        return $this->all();

    }
}
