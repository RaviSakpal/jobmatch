@extends('layouts.beforeContentPage')
@section('content')

    <div class="container" style="margin-top: 60px" xmlns="http://www.w3.org/1999/html">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                   <strong><p style="font-size: 20px">{{$userJob->job_title}}</p></strong>
                    <p>{{$userJob->company}}</p>
                    <a href="{{URL::to('/applyJob',array('userJob'=>$userJob->id))}}" class="btn btn-success">Easy Apply</a>
                </div>
            </div>

            <div class="panel panel-default" style="margin-top: 20px">
                <div class="panel-body">
                    <p style="font-size: 15px"><strong>Job Description</strong></p>
                    <p>
                        {{$userJob->description}}
                    </p>
                </div>
            </div>
            <div class="panel panel-default" style="margin-top: 20px">
                <div class="panel-body">
                    <p style="font-size: 15px"><strong>About Our Company</strong></p>
                    <p>
                        {{$userJob->companyDes}}
                    </p>
                </div>
            </div>


        </div>
    </div>

@endsection