@extends('layout.app')
@section('content')
<html>
	<head>
		<style type="text/css">
		</style>
	</head>
	<body>
		<div class="container p-5 mx-auto" style="margin-top: 5%; width:70%">
			<h4 class="pb-2 pl-2 mb-2" style="text-align: center;">Educational Qualifications</h4>
			<a href="/users/education/create" class="btn btn-primary btn-sm m-2" role="button" aria-pressed="true">
				<b>+ New Degree</b>
			</a>
			<a href="/users/view_profile" class="btn btn-light btn-sm m-2" role="button" aria-pressed="true">
				View Profile
			</a>
			@foreach($education as $user_education)
				<div class="card m-2" id="job_post" style="width: 100%; list-style: none">
                    <div class="card-body">
                      <h5 class="card-title" id="job_title"><b>{{$user_education->institute}}, {{$user_education->location}}</b></h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$user_education->degree_name}},  {{$user_education->subject}}</h6>
                      <li class="card-text">
                       <!--  <i class="fas fa-map-marker-alt"></i>&nbsp; -->
                      </li>
                      <li class="card-text">
                          <b>Passing Year:</b> {{date('F Y', strtotime($user_education->passing_year) + 6*3600) }} &nbsp;
                          <b>Result: </b> {{$user_education->result}} 
                      </li>
                      <small id="job_post_link">
                        <a href="/users/education/edit/{{$user_education->id}}" style="text-decoration: ; color: #0052cc">Edit</a> <i style="color:#b3b3b3">&#8226; </i>
                        <a href="/users/education/delete/{{$user_education->id}}" style="text-decoration: ; color: #0052cc">Remove</a>
                      </small>
                    </div>
                </div>
              @endforeach
		</div>
	</body>
</html>
@endsection