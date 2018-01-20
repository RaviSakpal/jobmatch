@extends('layouts.displayApply')
@section('content')

    <div class="container" style="margin-top: 80px">
        <div class="col-md-8 col-md-push-2">
        <div class="starter-template">

            <div class="panel panel-default" style="margin-top: 80px">
                <div class="panel-body">

                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone</label>
                            <input type="number" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Resume</label>
                            <input type="file" id="exampleInputFile">
                        </div>
                        <button type="submit" class="btn btn-info">Apply</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
    </div>

@endsection