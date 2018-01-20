@extends('layouts.admin')



@section('content')

    {{--@if(Session::has('deleted_job'))--}}


    {{--<p class="bg-danger">{{session('deleted_job')}}</p>--}}


    {{--@endif--}}


    <h1>Profile</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Job Seeker</th>
            <th>Skill-1</th>
            <th>Skill-2</th>
            <th>Skill-3</th>
            <th>Experience</th>
            <th>Interests</th>
            <th>Description</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($profiles)

            @foreach($profiles as $profile)

                <tr>
                    <td>{{$profile->id}}</td>
                    <td><img height="50" src="{{$profile->photo ? $profile->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                    <td><a href="{{route('admin.profiles.edit', $profile->id)}}">{{$profile->user->name}}</a></td>
                    <td>{{$profile->skill1}}</td>
                    <td>{{$profile->skill2}}</td>
                    <td>{{$profile->skill3}}</td>
                    <td>{{$profile->experience}}</td>
                    <td>{{$profile->interests}}</td>
                    <td>{{$profile->description}}</td>
                    <td><a href="{{route('home.profile', $profile->id)}}">View Profile</a></td>
                    <td>{{$profile->created_at->diffForHumans()}}</td>
                    <td>{{$profile->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">

            {{$profiles->render()}}

        </div>
    </div>



@stop