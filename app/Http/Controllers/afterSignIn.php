<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;
use App\Job;
use App\Profile;
use App\Photo;
use App\User;
use App\Jobcategory;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;


class afterSignIn extends Controller
{
    public function search(){

        return view('search');

    }



    public function myAccount()
    {

        return view('MyAccount');
    }
    public function myAccountEmployer()
    {

        return view('MyAccountEmployer');
    }

    public function contact(){

        return view('contact');
    }

    public function searchResult( Request $request){

        $jobcategory = new Jobcategory();

        $allcategories = $jobcategory->getall();

        $choice = $request->input('job');

        session(['job' => $choice]);

        foreach ($allcategories as $category) {

            if ($category->category_name == $choice) {

                $jobs = $jobcategory->getjobs($category->id);

                return view('displayPage', compact('jobs'));

            }

        }
    }
    public function EditProfile(Request $request)
    {
        $success = "successfull change your personal profile";
        $pwdR = $request->input('pwd');
        $emailR = $request->input('email');

        $userInf = AUTH::user();
        $userId = $userInf->id;
        $num = DB::update('UPDATE users SET email= ?,password= ? WHERE id= ?', array($emailR, $pwdR, $userId));

        $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required',array('regex:/\w{6,16}@\w{1,}\.\w{2,3}/i')
            ]
        );
        if ($validator->fails()) {

            return redirect('/myAccount')->withErrors($validator);
        }

        if ($num) {

            return redirect('/changeProfile');

        }
    }
    public function changeProfile(){

        $user=AUTH::user();

        return view('afterChangeProfile',compact('user'));
    }

    public function Resume(){
        $user=AUTH::user();
        $user_id=$user->id;
        $resumeCs=  DB::select('select * from jobresumeCs where user_id=?',
            [$user_id]);

        if(!$resumeCs){
            $info="You haven't applied for any job from Search page";
            return view('resumeCE',compact('info'));
        }else{

            return view('resumeC',compact('resumeCs'));
        }


    }
    public function Resume2(){

        $user=AUTH::user();
        $user_id=$user->id;
        $resumeMs=  DB::select('select * from jobresumes where user_id=?',
            [$user_id]);
        if(!$resumeMs){
            $info1="You haven't applied for any job from Job Matching page";
            return view('resumeME',compact('info1'));
        }else{

            return view('resumeM',compact('resumeMs'));
        }
    }


    public function searchA(){
        $jobcategory = new Jobcategory();

        $allcategories = $jobcategory->getall();

        $choice=session('job');

        foreach ($allcategories as $category) {

            if ($category->category_name == $choice) {

                $jobs = $jobcategory->getjobs($category->id);

                return view('displayPage', compact('jobs'));

            }

        }


    }


}
