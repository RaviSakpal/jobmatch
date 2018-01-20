<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobcategory extends Model
{

    public function joblist(){
        return $this->hasMany('App\Joblist');

    }

    public function getall(){
     $allcategories=$this->all();
       return $allcategories;

    }
    
    public function getjobs($id){
        $jobs=Jobcategory::find($id)->joblist;
        return $jobs;
    }


}
