<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilesRequest;
use Illuminate\Http\Request;

use App\Job;
use App\Profile;
use App\Photo;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminProfilesController extends Controller
{
    /**
     * Display a listing of the profiles of users.
     * These profiles will be used to match respective jobs
     * and vice-versa
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profiles = Profile::paginate(4);

        return view('admin.profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new profile of a user.
     * Details of user will be  created for logged in user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.profiles.create', compact('profiles'));
    }

    /**
     * Store a newly created profile in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfilesRequest $request)
    {
        $input = $request->all();

        $user = Auth::user();

        If ($file = $request->file('photo_id')) {


            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;


        }

        $user->profiles()->create($input);

//

        return redirect('/admin/profiles');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified profile.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $profile = Profile::findOrFail($id);

        return view('admin.profiles.edit', compact('profile'));
    }

    /**
     * Update the specified profile in storage.
     * A form is used to update the requisite fields
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();


        if ($file = $request->file('photo_id')) {


            $name = time() . $file->getClientOriginalName();


            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);


            $input['photo_id'] = $photo->id;


        }


        Auth::user()->profiles()->whereId($id)->first()->update($input);


        return redirect('/admin/profiles');
    }

    /**
     * Remove the specified profile from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);

        unlink(public_path() . $profile->photo->file);

        $profile->delete();

        Session::flash('deleted_job', 'The profile has been deleted');

        return redirect('/admin/profiles');
    }

    /**
     *  To display a profile with parameter id.
     * @param $id
     * @return mixed
     */
    public function profile($id)
    {


        $profile = Profile::findOrFail($id);


        return view('profile', compact('profile'));

    }


}
