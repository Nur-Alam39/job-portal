
<!DOCTYPE html>
@extends('layout.app')
@section('content')
<?php 
  use App\Category;
  use App\Employeer;
  use App\Application;
?>
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
          #list{
              list-style-position: outside;
            }
          .list-group a:hover
          {
            color: #0052cc;
          }
          #job_summary li
          {
            list-style: none;
            border:none;
          }
          <?php
             function make_list( $str ) {
              $str = explode("\r\n", $str);  // remove the last \n or whitespace character
              $str = array_filter($str, 'trim'); // remove any extra \r characters left behind
              echo '<ul>';
                foreach ($str as $line) {
                    echo "<li style = 'list-style-position: outside;'>$line</li>";
                }
              echo '</ul>';
            }
          ?>
        </style>
    </head>
    <body>

        <div class="container-fluid" style="margin-top: 8%">
          <div class="row" style="padding: 4%">
            <div class="col-lg-7">
              <h4><b>{{$job->title}}</b></h4>
              @foreach(Employeer::where('id', '=', $job->employeer_id)->get() as $company)
                  <h5 class="card-subtitle mb-2 text-muted">{{ $company->name }}</h5>
              @endforeach
              <h5 class="mt-5">Vacancy</h5>
              <p>{{$job->vacancy}}</p>
              <h5>Job Responsibilities</h5>
              <div class="mb-3">
                {{ make_list($job->responsibilities) }}
              </div>
              <h5>Employment Status</h5>
              <p>{{$job->employment_type}}</p>
              <h5>Educational Requirements</h5>
              <div class="mb-3">
                {{ make_list($job->education) }}
              </div>
              
              <h5>Experience Requirements</h5>
              <div class="mb-3">
                {{ make_list($job->requirements) }}
              </div>
              <h5>Additional Requirements</h5>
              <div class="mb-3">
                {{ make_list($job->additional_requirements) }}
              </div>
              <h5>Job Location</h5>
              <div style="list-style: none;" class="mb-3">
                {{ make_list($job->location) }}
              </div>
              <h5>Salary</h5>
              <div style="list-style: none;" class="mb-3">
                {{ make_list($job->salary) }}
              </div>
              <h5>Compensation & Other Benefits</h5>
              <div class="mb-3">
                {{ make_list($job->benifits) }}
              </div>
              <h5>Apply Instruction</h5>
              <div style="list-style:;" class=" mb-3">
                {{ make_list($job->apply_instruction) }}
              </div>
              <hr>
              <h5>Company Information</h5>
              <h6>{{ $company->name }}</h6>
              <label>Website: <a style="text-decoration: underline;color: blue" href='{{ $company->website }}'>{{ $company->website }}</a></label><br>
              <label>Email: {{ $company->email }}</label><br>
              <label><b>Address:</b> {{ $company->address }}</label>
            <div class="mt-4">
              <a href='/jobs' style='color:; text-decoration: ; padding-top: 2%'>
                <small><i class="fas fa-chevron-left"></i>  &nbsp;</small>Back
              </a>
            </div>
            </div>
             <div class="col-lg-4">
              <div class="card mb-3" style="border:none">
                <p><b>Application Deadline:</b> {{date('d-F-Y', strtotime($job->deadline)+ 6*3600) }}</p>
                @php
                  $applied = 0
                @endphp
                @if(Auth::guard('web')->check())
                  @foreach(Application::where('user_id', '=', Auth::user()->id)->where('job_id', '=', $job->job_id)->get() as $application)
                    @if ($application->count() > 0)
                      <div class="card">
                        <div class='card-header'><b>Applied Status</b></div>
                        <div class='card-body'>
                          <b>You have applied this job at</b> {{date('d-F-Y h:m A', strtotime($application->created_at)+ 6*3600) }}
                        </div>
                      </div>
                      @php
                        $applied = 1
                      @endphp
                    @endif
                  @endforeach
                @endif
                @if ($applied == 0)
                  <a href="/apply/{{$job->job_id}}">
                      <button type="button" class="btn btn-primary btn btn-block mb-2"><b>Apply this job</b></button>
                  </a>
                  <button type="button" class="btn btn-light btn btn-block"><b>Save for later</b></button>
                @endif
              </div>
              <div class="card mb-3">
                <div class="card-header">
                  <b>Job Summary</b>
                </div>
                <ul class="list-group list-group-flush font-weight-normal" id="job_summary">
                  <li class="list-group-item"><b>Published at:</b> {{date('d-F-Y', strtotime($job->updated_at)+ 6*3600) }}</li>
                  <li class="list-group-item"><b>Vacancy:</b> {{$job->vacancy}}</li>
                  <li class="list-group-item"><b>Employment Status:</b> {{$job->employment_type}}</li>
                  <li class="list-group-item"><b>Gender:</b> {{$job->gender}}</li>
                  <li class="list-group-item"><b>Age:</b> {{$job->age}}</li>
                  <li class="list-group-item"><b>Salary:</b> {{$job->salary}}</li>
                </ul>
              </div>
              <ul class="list-group">
                  <li class="list-group-item d-flex bg-light justify-content-between align-items-center">
                    <b>You can</b>
                  </li>
                  <a href='/' class="list-group-item  align-items-center">
                      <i class="far fa-share-square"></i> Share this Job
                      <!-- <span class="badge badge-light badge-pill p-2">14</span> -->
                  </a>
                  <a href='/'  class="list-group-item align-items-center">
                    <i class="far fa-star"></i> Rate this Job/Company
                   
                  </a>
                  <a href='/'  class="list-group-item align-items-center">
                    <i class="far fa-question-circle"></i> Report this Job/Company
                  </a>
                </ul>
            </div>
          </div>
        </div>

    </body>
</html>
@endsection