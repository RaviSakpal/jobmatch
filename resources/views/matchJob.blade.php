@extends('layouts.myAccountPage')
@section('content')
    @if(Session::get('name'))
        <div class=" alert alert-danger col-md-8 col-md-push-1">
            <a href="#" class="close" data-dismiss="alert">
                &times;
            </a>
            <strong>   {{Session::get('name')}}</strong>
        </div>
    @endif
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html" style="margin-top: 5px">
        <div class="row">
            <div class="col-sm-9 col-sm-push-1" id="layoutAndColor">
                <form action="matchResult" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                        <h5>Select your preferences to bring the most relevant job to you! </h5>

                        <div class="wrapper">
                            <button class="btn btn-primary btn-lg" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="margin-left:100px">
                                Select Skills >&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            </button>
                        </div>

                        <div class="collapse" id="collapseExample">
                            <div class="well">
                                <div class="checkbox" style="color: #0c0c0c">
                                    <label><strong>Skill:</strong></label>
                                    <label>
                                        <input id="select" type="checkbox" name="skill[]" value="programming" >Programming
                                    </label>
                                    <label>
                                        <input id="select1" type="checkbox" name="skill[]" value="communication">Communication
                                    </label>
                                    <label>
                                        <input id="select2" type="checkbox" name="skill[]" value="management">Management
                                    </label>
                                    <label>
                                        <input id="select3" type="checkbox" name="skill[]" value="coordination">Coordination
                                    </label>
                                    <label>
                                        <input id="select4" type="checkbox" name="skill[]" value="design">Design
                                    </label>
                                    <label>
                                        <input id="select5" type="checkbox" name="skill[]" value="critical thinking">Critical Thinking
                                    </label>
                                    <label>
                                        <input id="select6"  type="checkbox" name="skill[]" value="innovation">Innovation
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper">
                            <button class="btn btn-primary btn-lg" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"style="margin-left:100px">
                                Select Interests >&nbsp; &nbsp;&nbsp;
                            </button>
                        </div>
                        <div class="collapse" id="collapseExample1"  style="color: #0c0c0c">
                            <div class="well">
                                <div class="checkbox">
                                    <label><strong>Interest:</strong></label>
                                    <label>
                                        <input type="checkbox" name="interests[]" value="meditation" >Meditation
                                    </label>
                                    <label>
                                        <input type="checkbox" name="interests[]" value="programming contest" >Programming Contest
                                    </label>
                                    <label>
                                        <input type="checkbox" name="interests[]" value="reading blogs" >Reading
                                    </label>
                                    <label>
                                        <input type="checkbox" name="interests[]" value="fitness">Fitness
                                    </label>
                                    <label>
                                        <input type="checkbox" name="interests[]" value="management">Management
                                    </label>
                                    <label>
                                        <input type="checkbox" name="interests[]" value="exercise">Exercise
                                    </label>
                                    <label>
                                        <input type="checkbox" name="interests[]" value="cooking">Cooking
                                    </label>
                                    <label>
                                        <input type="checkbox" name="interests[]" value="independent learning">Independent Learning
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper">
                            <button class="btn btn-primary btn-lg" role="button" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3" style="margin-left:100px">
                                Select Experience >
                            </button>
                        </div>
                        <div class="collapse" id="collapseExample3"  style="color: #0c0c0c">
                            <div class="well">
                                <select class="form-control" name="experience">
                                    <option  value="zero">--0 year--</option>
                                    <option  value="1year">--1 year--</option>
                                    <option  value="2year">--2 years--</option>
                                    <option  value="3year">--3 years--</option>
                                    <option  value="more">--more than 3 years--</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    <br>
    <div class="wrapper">
    <button  type="submit" class="btn btn-success" style="height: 40px">
        <p style="font-size: 20px">
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Match &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        </p>
    </button>
    </div>
        </form>
        <br>

    </div>
    </div>
    </div>
@endsection