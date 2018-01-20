<?php
use App\Http\Requests\JobsRequest;
use App\Job;
use App\Photo;
use App\Joblist;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@home');
Route::get('/about', function () {
    return view('about');
});

Route::auth();
Route::post('/createJob','Controller@createJob');
Route::get('/home', 'HomeController@index');

Route::get('/job/{id}', ['as'=>'home.job', 'uses'=>'AdminJobsController@job']);
Route::get('/profile/{id}', ['as'=>'home.profile', 'uses'=>'AdminProfilesController@profile']);

Route::resource('admin/users', 'AdminUsersController');
Route::resource('admin/jobs', 'AdminJobsController');
Route::resource('admin/profiles', 'AdminProfilesController');
//Route::get('/admin', function(){
//
//    return view('admin.index');
//});
//
//Route::resource('admin/users', 'AdminUsersController');
//Route::resource('admin/jobs', 'AdminJobsController');

Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', function(){

        return view('admin.index');
    });

//    Route::resource('admin/users', 'AdminUsersController');
//    Route::resource('admin/jobs', 'AdminJobsController');
//    Route::resource('admin/profiles', 'AdminProfilesController');

});
/*Route::get('/');*/
Route::get('/search','afterSignIn@search');
Route::get('/myAccount',function(){
    if ( Auth::user()->category_id ==3) {
        $user = AUTH::user();
        return view('MyAccount', compact('user'));
    }

});
Route::any('/myAccountEmployer',function(){
    if ( Auth::user()->category_id ==2) {

        return view('MyAccountEmployer');
    }

});
Route::get('/changeProfile','afterSignIn@changeProfile');
Route::get('/contact','afterSignIn@contact');
Route::get('/logOut','logOut@logOut');
Route::post('search','afterSignIn@searchResult');
Route::post('editProfile','afterSignIn@EditProfile');
Route::get('/matchJob','match@matchJob');
Route::get('/resume','afterSignIn@Resume');
Route::get('/resume2','afterSignIn@Resume2');
Route::get('/delete/{number}',function($number){

    $user=AUTH::user();
    $user_id=$user->id;
    $delete=DB::delete('delete from jobresumes where user_id=? and id=?',
        [$user_id,$number]);
    if(!$delete){
        return redirect('/resume2')->with('deleteF','The application can not be cancelled');

    }else{

        return redirect('/resume2')->with('deleteS','The application has been cancelled successfully');

    }

});

Route::get('/delete1/{number}',function($number){

    $user=AUTH::user();
    $user_id=$user->id;
    $delete=DB::delete('delete from jobresumeCs where user_id=? and id=?',
        [$user_id,$number]);
    if(!$delete){
        return redirect('/resume')->with('deleteF1','The application can not be cancelled');

    }else{

        return redirect('/resume')->with('deleteS1','The application has been cancelled successfully');
    }

});
Route::get('/displayJob','displayPage@displayJob');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');
Route::any('matchResult','match@matchResult');
Route::get('/displayMatch','match@displayMatch');
Route::get('/searchA','afterSignIn@searchA');
Route::get('/details/{number}',function($number){

    $userJobs=DB::select('select * from jobUsers');

    foreach ($userJobs as $userJob){
        if($userJob->id==$number){
            return view('displayMatchDes',compact('userJob'));
        }
    }
});

Route::any('test',function(){


});
Route::get('/displayApply','displayPage@displayApply');



Route::get('/displayDes/{number}',function($number) {

    $jobs=new Joblist();

    $all=$jobs->getall();

    foreach ($all as $job){

        if($job->id==$number){

            return view('displayDes',compact('job'));
        }

    }

//    return view('displayDes');
});

Route::get('/applyJob/{number}',function($number){
    $jobUsers= DB::select('select * from jobUsers');
    $user= AUTH::user();
    $user_id=$user->id;
    foreach ($jobUsers as $jobUser){
        if($number==$jobUser->id){
            $resume=DB::select('select * from jobresumes where user_id=? and job_title=? and description=? and wage=? and company=?',
                [$user_id,$jobUser->job_title,$jobUser->description,$jobUser->wage,$jobUser->company]);
            if(!$resume){
                DB::insert('insert into jobresumes(user_id,job_title,description,wage,company) values(?,?,?,?,?)',
                    [$user_id,$jobUser->job_title,$jobUser->description,$jobUser->wage,$jobUser->company]);
                return redirect('/displayMatch')->with('success','You have successfully applied for this job');
            }else{

                return redirect('/displayMatch')->with('fail','You have already applied for this job');
            }
        }

    }
});

Route::get('/applyJobC/{number}',function($number){

    $user=AUTH::user();
    $user_id=$user->id;

    $joblists=DB::select('select * from joblists');

    foreach ($joblists as $joblist){
        if($joblist->id==$number){

            $resuemC=DB::select('select * from jobresumeCs where user_id=? and job_name=? and job_company=? and job_des=? and company_des=? and jobcategory_id=?',
                [$user_id,$joblist->job_name,$joblist->job_company,$joblist->job_des,$joblist->company_des,$joblist->jobcategory_id]);
            if(!$resuemC){

                DB::insert('insert into jobresumeCs(user_id,job_name,job_company,job_des,company_des,jobcategory_id) values(?,?,?,?,?,?)',
                    [$user_id,$joblist->job_name,$joblist->job_company,$joblist->job_des,$joblist->company_des,$joblist->jobcategory_id]);
                return redirect('/searchA')->with('success1','You have successfully applied for this job');
            }else{}
            return redirect('/searchA')->with('fail1','You have already applied for this job');

        }
    }
});

Route::get('admin/job_profile','Job_ProfileController@jobProfileDetails');

