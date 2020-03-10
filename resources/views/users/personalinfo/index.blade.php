@extends('layout.app')
@section('content')
<html>
	<head>
		<style type="text/css">
		</style>
	</head>
	<body>
		<div class="container p-5 mx-auto" style="margin-top: 5%; width:70%">
			<h4 class="pb-2 pl-2 mb-2" style="text-align: center;">Personal Information</h4>
			<label class='m-2 text-center'>Profile of <b>{{Auth::user()->name}}</b></label><br>
			<a href="/users/view_profile" class="btn btn-light btn-sm m-2" role="button" aria-pressed="true">
				View Profile
			</a>
			@if ($personalinfo->count() == 0)
				<h6>No information is added</h6>
				<a href="/users/personalinfo/create" class="btn btn-primary btn-sm m-2">
					<b>Add Information</b>
				</a>
			@endif
			
			@foreach($personalinfo as $user_personalinfo)
				<a href="/users/personalinfo/{{$user_personalinfo->id}}/edit" class="btn btn-primary btn-sm m-2" role="button" aria-pressed="true">
					<b>Edit Information</b>
				</a>
				<table class="table">
						<tr>
							<td class="text-right">Profile Image</td>
							<td>
								<img src="{{$user_personalinfo->photo}}" width="200px" />
							</td>
						</tr>
						<tr><td class="text-right">Full Name</td><td>{{$user_personalinfo->full_name}}</td></tr>
						<tr><td class="text-right">Father's Name</td><td>{{$user_personalinfo->father}}</td></tr>
						<tr><td class="text-right">Mother's Name</td><td>{{$user_personalinfo->mother}}</td></tr>
						<tr><td class="text-right">Gender</td><td>{{$user_personalinfo->gender}}</td></tr>
						<tr><td class="text-right">Religion</td><td>{{$user_personalinfo->religion}}</td></tr>
						<tr><td class="text-right">Birth date</td><td>{{$user_personalinfo->birthdate}}</td></tr>
						<tr><td class="text-right">NID</td><td>{{$user_personalinfo->nid}}</td></tr>
						<tr><td class="text-right">Linkedin</td><td>{{$user_personalinfo->linkedin}}</td></tr>
						<tr><td class="text-right">Website</td><td>{{$user_personalinfo->website}}</td></tr>
						<tr><td class="text-right">facebook</td><td>{{$user_personalinfo->facebook}}</td></tr>
						<tr><td class="text-right">Github</td><td>{{$user_personalinfo->github}}</td></tr>
						<tr><td class="text-right">Mobile</td><td>{{$user_personalinfo->mobile}}</td></tr>
						<tr><td class="text-right">Present Address</td><td>{{$user_personalinfo->present_address}}</td></tr>
						<tr><td class="text-right">Permanent Address</td><td>{{$user_personalinfo->permanent_address}}</td></tr>
				</table>
			@endforeach	
		</div>
	</body>
</html>
@endsection