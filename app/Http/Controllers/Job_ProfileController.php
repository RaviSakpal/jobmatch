<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Photo;
use App\Profile;
use DB;

use App\Http\Requests;

class Job_ProfileController extends Controller
{
    public function jobProfileDetails()
    {

        $jobs = DB::table('jobs')->get();

        return view('admin.job_profile.index', ['jobs' => $jobs]);

    }
}
