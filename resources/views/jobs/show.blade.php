
<!DOCTYPE html>
@extends('layout.app')
@section('content')
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Opportunity</title>

        <style type="text/css">
          a.card, a.card:hover {
            color: inherit;
            text-decoration: none;
          }

          .list-group
          {
            border:none;
          }
        </style>
    </head>
    <body>

        <div class="container-fluid" style="margin-top: 8%">
          <div class="row" style="padding: 4%">
            <div class="col-lg-7">
              <h4><b>{{$job->title}}</b></h4>
              <h5 class="card-subtitle mb-2 text-muted">Company Name</h5>
              <h5>Vacancy</h5>
              <p>{{$job->vacancy}}</p>
              <h5>Job Responsibilities</h5>
              <p>{{$job->responsibilities}}</p>
              <h5>Employment Status</h5>
              <p>{{$job->employment_type}}</p>
              <h5>Educational Requirements</h5>
              <p>{{$job->education}}</p>
              <h5>Experience Requirements</h5>
              <p>{{$job->requirements}}</p>
              <h5>Additional Requirements</h5>
              <p>{{$job->additional_requirements}}</p>
              <h5>Job Location</h5>
              <p>{{$job->location}}</p>
              <h5>Salary</h5>
              <p>{{$job->salary}}</p>
              <h5>Compensation & Other Benefits</h5>
              <p>{{$job->benifits}}</p>
              <h5>Apply Instruction</h5>
              <p>{{$job->apply_instruction}}</p>
              <hr>
              <h5>Company Information</h5>
              <h6>Name</h6>
              Website
              Email
              Address
              <br>
              <a href='/jobs' style='color:blue; text-decoration: underline;'>Back</a>
            </div>
             <div class="col-lg-4 pl-4">
              <div class="card mb-3" style="border:none">
                <p><b>Application Deadline:</b> {{date('d-M-Y', strtotime($job->deadline)+ 6*3600) }}</p>
                <button type="button" class="btn btn-primary btn btn-block"><b>Apply this job</b></button>
                <button type="button" class="btn btn-light btn btn-block"><b>Save for later</b></button>
              </div>
              <div class="card mb-3">
                <div class="card-header bg-light">
                  <b>Job Summary</b>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Published at:</b> {{date('d-M-Y', strtotime($job->updated_at)+ 6*3600) }}</li>
                  <li class="list-group-item"><b>Vacancy:</b> {{$job->vacancy}}</li>
                  <li class="list-group-item"><b>Employment Status:</b> {{$job->employment_type}}</li>
                  <li class="list-group-item"><b>Gender:</b> {{$job->gender}}</li>
                  <li class="list-group-item"><b>Age:</b> {{$job->age}}</li>
                  <li class="list-group-item"><b>Salary:</b> {{$job->salary}}</li>
                </ul>
              </div>
              <div class="card">
                <div class="card-header bg-light">
                  <b>You can</b>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Share this Job</li>
                  <li class="list-group-item">Print this Job</li>
                  <li class="list-group-item">Report this Job/Company</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

    </body>
</html>
@endsection