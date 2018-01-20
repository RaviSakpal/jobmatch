@extends('layouts.beforeContentPage')
@section('content')
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-4 col-md-push-4" id="layoutAndColor">
                <h3>My Account - Employer</h3>
                <hr>
                        <div class="panel panel-default">
                        <div class="panel-heading">Create a new job</div>
                        <div class="panel-body">
                <form action="createJob" method="post">
                    <table>
                        <tr>
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>                            <td>Job Title : </td>
                            <td><input type="text" name="job_name" required></td>
                        </tr>
                        <tr>
                            <td>Job Rank: </td>
                            <td><input type="number" name="job_rank"></td>
                        </tr>
                        <tr>
                            <td>Company: </td>
                            <td><input type="text" name="job_company" required></td>
                        </tr>
                        <tr>
                            <td>Job Description: </td>
                            <td><input type="text" name="job_des" required></td>
                        </tr>
                        <tr>
                            <td>Company Description: </td>
                            <td><input type="text" name="company_des" required></td>
                        </tr>
                        <tr>
                            <td>Job Category: </td>
                            <td><input type="radio" name="jobcategory_id" value="Art" required> Art
                                <input type="radio" name="jobcategory_id" value="Computing" /> Computing
                                <input type="radio" name="jobcategory_id" value="Sales" /> Sales
                                <input type="radio" name="jobcategory_id" value="Real Estate" /> Real Estate</td>

                        </tr>
                        <tr>
                        </tr>
                    </table>
                    <input class="btn btn-success form-control" type="submit" name="submit" value="Create">

                </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
                <br>
                <br>

            </div>
        </div>
    </div>
@endsection