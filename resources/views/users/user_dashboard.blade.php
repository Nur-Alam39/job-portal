@extends('layout.app')
@section('content')
<html>
	<head>
		<style type="text/css">
		</style>
	</head>
	<body>
		<div class="container p-5 mx-auto" style="margin-top: 5%; width:70%">
			<h4 class="pb-2 pl-2 mb-2" style="text-align: center;">MY JOBS</h4>
			<a href="/users/view_profile" class="btn btn-primary btn-sm mb-4" role="button" aria-pressed="true">
				View Profile
			</a>
			<h5>Saved Jobs</h5>
			<table class="table table-bordered">
				<thead>
					<th>No</th>
					<th>Job Title</th>
					<th>Company</th>
					<th>Deadline</th>
					<th>Apply</th>
				</thead>
			</table>
			<h5>Following Company Jobs</h5>
			<table class="table table-bordered">
				<thead>
					<th>No</th>
					<th>Job Title</th>
					<th>Company</th>
					<th>Deadline</th>
					<th>Apply</th>
				</thead>
			</table>
			<h5>Applied Jobs</h5>
			<table class="table table-bordered">
				<thead>
					<th>No</th>
					<th>Job Title</th>
					<th>Company</th>
					<th>Applied Date</th>
				</thead>
			</table>
		</div>
	</body>
</html>
@endsection