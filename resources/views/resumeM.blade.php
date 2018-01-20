@extends('layouts.beforeContentPage')
@section('content')
    @if(!empty(session('deleteS')))
        <div class=" alert alert-success col-md-8 col-md-push-1">
            <a href="#" class="close" data-dismiss="alert">
                &times;
            </a>
            <strong> {{session('deleteS')}}</strong>
        </div>
    @endif
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html" style="margin-top: 80px">
        <div class="row">
                @if($resumeMs)
                    <div class="container" style="margin-top: 20px">
                        <div class="starter-template" style="background-color: white">
                            <table class="table table-striped">
                                <tr >
                                    <th>Job Title</th>
                                    <th>Company</th>
                                    <th>Job Description</th>
                                </tr>
                                @foreach($resumeMs as $resumeMs)
                                    <tr >
                                        <td style="width: 200px">
                                            <p><strong>{{$resumeMs->job_title}}</strong></p>
                                            <a href="{{URL::to('/delete',array('$id'=>$resumeMs->id))}}" class="btn btn-primary">Cancel This Application</a>
                                        </td>
                                        <td>{{$resumeMs->company}}</td>
                                        <td>{{$resumeMs->description}}</td>
                                    </tr>
                                @endforeach
                            </table>
                            @endif
                            <a href="{{URL('/myAccount')}}" class="btn btn-success form-control">return back</a>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection