@extends('layouts.displayDes')
@section('content')
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html" style="margin-top: 5px">
        <div class="row">
            <div class="col-md-4 col-md-push-4" id="layoutAndColor" style="margin-top: 100px">
                @if($info1)
                <div class="panel panel-warning">
                    <div class="panel-heading"><p class="text-center"><strong>{{$info1}}</strong> </p></div>

                        <a href="{{URL('/myAccount')}}" class="btn btn-success form-control">Return back</a>
                </div>
                    @endif


            </div>
        </div>
    </div>
@endsection