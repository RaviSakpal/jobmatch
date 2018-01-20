<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class displayPage extends Controller
{

        public function displayDes(Request $request){
                
                $job=$request->input('job');
                return view('displayDes');

        }

        public function displayApply(){


                return view('displayApply');
        }
}
