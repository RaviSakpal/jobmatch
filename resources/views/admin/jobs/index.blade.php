@extends('layouts.admin')



@section('content')

    {{--@if(Session::has('deleted_job'))--}}


    {{--<p class="bg-danger">{{session('deleted_job')}}</p>--}}


    {{--@endif--}}


    <h1>Jobs</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Employer</th>
            <th>Job-Title</th>
            <th>Skill-1</th>
            <th>Skill-2</th>
            <th>Skill-3</th>
            <th>Interests</th>
            <th>Description</th>
            <th>Wage</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($jobs)

            @foreach($jobs as $job)

                <tr>
                    <td>{{$job->id}}</td>
                    <td><img height="50" src="{{$job->photo ? $job->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                    <td><a href="{{route('admin.jobs.edit', $job->id)}}">{{$job->user->name}}</a></td>
                    <td>{{$job->job_title}}</td>
                    <td>{{$job->skill1}}</td>
                    <td>{{$job->skill2}}</td>
                    <td>{{$job->skill3}}</td>
                    <td>{{$job->interests}}</td>
                    <td>{{$job->description}}</td>
                    <td>{{$job->wage}}</td>
                    <td><a href="{{route('home.job', $job->id)}}">View Job</a></td>
                    <td>{{$job->created_at->diffForHumans()}}</td>
                    <td>{{$job->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">

            {{$jobs->render()}}

        </div>
    </div>



@stop