<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    function createJob(Request $req)
    {
        $job_name = $req->input('job_name');
        $job_rank = $req->input('job_rank');
        $job_company = $req->input('job_company');
        $job_des = $req->input('job_des');
        $company_des = $req->input('company_des');
        $jobcategory_id = $req->input('jobcategory_id');



        if ($jobcategory_id == 'Art') {
            $jobcategory_id = $req->input('2','2');
        }
        if ($jobcategory_id == 'Computing') {
            $jobcategory_id = $req->input('1','1');
        }
        if ($jobcategory_id == 'Sales') {
            $jobcategory_id = $req->input('3','3');
        }
        elseif ($jobcategory_id == 'Real Estate') {

            $jobcategory_id = $req->input('4','4');

        }

        $data = array("job_name"=>$job_name,"job_rank"=>$job_rank,"job_company"=>$job_company,"job_des"=>$job_des,"company_des"=>$company_des,"jobcategory_id"=>$jobcategory_id);
        DB::table('joblists')->insert($data);
        return view('search');
    }
}
