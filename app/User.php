<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'category_id', 'photo_id', 'is_active', '',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function photo(){

        return $this->belongsTo('App\Photo');

    }

    public function profile(){

        return $this->belongsTo('App\Profile');

    }

    public function isAdmin(){

//        if($this->role->name  == "administrator" && $this->is_active == 1){
        if($this->is_active == 1){

            return true;

        }
        return false;

    }

    public function jobs(){


        return $this->hasMany('App\Job');


    }
    public function profiles(){


        return $this->hasMany('App\Profile');


    }
}
