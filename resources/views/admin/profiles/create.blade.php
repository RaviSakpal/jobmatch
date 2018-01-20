@extends('layouts.admin')




@section('content')


    <h1>Create Profile</h1>
    <div class="row">

        {!! Form::open(['method'=>'POST', 'action'=> 'AdminProfilesController@store','files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
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
            {!! Form::submit('Create Profile', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

    <div class="row">

        @include('includes.form_error')

    </div>



@stop