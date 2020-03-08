<!DOCTYPE html>
<?php 
  use App\Category;
  use App\Employeer;
   use App\Job;
?>
@extends('layout.app')
@section('content')
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Opportunity</title>

        <style type="text/css">
          .list-group
          {
            border:none;
          }
          i
          {
            color:#d9d9d9;
          }
          #job_post_link a:hover
          {
            text-decoration: underline;
          }
         .list-group a:hover
          {
            background-color: rgb(250, 250, 250);
          }
          #job_post > .card-title:hover
          {
            text-decoration: underline;
          }
          #job_post
          {
            color: black;
          }
        </style>
         <?php
          function get_snippet( $str, $wordCount = 10 ) {
            return implode( 
              '', 
              array_slice( 
                preg_split(
                  '/([\s,\.;\?\!]+)/', 
                  $str, 
                  $wordCount*2+1, 
                  PREG_SPLIT_DELIM_CAPTURE
                ),
                0,
                $wordCount*2-1
              )
            );
          }

          function to_time_ago( $time ) { 
      
            // Calculate difference between current 
            // time and given timestamp in seconds 
            $diff = time() - $time; 
              
            if( $diff < 1 ) {  
                return 'less than 1 second ago';  
            } 
              
            $time_rules = array (  
                        12 * 30 * 24 * 60 * 60 => 'year', 
                        30 * 24 * 60 * 60       => 'month', 
                        24 * 60 * 60           => 'day', 
                        60 * 60                   => 'hour', 
                        60                       => 'minute', 
                        1                       => 'second'
            ); 
          
            foreach( $time_rules as $secs => $str ) { 
                  
                $div = $diff / $secs; 
          
                if( $div >= 1 ) { 
                      
                    $t = round( $div ); 
                      
                    return $t . ' ' . $str .  
                        ( $t > 1 ? 's' : '' ) . ' ago'; 
                } 
            } 
        } 
        ?>
    </head>
    <body>
        <div class="form-row pl-4 pr-4" style="margin-top: 8%; width:75%">
           <div class="form-group col-md-12">
            <form class="form-group" style="margin-top: 1%;">
                <div class="form-row" style="background-color:white">
                  <div class="form-group col-md-8">
                    <label><b>Search Jobs</b></label>
                    <input type="text" class="form-control" style="border-radius:0px;" name='search' placeholder="Search by Job title, keyword, location or company">
                  </div>
                  <div class="form-group col-md-4">
                     <label>&nbsp;</label>
                    <button type="submit" class="btn btn-primary mb-2 form-control" style="border-radius:0px;"><b>Find Jobs</b></button>
                  </div>
                </div>
            </form>
          </div>
        </div>
        <div class='row pl-4'>
          <div class='col-lg-1'>
              <label>Filter By:</label> 
          </div>
          <div class='col-lg-1'>
            <div class="dropdown">
              <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach(Category::all() as $category)
                  <a class="dropdown-item" href="/jobs?category={{$category->category_name}}"><option value="{{$category->category_name}}">{{$category->category_name}} ({{$category->no_jobs}})</option></a>
                @endforeach
             </div>
            </div>
          </div>
          <div class='col-lg-1'>
            <div class="dropdown">
              <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Deadline
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Today</a>
                <a class="dropdown-item" href="#">Tommorow</a>
                <a class="dropdown-item" href="#">Next 5 days</a>
                <a class="dropdown-item" href="#">Next week</a>
             </div>
            </div>
          </div>
          <div class='col-lg-1'>
            <div class="dropdown">
              <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Job Type
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Full-time</a>
                <a class="dropdown-item" href="#">Part-time</a>
                <a class="dropdown-item" href="#">Internship</a>
                <a class="dropdown-item" href="#">Contractual</a>
             </div>
            </div>
          </div>
          <div class='col-lg-1'>
            <div class="dropdown">
              <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Location
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href='/jobs?location=Dhaka'>Dhaka</a>
                <a class="dropdown-item" href='/jobs?location=Chattagram'>Chattagram</a>
                <a class="dropdown-item" href='/jobs?location=Khulna'>Khulna</a>
                <a class="dropdown-item" href='/jobs?location=Sylhet'>Sylhet</a>
                <a class="dropdown-item" href='/jobs?location=Barisal'>Barisal</a>
                <a class="dropdown-item" href='/jobs?location=Gazipur'>Gazipur</a>
             </div>
            </div>
          </div>
          <div class='col-lg-1'>
            <div class="dropdown">
              <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Company
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($jobs as $job)
                  @foreach(Employeer::where('id', '=', $job->employeer_id)->get() as $company)
                    <a class="dropdown-item" href="/jobs?company={{$company->id}}">
                      <option value="{{$company->name}}">{{$company->name}}</option>
                    </a>
                  @endforeach
                @endforeach
             </div>
            </div>
          </div>
          <div class='col-lg-1'>
            <div class="dropdown">
              <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Experience Level
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Entry Level</a>
                <a class="dropdown-item" href="#">Mid Level</a>
                <a class="dropdown-item" href="#">Senior</a>
             </div>
            </div>
          </div>
        </div>
        <div class="container-fluid" style="margin-top: 1%">
          <div class="row p-4 pt-2">
            @if ($category_type ?? '' != NULL)
                <b>Category: &nbsp; </b> {{$category_type ?? ''}} ({{$jobs->count()}})
            @elseif ($job_location ?? '' != NULL)
                <b>Job Location:  &nbsp; </b> {{$job_location ?? ''}} ({{$jobs->count()}})
            @elseif ($company ?? '' != NULL)
                <b>Company:  &nbsp; </b> {{$company->name ?? ''}} ({{$jobs->count()}})
            @endif
          </div>
          <div class="row">
            <div class="col-lg-3 pl-4">
                <ul class="list-group">
                  <li class="list-group-item d-flex bg-light justify-content-between align-items-center">
                    <b>Skills</b>
                  </li>
                  <a href='/' class="list-group-item d-flex justify-content-between align-items-center">
                      Fullstack
                      <span class="badge badge-light badge-pill p-2">14</span>
                  </a>
                  
                  <a href='/'  class="list-group-item d-flex justify-content-between align-items-center">
                    Forntend
                    <span class="badge badge-light badge-pill p-2">2</span>
                  </a>
                  <a href='/'  class="list-group-item d-flex justify-content-between align-items-center">
                    Backend
                    <span class="badge badge-light badge-pill  p-2">1</span>
                  </a>
                  <a href='/'  class="list-group-item d-flex justify-content-between align-items-center">
                   Java
                    <span class="badge badge-light badge-pill p-2">14</span>
                  </a>
                  <a href='/'  class="list-group-item d-flex justify-content-between align-items-center">
                    ASP.NET
                    <span class="badge badge-light badge-pill p-2">2</span>
                  </a>
                  <a href='/'  class="list-group-item d-flex justify-content-between align-items-center">
                    PHP/Laravel
                    <span class="badge badge-light badge-pill p-2">1</span>
                 </a>
                </ul>
            </div>
            <div class="col-lg-6">
              @if ($jobs->count() == 0)
                <h6>No jobs found</h6>
              @else
              @foreach($jobs as $job)
                <a href="/jobs/show/{{$job->job_id}}">
                  <div class="card mb-3" id="job_post" style="width: 100%; list-style: none">
                    <div class="card-body">
                      <h5 class="card-title" id="job_title" style="color: #0052cc"><b>{{$job->title}}</b></h5>
                      @foreach(Employeer::where('id', '=', $job->employeer_id)->get() as $company)
                            <h6 class="card-subtitle mb-2 text-muted">{{ $company->name }}</h6>
                      @endforeach
                      <li class="card-text">
                       <!--  <i class="fas fa-map-marker-alt"></i>&nbsp; -->{{$job->location}}
                      </li>
                      <li class="card-text">
                        <!-- <i class="fas fa-graduation-cap"></i>&nbsp; --> &#9702; {{get_snippet($job->education)}}...
                      </li>
                      <li class="card-text">
                        <!-- <i class="fas fa-briefcase"></i>&nbsp; --> &#9702; {{get_snippet($job->requirements)}}...
                      </li>
                      <li class="card-text">
                          <b>Published on:</b> {{date('d-M-Y', strtotime($job->updated_at)+ 6*3600) }} &nbsp;
                          <b>Deadline:</b> {{date('d-M-Y', strtotime($job->deadline))}}
                      </li>
                      <small id="job_post_link">
                        <label><!-- <i style="color:#999999" class="far fa-clock"></i> --> {{to_time_ago(strtotime($job->updated_at))}} <i style="color:#b3b3b3">&#8226; </i></label>
                        <a href="/jobs/edit/{{$job->job_id}}" style="text-decoration: ; color: #0052cc">Save Job</a>
                        <!-- <a href="/jobs/edit/{{$job->job_id}}" style="text-decoration: ; color: #0052cc">Edit</a> <i style="color:#b3b3b3">&#8226; </i>
                        <a href="/jobs/delete/{{$job->job_id}}" style="text-decoration: ; color: #0052cc">Remove</a> -->
                      </small>
                    </div>
                </div>
              </a>
              @endforeach
              @endif
            </div>
          </div>
        </div>

    </body>
</html>
@endsection