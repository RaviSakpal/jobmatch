@extends('layouts.admin')




@section('content')


    <h1>Edit Profile</h1>

    <div class="col-sm-3">


        <img src="{{$profile->photo ? $profile->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">


    </div>

    <div class="col-sm-9">

     {!! Form::model($profile,['method'=>'PATCH', 'action'=> ['AdminProfilesController@update', $profile->id], 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('photo_id', 'Image:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('skill1', 'Skill-1:') !!}
            {!! Form::text('skill1', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('skill2', 'Skill-2:') !!}
            {!! Form::text('skill2', null, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::label('skill3', 'Skill-3:') !!}
            {!! Form::text('skill3',  null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('experience', 'Experience:') !!}
            {!! Form::text('experience', null, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::label('interests', 'Interests:') !!}
            {!! Form::text('interests', null, ['class'=>'form-control'])!!}
        </div>



        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::text('description',  null, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('Update Job', ['class'=>'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminProfilesController@destroy',$profile->id]])!!}


        <div class="form-group">
            {!! Form::submit('Delete Profile', ['class' => 'btn btn-danger col-sm-6']) !!}
        </div>


        {!! Form::close()  !!}

    </div>

    <div class="row">


        @include('includes.form_error')


    </div>







@stop