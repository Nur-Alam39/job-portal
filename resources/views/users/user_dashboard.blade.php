<?php 
  use App\Application;
  use App\Job;
  use App\Employeer;
?>

@extends('layout.app')
@section('content')
	<div class="container-fluid text-center" style="margin-top: 8%">
		<label class="text-center">Job Seeer Information</label>
		<h3 class="text-center">{{ Auth::guard('web')->user()->name }}</h3>
		@php
			$user_id = Auth::guard('web')->user()->id
		@endphp
		<nav class="mt-2">
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Saved Jobs</a>
			    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Applied Jobs</a>
			    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Following Company Jobs</a>
			  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<table class="table mt-0">
						<thead>
							<th>No</th><th>Job Title</th><th>Vacancy</th><th>Posted at</th><th>Deadline</th><th>Applicants</th><th>Action</th>
						</thead>
						<tbody>
							
						</tbody>
					</table>
			</div>
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
				<table class="table mt-0">
				<thead>
					<th>No</th>
					<th>Job Title</th>
					<th>Company</th>
					<th>Applied Date</th>
				</thead>
				<tbody>
					@php
						$i = 1
					@endphp
					@foreach(Application::where('user_id', '=', Auth::user()->id)->get() as $application)
					<tr>
						@foreach (Job::where('job_id', '=', $application->job_id)->get() as $job)
							@foreach (Employeer::where('id', '=', $job->employeer_id)->get() as $employeer)
								<td>{{$i++}}</td>
								<td>{{$job->title}}</td>
								<td>{{$employeer->name}}</td>
								<td>{{$application->created_at}}</td>
							@endforeach
						@endforeach
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
		</div>
	</div>
@endsection