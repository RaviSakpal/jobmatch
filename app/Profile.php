<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [

        'photo_id',
        'skill1',
        'skill2',
        'skill3',
        'experience',
        'interests',
        'description',


    ];

    protected $primaryKey = 'id';

    public function user(){


        return $this->belongsTo('App\User');


    }


    public function photo(){


        return $this->belongsTo('App\Photo');


    }

    public function job(){


        return $this->belongsTo('App\Job');


    }

    public function jobs(){


        return $this->belongsToMany('App\Job');


    }
}