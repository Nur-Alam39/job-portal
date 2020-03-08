<?php 
	use App\Job; 
	use App\User; 
	use App\Employeer; 
	use App\Application;
?>
@extends('layout.app')
@section('content')
	<div class="container-fluid" style="margin-top: 8%">
		<h3 class="text-center">{{ Auth::guard('employeer')->user()->name }}</h3>
		@php
			$employeer_id = Auth::guard('employeer')->user()->id;
			$i = 1
		@endphp
		<h6 class="text-center">Applicants Information</h6>
		<a style="color: blue; text-decoration: underline;" href='/employeers/dashboard'>Back</a>
		<table class="table mt-5">
			<thead>
				<th>No</th><th>Job title</th><th>Posted</th><th>Applicant Name</th><th>Applied date</th><th>Action</th>
			</thead>
			<tbody>
				@foreach($applicants as $applicant)
					@foreach(Job::where('job_id', '=', $applicant->job_id)->get() as $job)
						@foreach(User::where('id', '=', $applicant->user_id)->get() as $user)
							<tr>
								<td>{{ $i++ }}</td>
								<td>{{ $job->title }}</td>
								<td>{{date('d-M-Y', strtotime($job->updated_at))}}</td>
								<td>{{ $user->name }}</td>
								<td>{{date('d-M-Y', strtotime($applicant->created_at))}}</td>
								<td>
									<a href='/users/public_profile/{{$applicant->user_id}}' style="color: blue; text-decoration: underline;">View CV</a> | 
									<a href='/users/public_profile/{{$applicant->user_id}}' style="color: blue; text-decoration: underline;">Delete</a>
								</td>
							</tr>
						@endforeach
					@endforeach
				@endforeach
			</tbody>
		</table>
	</div>
@endsection