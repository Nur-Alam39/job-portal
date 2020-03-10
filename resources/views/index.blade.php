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
          <div class="container-fluid" style="padding: 4%; width: 100%; background-color:(252, 252, 252)">
            <div class="card mx-auto" style="border:none; border-radius: 10px; width: 80%">
            <form action="/jobs/?=">
              <div class="card-body">
                <div class="form-row">
                  <div class="pb-3">
                    <h2 class="font-weight-bold">Find your opportunity in Bangladesh</h2>
                    <small>Opportunity helps people to get jobs and hire employee</small>
                  </div>
                </div>
                 <div class="form-row p-0 mt-2" style="border-radius: 8px; border: solid 0px #f2f2f2">
                  <div class="form-group col-md-9">
                    <!-- <label><b>Start searching now</b></label> -->
                    <input type="text" class="form-control" style="border: solid 1px #d9d9d9" name='search' placeholder="Search by Job title, keyword, location or company">
                  </div>
                  <div class="form-group col-md-3">
                    <!--  <label>&nbsp;</label> -->
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
          <div class="container-fluid mt-4" style="width:100%; ">
            <h4 class="text-center">
              <img src="https://www.pinclipart.com/picdir/big/198-1980971_sixdays-bremen-transparent-loading-circle-gif-clipart.png" width="20px" height="20px"/><b> pportunity Offers</b>
            </h4>
            <div class="row m-0 p-2 d-flex justify-content-center">
                  <div class="col-lg-3 p-2 m-3 bg justify-content-between text-center" style="border-radius: 10px; border: solid 1px #e6e6e6">
                    <a href="/jobs"> 
                      <h3 class="font-weight-bold" style="color: #000000;">{{ (Job::all()->count()) }}</h3>
                      <h5 style="color:; font-size: 1.2rem"><b>Live Jobs</b></h5>
                    </a>
                  </div>
                  <div class="col-lg-3 p-2 bg m-3 justify-content-between text-center" style="border-radius: 10px; border: solid 1px #e6e6e6">
                    <a href="/jobs"> 
                      <h3 class="font-weight-bold" style="color: #000000;">{{ (User::all()->count()) }}</h3>
                      <h5 style="color:; font-size: 1.2rem"><b>Live Resume</b></h5>
                    </a>
                  </div>
                  <div class="col-lg-3 p-2 bg m-3 justify-content-between text-center" style="border-radius: 10px; border: solid 1px #e6e6e6">
                    <a href="/jobs"> 
                      <h3 class="font-weight-bold" style="color: #000000;">{{ (Employeer::all()->count()) }}</h3>
                      <h5 style="color:; font-size: 1.2rem"><b>Emploeers</b></h5>
                    </a>
                  </div>
            </div>
          </div>
           </div>
          <div class="container-fluid p-4" style="width:100%; ">
            <div class="row m-2 p-4">
              <div class="col-lg-6">
                <h4 class="text-center"><b>Latest Jobs</b></h4>
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
                <h4 class="text-center"><b>Browse Divisional Jobs</b></h4>
                  <div class="row m-2 pl-5">
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <small>
                           <a href="/jobs?location=Dhaka">
                            <b>Dhaka</b><br> 
                            <label class="badge badge-primary badge-pill p-2 mt-2">Live Jobs:2</label>
                          </a>
                         </small>
                        </div>
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <small>
                           <a href="/jobs?location=Khulna">
                            <b>Khulna</b><br> 
                            <label class="badge badge-primary badge-pill p-2 mt-2">Live Jobs:2</label>
                          </a>
                         </small>
                        </div>
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <small>
                           <a href="/jobs?location=Chattagram">
                            <b>Chattagram</b><br> 
                            <label class="badge badge-primary badge-pill p-2 mt-2">Live Jobs:2</label>
                          </a>
                         </small>
                        </div>
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          
                          <small>
                           <a href="/jobs?location=Sylhet">
                            <b>Sylhet</b><br> 
                            <label class="badge badge-primary badge-pill p-2 mt-2">Live Jobs:2</label>
                          </a>
                         </small>
                        </div>
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          
                          <small>
                           <a href="/jobs?location=Barisal">
                            <b>Barisal</b><br> 
                            <label class="badge badge-light badge-pill p-2 mt-2">Live Jobs:2</label>
                          </a>
                         </small>
                        </div>
                        <div class="col-lg-3 card p-2 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <small>
                           <a href="/jobs?location=Rajshahi">
                            <b>Rajshahi</b><br> 
                            <label class="badge badge-light badge-pill p-2 mt-2">Live Jobs:2</label>
                          </a>
                         </small>
                        </div>
                        <div class="col-lg-3 card p-1 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                          <small>
                           <a href="/jobs?location=Mymensingh">
                            <b>Mymensingh</b><br> 
                            <label class="badge badge-light badge-pill p-2 mt-2">Live Jobs:2</label>
                          </a>
                         </small>
                        </div>
                        <div class="col-lg-3 card p-1 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                         <small>
                           <a href="/jobs?location=Rangpur">
                            <b>Rangpur</b><br> 
                            <label class="badge badge-light badge-pill p-2 mt-2">Live Jobs:2</label>
                          </a>
                         </small>
                        </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="container-fluid p-4" style="width:100%; ">
            <h4 class="text-center"><b>Browse Job Categories</b></h4>
            <div class="row m-2 mx-auto p-2 d-flex justify-content-center">
               @foreach(Category::all() as $category)
                  <div class="col-lg-2 card p-1 m-2 bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                    <a href="/jobs?category={{$category->category_name}}">
                      <small>
                        <b class="">{{$category->category_name}}</b><br> 
                        <label class="badge badge-light badge-pill mt-2 p-2">Live Jobs: {{$category->no_jobs}}</label>
                      </small>
                    </a>
                  </div>
                @endforeach
            </div>
          </div>
          <div class="container-fluid p-4" style="width:100%; ">
            <h4 class="text-center"><b>Browse Top Companies</b></h4>
            <div class="row m-2 p-4 d-flex justify-content-center">
               @foreach(Employeer::all() as $employeer)
                  <div class="col-lg-2 card p-1 m-2 justify-content-between bg-white rounded  text-center" style="border: solid 1px rgb(240, 240, 240)">
                    <small><a href="/jobs?company={{$employeer->id}}">
                      <b style="color:">{{$employeer->name}}</b><br> 
                      <label class="text-muted">Current openings: {{ (Job::where('employeer_id', '=', $employeer->id)->count()) }}</label>
                    </a></small>
                  </div>
                @endforeach
            </div>
          </div>
          
    </body>
</html>
@endsection
