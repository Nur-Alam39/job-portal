@extends('layout.app')
@section('content')
<html>
	<head>
		<style type="text/css">
			label
			{
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid p-5 " style="margin-top: 5%">
			<h3 style="text-align: center;">Edit Job Information</h3>
			<form action="/jobs/update/{{$job->job_id}}" method="post" class="card p-4 m-2 p-4 mb-5 bg-white" style='border:none; box-shadow: '>
			  @csrf
			  <div class="form-row">
			    <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Job Title</label>
				    <input type="text" class="form-control" value="{{$job->title}}" name="title">
			  	</div>
			    <div class="form-group col-md-2">
			      <label for="exampleFormControlInput1">No. Vacancy</label>
			      <input type="number" class="form-control" value="{{$job->vacancy}}" name="vacancy">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputZip">Application Deadline</label>
			      <input type="date" class="form-control" value="{{$job->deadline}}" name="deadline">
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-2">
			    <label for="exampleFormControlSelect1">Employment Status</label>
			    <select class="form-control" name="employment_type">
			      <option value="Full-time">Full-time</option>
			      <option value="Part-time">Part-time</option>
			      <option value="Internship">Internship</option>
			      <option value="Contractual">Contractual</option>
			    </select>
			  </div>
			    <div class="form-group col-md-4">
			      <label for="inputState">Location</label>
			      <select id="inputState" class="form-control" name="location">
			        <option selected value="Dhaka">Dhaka</option>
			        <option value="Chattagram">Chattagram</option>
			        <option value="Chattagram">Khulna</option>
			        <option value="Chattagram">Sylhet</option>
			      </select>
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputState">Gender</label>
			      <select  class="form-control" name="gender">
			      	 <option selected value="{{$job->gender}}">{{$job->gender}}</option>
			        <option value="Both">Both Male and Female</option>
			        <option value="Male">Only Male</option>
			         <option value="Female">Only Female</option>
			      </select>
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputZip">Age Range</label>
			      <input type="text" class="form-control" value="{{$job->age}}" name="age">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Job Context</label>
			    <textarea class="form-control" rows="3" name="job_context"></textarea>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlTextarea1">Job Responsibilities</label>
				    <textarea class="form-control"  rows="5" name="responsibilities">{{$job->responsibilities}}</textarea>
				  </div>
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlTextarea1">Educational Requiresments</label>
				    <textarea class="form-control"  rows="5" name="education">{{$job->education}}</textarea>
				  </div>
			  </div>
			  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Experience Requiresments</label>
				    <textarea class="form-control" rows="5" name="requirements">{{$job->requirements}}</textarea>
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Additional Requirements</label>
			     <textarea class="form-control"  rows="8" name="additional_requirements">{{$job->additional_requirements}}</textarea>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlTextarea1"> Compensation & Other Benefits</label>
				    <textarea class="form-control" rows="5" name="benifits">{{$job->benifits}}</textarea>
				  </div>
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Apply Instruction</label>
				    <textarea class="form-control" rows="5" name="apply_instruction">{{$job->apply_instruction}}</textarea>
				  </div>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Salary</label>
			    	<input type="text" class="form-control" name="salary" value="{{$job->salary}}">
				  </div>
			  </div>
			  <button type="submit" class="btn btn-primary">UPDATE</button>
			</form>
		</div>
	</body>
</html>
@endsection