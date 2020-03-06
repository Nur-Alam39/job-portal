@extends('layout.app')
@section('content')
<?php 
  use App\Category;
  use App\Job;
  use App\Employeer;
  use App\User;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Search | Opportunity</title>

        <style type="text/css">
          body
          {
            background-color: white; 
          }
          .card:hover {
            border: solid 1px #cccccc; 
          }
          .dropdown:hover>.dropdown-menu {
            display: block;
          }

          .dropdown>.dropdown-toggle:active {
            pointer-events: none;
          }
          #inputEmail4, #inputPassword4
          {
            border:solid 1px #cccccc;
           
          }
          #about a
          {
            text-decoration: none;
          }
          a:hover
          {
            color: blue;
          }
          #categories li > a
          {
            font-size: 14px;
          }
        </style>
        <!--https://www.gstatic.com/flights/app/illustration-flights-desktop.svg-->
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

        <div class="row" style="margin-top: 4%;">
          <div class="container-fluid" style="padding: 4%; width: 100%; background-image: url(''); background-size: cover; background-repeat: no-repeat; ">
            <div class="card mx-auto" style="border:none; background-color:transparent; width: 75%">
            <form action="/jobs/?=">
              <div class="card-body">
                <div class="form-row">
                  <div class="text-center">
                    <h2 class="font-weight-bold" style="color: ">Find your opportunity in Bangladesh</h2>
                  </div>
                </div>
                 <div class="form-row p-4 shadow" style="border-radius: 8px;">
                  <div class="form-group col-md-9">
                    <label><b>Search Jobs</b></label>
                    <input type="text" class="form-control" style="border: solid 1px rgb(240, 240, 240)" name='search' placeholder="Search by Job title, keyword, location or company">
                  </div>
                  <div class="form-group col-md-3">
                     <label>&nbsp;</label>
                    <button type="submit" class="btn btn-primary mb-2 form-control" style="border-radius:;"><b>Find Jobs</b></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
           <!--  <div class="container-fluid pt-3" id="about" style="text-align: center">
              <p style="font-family: ; font-weight: bold">Opportunity helps people to get jobs and hire employee</p>
            </div> -->
         
          <!-- <div class="container-fluid p-3" id="about" style="text-align: center">
            <p style="font-family: ; font-weight: bold">Opportunity helps people to get jobs and hire employee</p>
          </div> -->
          <div class="container-fluid" style="width:100%; ">
            <div class="row m-0 p-5 d-flex justify-content-center">
                  <div class="col-lg-3 p-2 m-3 justify-content-between text-center" style="border-radius: 10px; border: solid 1px #e6e6e6">
                    <a href="/jobs"> 
                      <h2 class="font-weight-bold" style="color: #000000;">{{ (Job::all()->count()) }}</h2>
                      <h5 style="color:blue; font-size: 1.2rem"><b>Live Jobs</b></h5>
                    </a>
                  </div>
                  <div class="col-lg-3 p-2 m-3 justify-content-between text-center" style="border-radius: 10px; border: solid 1px #e6e6e6">
                    <a href="/jobs"> 
                      <h2 class="font-weight-bold" style="color: #000000;">{{ (User::all()->count()) }}</h2>
                      <h5 style="color:blue; font-size: 1.2rem"><b>Live Resume</b></h5>
                    </a>
                  </div>
                  <div class="col-lg-3 p-2 m-3 justify-content-between text-center" style="border-radius: 10px; border: solid 1px #e6e6e6">
                    <a href="/jobs"> 
                      <h2 class="font-weight-bold" style="color: #000000;">{{ (Employeer::all()->count()) }}</h2>
                      <h5 style="color:blue; font-size: 1.2rem"><b>Emploeers</b></h5>
                    </a>
                  </div>
            </div>
          </div>
           </div>
          <div class="container-fluid p-4" style="width:100%; ">
            <div class="row m-2 p-4">
              <div class="col-lg-6">
                <h5 class="text-center"><b>Latest Jobs</b></h5>
                <ul class="list-group list-group-flush">
                 @foreach(Job::orderBy('updated_at', 'desc')->take(4)->get() as $job)
                    <a href='/jobs/show/{{$job->job_id}}' class="list-group-item d-flex justify-content-between align-items-center pb-0">
                      <h6 class="font-weight-bold">
                          <small><label class="text-muted far fa-clock"> {{to_time_ago(strtotime($job->updated_at))}}</label></small><br>
                          {{$job->title}}<br>
                          @foreach(Employeer::where('id', '=', $job->employeer_id)->get() as $company)
                            <label class="text-muted">{{ $company->name }}</label>
                          @endforeach
                        </h6> 
                        <span><small><i class="fas fa-chevron-right"></i></small></span>
                    </a>
                  @endforeach
                </ul>
                <div class="row mx-auto p-4">
                   <small><a class="text-center" href="/jobs">View all</a></small>
                </div>
              </div>
              <div class="col-lg-6">
                <h5 class="text-center"><b>Browse Divisional Jobs</b></h5>
                  <div class="row m-2 pl-5">
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <a href="/jobs?location=Dhaka">
                            <h6>Dhaka</h6> 
                           <label class="badge badge-primary badge-pill p-2">Live Jobs: 2</label>
                          </a>
                        </div>
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <a href="/jobs?location=Khulna">
                            <h6>Khulna</h6> 
                          <label class="badge badge-primary badge-pill p-2">Live Jobs: 2</label>
                          </a>
                        </div>
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <a href="/jobs?location=Chattagram">
                            <h6>Chattagram</h6> 
                            <label class="badge badge-primary badge-pill p-2">Live Jobs: 2</label>
                          </a>
                        </div>
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <a href="/jobs?location=Sylhet">
                            <h6>Sylhet</h6> 
                            <label class="badge badge-primary badge-pill p-2">Live Jobs:2</label>
                          </a>
                        </div>
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <a href="/jobs?location=Barisal">
                            <h6>Barisal</h6> 
                            <label class="badge badge-primary badge-pill p-2">Live Jobs: 2</label>
                          </a>
                        </div>
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <a href="/jobs?location=Rajshahi">
                            <h6>Rajshahi</h6> 
                          <label class="badge badge-primary badge-pill p-2">Live Jobs:2</label>
                          </a>
                        </div>
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <a href="/jobs?location=Mymensingh">
                            <h6>Mymensingh</h6> 
                            <label class="badge badge-primary badge-pill p-2">Live Jobs:2</label>
                          </a>
                        </div>
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <a href="/jobs?location=Mymensingh">
                            <h6>Rangpur</h6> 
                            <label class="badge badge-primary badge-pill p-2">Live Jobs:2</label>
                          </a>
                        </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="container-fluid p-4" style="width:100%; ">
            <h5 class="text-center"><b>Browse Job Categories</b></h5>
            <div class="row m-2 p-4">
               @foreach(Category::all() as $category)
                  <div class="col-lg-2 card p-2 m-3 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                    <a href="/jobs?category={{$category->category_name}}">
                      <h6>{{$category->category_name}}</h6> 
                      <label class="badge badge-primary badge-pill p-2">Live Jobs: {{$category->no_jobs}}</label>
                    </a>
                  </div>
                @endforeach
            </div>
          </div>
          <div class="container-fluid p-4" style="width:100%; ">
            <h5 class="text-center"><b>Browse Top Companies</b></h5>
            <div class="row m-2 p-4 d-flex justify-content-center">
               @foreach(Employeer::all() as $employeer)
                  <div class="col-lg-2 card p-2 m-3 justify-content-between bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                    <a href="/jobs?company={{$employeer->id}}">
                      <h6 style="color:"><b>{{$employeer->name}}</b></h6> 
                      <label class="text-muted">Current openings: {{ (Job::where('employeer_id', '=', $employeer->id)->count()) }}</label>
                    </a>
                  </div>
                @endforeach
            </div>
          </div>
          
    </body>
</html>
@endsection
