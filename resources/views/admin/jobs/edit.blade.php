@extends('layouts.admin')




@section('content')


    <h1>Edit Job</h1>

    <div class="col-sm-3">


        <img src="{{$job->photo ? $job->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">


    </div>

    <div class="col-sm-9">

        {!! Form::model($job,['method'=>'PATCH', 'action'=> ['AdminJobsController@update', $job->id], 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('photo_id', 'Image:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('job_title', 'Job-Title:') !!}
                {!! Form::text('job_title',  null, ['class'=>'form-control'])!!}
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
                {!! Form::label('interests', 'Interests:') !!}
                {!! Form::text('interests', null, ['class'=>'form-control'])!!}
            </div>



            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::text('description',  null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('wage', 'Wage:') !!}
                {!! Form::text('wage', null, ['class'=>'form-control'])!!}
            </div>



            <div class="form-group">
                {!! Form::submit('Update Job', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminJobsController@destroy',$job->id]])!!}


        <div class="form-group">
                {!! Form::submit('Delete job', ['class' => 'btn btn-danger col-sm-6']) !!}
        </div>


        {!! Form::close()  !!}

    </div>

    <div class="row">


        @include('includes.form_error')


    </div>







@stop