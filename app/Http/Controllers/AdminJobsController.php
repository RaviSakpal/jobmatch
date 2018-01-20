<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobsRequest;
use App\Job;
use App\Photo;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminJobsController extends Controller
{
    /**
     * Display a listing of the jobs.
     * paginate function displays the number
     * of records in parameter
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs = Job::paginate(4);

        return view('admin.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.jobs.create', compact('jobs'));
    }

    /**
     * Stores a newly created record for job in storage.
     * the image is bound to the respective user
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobsRequest $request)
    {
        $input = $request->all();

        $user = Auth::user();

        If ($file = $request->file('photo_id')) {


            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;


        }

        $user->jobs()->create($input);

//

        return redirect('/admin/jobs');

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
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $job = Job::findOrFail($id);

        return view('admin.jobs.edit', compact('job'));
    }

    /**
     * Updates the specified job entry details in a form
     * resource in storage.
     *
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


        Auth::user()->jobs()->whereId($id)->first()->update($input);


        return redirect('/admin/jobs');
    }

    /**
     * Deleting the entry of a record for job
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);

        unlink(public_path() . $job->photo->file);

        $job->delete();

        Session::flash('deleted_job', 'The job has been deleted');

        return redirect('/admin/jobs');
    }

    /**
     * Displaying individual job with route
     * using id as a parameter
     * @param $id
     * @return mixed
     */
    public function job($id)
    {


        $job = Job::findOrFail($id);


        return view('job', compact('job'));

    }


}