@extends('layouts.homepageStyle')

@section('content')
<div class="container">
    <div class="row">


        @if (Auth::guest())
            <br><br><br><br>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading"</div>


                <div class="panel-bodyLanding">
                    <a href="{{URL::to('/login')}}" class="btn btn-primary form-control" style="margin-top: 10px;height: 40px">
                        <p style="font-size: 20px">
                            Login
                        </p>
                    </a>
                    <a href="{{URL::to('/register')}}" class="btn btn-primary form-control" style="margin-top: 10px;height: 40px">
                        <p style="font-size: 20px">
                            Register
                        </p>
                    </a>

                </div>
            </div>
        </div>
        @elseif (Auth::user()->category_id ==2)
    <br><br><br><br><br><br><br>


    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-heading"</div>


        <div class="panel-bodyLanding">
            <a href="{{URL::to('/myAccountEmployer')}}" class="btn btn-primary form-control" style="margin-top: 10px;height: 40px">
                <p style="font-size: 20px">
                    Post a new job
                </p>
            </a>

        </div>
    </div>
</div>

        @else
            @if(!empty($userJobs))
        <div class="container" style="margin-top: 80px">
            <h2> <div style="text-align:center"> The last matching record </div></h2>

            <div class="starter-template" style="background-color: white">
                <table class="table table-striped">

                    <tr >
                <th>user_id</th>
                <th>JobName</th>
                <th>Company</th>
                <th>wage</th>
            </tr>
     @foreach($userJobs as $userJob)
                                <th>{{$userJob->user_id}}</th>
                                <td><a href="{{URL::to('/details',array('userJob'=>$userJob->id))}}">{{$userJob->job_title}}</a></td>
                                <td>{{$userJob->company}}</td>
                                <td>{{$userJob->wage}}</td>
                            </tr>
         @endforeach
            </table>
                <ul class="pagination" style="margin-left: 350px">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>

                </div>
            </div>
                @elseif (Auth::user()->category_id !=2)
            <div class="container-fluid" xmlns="http://www.w3.org/1999/html" style="margin-top: 5px">
                <div class="row">
                    <div class="col-md-4 col-md-push-4" id="layoutAndColor" style="margin-top: 100px">
                            <div class="panel panel-danger">
                                <div class="panel-heading"><p class="text-center"><strong>You haven't matched the jobs before</strong> </p></div>

                                <a href="{{URL('/matchJob')}}" class="btn btn-success form-control">Go to the job matching page</a>
                            </div>
                    </div>
                </div>
            </div>
                @endif
        @endif
    </div>
</div>
@endsection
