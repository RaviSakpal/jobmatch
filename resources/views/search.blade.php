@extends('layouts.search')
@section('content')
    <div class="container">
        <div class="row">
            <br>
            <br>
            <div class="box">
                <br>
                <h3>Select Classification</h3>
                <br>
                <form  class="searchBox" action="search" method="post" style="text-align: center;">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <select name="job"  class="form-control">
                            <option selected="selected" value="Computing">Computing</option>
                            <option  value="Art">Art</option>
                            <option  value="Sales">Sales</option>
                            <option  value="Real Estate">Real Estate</option>
                        </select>
                        <br>
                        <button type="submit" class="btn-btn-danger" >Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
