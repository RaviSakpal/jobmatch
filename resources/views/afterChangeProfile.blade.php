@extends('layouts.beforeContentPage')
@section('content')
<div class="container-fluid" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-md-4 col-md-push-4" id="layoutAndColor">
            <h3>My Account</h3>
            <hr>
            <p color="black">Please check your personal profile</p>
            <div class="input-group" id="layoutAndColor">
                <span class="input-group-addon" style="color:black">userId:</span>
                <input type="text"  class="form-control" name="name" value="{{$user->id}} "/>
            </div>
            <div class="input-group" id="layoutAndColor">
                <span class="input-group-addon" style="color:black">userName</span>
                <input type="text"  class="form-control" name="name" value="{{$user->name}} "/>
            </div>
            <div class="input-group" id="layoutAndColor">
                <span class="input-group-addon" style="color:black">Email</span>
                <input type="text"  class="form-control" name="email" value="{{$user->email}} "/>
            </div>
            <a href="{{URL::to('/search')}}" class="btn btn-danger form-control" style="margin-top: 10px;height: 40px"><strong>Confirm</strong></a>
            <a href="{{URL::to('/myAccount')}}" class="btn btn-primary form-control" style="margin-top: 10px;height: 40px"><strong>Change Again</strong></a>
        </div>
    </div>
</div>
@endsection