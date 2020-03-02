<?php 
	use App\Category; 
?>
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
			<form action="/jobs/update/{{$job->job_id}}" method="post" class="card p-4 m-2 p-4 mb-5 bg-white" style='border:none; box-shadow: ;background-color: rgb(253, 253, 253);'>
			  @csrf
			  <div class="form-row">
			    <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Job Title</label>
				    <input type="text" class="form-control" name="title" value="{{$job->title}}">
			  	</div>
			    <div class="form-group col-md-2">
			      <label for="exampleFormControlInput1">No. Vacancy</label>
			      <input type="number" class="form-control" name="vacancy" value="{{$job->vacancy}}">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputZip">Application Deadline</label>
			      <input type="date" class="form-control" name="deadline" value="{{$job->deadline}}">
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-2">
				    <label for="exampleFormControlSelect1">Employment Status</label>
				    <select class="form-control"  name="employment_type">
				      <option selected value="{{$job->employment_type}}">{{$job->employment_type}}</option>
				      <option value="Full-time">Full-time</option>
				      <option value="Part-time">Part-time</option>
				      <option value="Internship">Internship</option>
				      <option value="Contractual">Contractual</option>
				    </select>
			  </div>
			  <div class="form-group col-md-2">
				    <label for="exampleFormControlInput1">Salary</label>
			    	<input type="text" class="form-control"  name="salary" value="{{$job->salary}}">
			  </div>
			    <div class="form-group col-md-2">
			      <label for="inputState">Location</label>
			      <select id="inputState" class="form-control" name="location">
			      	<option selected value="{{$job->location}}">{{$job->location}}</option>
			        <option value="Dhaka">Dhaka</option>
			        <option value="Chattagram">Chattagram</option>
			        <option value="Khulna">Khulna</option>
			        <option value="Sylhet">Sylhet</option>
			        <option value="Barisal">Barisal</option>
			        <option value="Gazipur">Gazipur</option>
			        <option value="Anywhere in Bangladesh">Anywhere in Bangladesh</option>
			      </select>
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputState">Gender</label>
			      <select  class="form-control" name="gender">
			        <option selected value="{{$job->gender}}">{{$job->gender}}</option>
			        <option value="Both Male and Female">Both Male and Female</option>
			        <option value="Male">Only Male</option>
			        <option value="Female">Only Female</option>
			      </select>
			    </div>
			    <div class="form-group col-md-3">
			      <label>Age Range</label>
			      <input type="text" class="form-control" name="age" value="{{$job->age}}">
			    </div>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-3">
				    <label for="inputState">Job Category</label>
			      <select  class="form-control" name="category_name">
			      	<option selected value="{{$job->category}}">{{$job->category}}</option>
			      	@foreach(Category::all() as $category)
			        	<option value="{{$category->category_name}}">{{$category->category_name}}</option>
			        @endforeach
			      </select>
				  </div>
				  <div class="form-group col-md-9">
				    <label>Keyword</label>
				    <textarea class="form-control"  rows="1" name="keywords">{{$job->keywords}}</textarea>
				  </div>
			  </div>
			  <div class="form-group">
			    <label>Job Context</label>
			    <textarea class="form-control" rows="3" name="job_context">{{$job->job_context}}</textarea>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
				    <label>Job Responsibilities</label>
				    <textarea class="form-control"  rows="5" name="responsibilities">{{$job->responsibilities}}</textarea>
				  </div>
				  <div class="form-group col-md-6">
				    <label>Educational Requiresments</label>
				    <textarea class="form-control"  rows="5" name="education">{{$job->education}}</textarea>
				  </div>
			  </div>
			  <div class="form-group">
				    <label>Experience Requiresments</label>
				    <textarea class="form-control" rows="5" name="requirements">{{$job->requirements}}</textarea>
			  </div>
			  <div class="form-group">
			    <label>Additional Requirements</label>
			     <textarea class="form-control"  rows="8" name="additional_requirements">{{$job->additional_requirements}}</textarea>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
				    <label> Compensation & Other Benefits</label>
				    <textarea class="form-control" rows="5" name="benifits">{{$job->benifits}}</textarea>
				  </div>
				  <div class="form-group col-md-6">
				    <label>Apply Instruction</label>
				    <textarea class="form-control" rows="5" name="apply_instruction">{{$job->apply_instruction}}</textarea>
				  </div>
			  </div>
			  <div class="text-center">
			  	<button type="submit" class="btn btn-sm btn-primary col-lg-2 font-weight-bold text-center">Update</button>
			  </div>
			</form>
		</div>
	</body>
</html>
@endsection