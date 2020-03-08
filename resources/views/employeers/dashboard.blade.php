<?php 
	use App\Job; 
	use App\Employeer; 
	use App\Application;
?>
@extends('layout.app')
@section('content')
	<div class="container-fluid text-center" style="margin-top: 8%">
		<label class="text-center">Employeer Information</label>
		<h3 class="text-center">{{ Auth::guard('employeer')->user()->name }}</h3>
		@php
			$employeer_id = Auth::guard('employeer')->user()->id
		@endphp
		<nav class="mt-2">
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><b>Current Jobs</b></a>
			    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
			    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
			  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<table class="table mt-0">
						<thead>
							<th>No</th><th>Job Title</th><th>Vacancy</th><th>Posted at</th><th>Deadline</th><th>Applicants</th><th>Action</th>
						</thead>
						<tbody>
							@php
								$i = 1
							@endphp
							@foreach(Job::where('employeer_id', '=', $employeer_id)->get() as $job)
									<tr>
										<td>{{ $i++ }}</td>
										<td>{{ $job->title }}</td>
										<td>{{ $job->vacancy }}</td>
										<td>{{date('d-M-Y', strtotime($job->updated_at))}}</td>
										<td>{{date('d-M-Y', strtotime($job->deadline))}}</td>
										<td>
											{{Application::where('job_id', '=', $job->job_id)->count()}}
											<a href='/employees/applicants/{{$job->job_id}}' style="text-decoration: underline; color: blue;">
												 (View all)
											</a>
										</td>
										<td>
											<a href='/jobs/edit/{{$job->job_id}}' style="color: blue; text-decoration: underline;">Edit</a> | 
											<a href='/jobs/delete/{{$job->job_id}}' style="color: blue; text-decoration: underline;">Delete</a>
										</td>
									</tr>
							@endforeach
						</tbody>
					</table>
			</div>
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
				<div class='row m-0 p-4'>
					<h3>{{ Auth::guard('employeer')->user()->name }}<h3>
				</div>
				<div class='row m-0 p-4 text-left'>
					Website: {{ Auth::guard('employeer')->user()->website }}<br>
					Email: {{ Auth::guard('employeer')->user()->email }}<br>
					Address: {{ Auth::guard('employeer')->user()->address }}<br>
					Company Type: {{ Auth::guard('employeer')->user()->company_type }}<br>
					Number of employees:<br>
					Linkedin Profile<br>
					Facebook Profile<br>
					Mobile Number<br>
					People rating<br>
				</div>
			</div>
			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
		</div>
	</div>
@endsection