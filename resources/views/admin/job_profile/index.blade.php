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
                <th>Skill-1</th>
                <th>Skill-2</th>
                <th>Skill-3</th>
                <th>Description</th>

            </tr>
            </thead>
            <tbody>

            @if($jobs)

                @foreach($jobs as $job)

                    <tr>
                        <td>{{ $job->id }}</td>
                        <td>{{ $job->skill1 }}</td>
                        <td>{{ $job->skill2 }}</td>
                        <td>{{ $job->skill3 }}</td>
                        <td>{{ $job->description }}</td>
                    </tr>

                @endforeach

            @endif

            </tbody>
        </table>

        {{--<div class="row">--}}
            {{--<div class="col-sm-6 col-sm-offset-5">--}}

                {{--{{$jobs->render()}}--}}

            {{--</div>--}}
        {{--</div>--}}



@stop