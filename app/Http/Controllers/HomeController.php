<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('');
    }


    public function home(){
        $user=AUTH::user();
        $user_id=$user->id;
        
        $userJobs=DB::select('select * from jobUsers where user_id=?',[$user_id]);
        return view('welcome',compact('userJobs'));
}
//    public function register()
//    {
//        return view('home/register');
//    }
}
