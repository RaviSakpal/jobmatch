<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Profile;
use App\Photo;
use App\User;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class match extends Controller
{
    public function matchJob()
    {

        return view('matchJob');


    }

    public function matchResult(Request $request)
    {
        $num2 = 0;
        $num1 = 0;
        $skills = $request->input('skill');
        $interests = $request->input('interests');
        $experience = $request->input('experience');
        $user = AUTH::user();
        $user_id = $user->id;

        $deleted = DB::delete('delete from jobUsers where user_id= ?',
        [$user_id]
        );
        
        $jobs = DB::select('select * from jobs');
        //skills matching the jobs;
        if ($skills != NULL) {
            foreach ($jobs as $job) {
                foreach ($skills as $skill){
                        if($skill==$job->skill1||$skill==$job->skill2||$skill==$job->skill3||$skill==$job->skill4){
                            $num1++;
                        }
                }
                if($num1>=3){
                   $exist= DB::select('select * from jobUsers where user_id = ? and job_title= ? and description= ? and wage= ? and company=? and companyDes=?'  ,
                        [$user_id, $job->job_title, $job->description, $job->wage, $job->company,$job->companyDes]);
                    if(!$exist) {
                        DB::insert('insert into jobUsers (user_id, job_title, description, wage,company,companyDes) values (?, ?, ? ,?,?,? )',
                            [$user_id, $job->job_title, $job->description, $job->wage, $job->company,$job->companyDes]);
                        $num1 = 0;
                    }else{
                        $num1=0;
                        continue;
                    }
                }else{
                    $num1=0;
                    continue;
                }
            }
        } else {
            return redirect('matchJob')->withName('The skills and interests should be selected');
        }

        //interests match the job
        if($interests!=NULL){
            foreach ($jobs as $job) {
                foreach ($interests as $interest){
                    if($interest==$job->internest1||$interest==$job->internest2||$interest==$job->internest3||$interest==$job->internest4){
                        $num2++;
                    }
                }
                if($num2>=3){
                    $exist= DB::select('select * from jobUsers where user_id = ? and job_title= ? and description= ? and wage= ? and company=? and companyDes=?',
                        [$user_id, $job->job_title, $job->description, $job->wage, $job->company,$job->companyDes]);

                    if(!$exist) {
                        DB::insert('insert into jobUsers (user_id, job_title, description, wage,company,companyDes) values (?, ?, ? ,?,? ,?)',
                            [$user_id, $job->job_title, $job->description, $job->wage, $job->company,$job->companyDes]);
                        $num2 = 0;
                    }else{
                        $num2=0;
                        continue;
                    }
                }else{
                    $num2=0;
                    continue;
                }
            }
        }else{
            return redirect('matchJob')->withName('The skills and interests should be selected');
        }
    //experience match the jobs
        foreach ($jobs as $job){
                if($experience==$job->experience){
                    $exist= DB::select('select * from jobUsers where user_id = ? and job_title= ? and description= ? and wage= ? and company=? and companyDes=?',
                        [$user_id, $job->job_title, $job->description, $job->wage, $job->company,$job->companyDes]);
                    if(!$exist){
                        DB::insert('insert into jobUsers (user_id, job_title, description, wage,company,companyDes) values (?, ?, ? ,?,? ,?)',
                            [$user_id, $job->job_title, $job->description, $job->wage, $job->company,$job->companyDes]);

                    }else{
                        continue;
                    }

                }
        }
        
        return redirect('/displayMatch');


    }
    
    
    public function displayMatch(){
        
        $user=AUTH::user();
        $user_id=$user->id;

        $userJobs=DB::select('select * from jobUsers where user_id = ?',
            [$user_id]);
        
        return view('displayMatch',compact('userJobs'));
    }

}
