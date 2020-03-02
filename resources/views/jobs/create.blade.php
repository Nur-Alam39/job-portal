<!DOCTYPE html>
<?php 
	use App\Category; 
?>
@extends('layout.app')
@section('content')
<html>
	<head>
		<style type="text/css">
			label{font-weight: bold;}
		</style>
	</head>
	<body>
		<div class="container-fluid p-5 " style="margin-top: 5%">
			<h4 class="pb-2 pl-2" style="text-align: center;">Post a Job</h4>
			<label class="pl-2 font-weight-normal">* Fill all the fields</label>
			<form action="/jobs/store" method="post" class="card p-4 m-2 p-4 mb-5" style='background-color: rgb(253, 253, 253); border:none; border-radius: 1% '>
			  @csrf
			  <div class="form-row">
			    <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Job Title</label>
				    <input type="text" class="form-control" name="title">
			  	</div>
			    <div class="form-group col-md-2">
			      <label for="exampleFormControlInput1">No. Vacancy</label>
			      <input type="number" class="form-control" name="vacancy">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputZip">Application Deadline</label>
			      <input type="date" class="form-control" name="deadline">
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-2">
				    <label for="exampleFormControlSelect1">Employment Status</label>
				    <select class="form-control"  name="employment_type">
				      <option value="Full-time">Full-time</option>
				      <option value="Part-time">Part-time</option>
				      <option value="Internship">Internship</option>
				      <option value="Contractual">Contractual</option>
				    </select>
			  </div>
			  <div class="form-group col-md-2">
				    <label for="exampleFormControlInput1">Salary</label>
			    	<input type="text" class="form-control"  name="salary">
			  </div>
			    <div class="form-group col-md-2">
			      <label for="inputState">Location</label>
			      <select id="inputState" class="form-control" name="location">
			        <option selected value="Dhaka">Dhaka</option>
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
			        <option selected value="Both Male and Female">Both Male and Female</option>
			        <option value="Male">Only Male</option>
			         <option value="Female">Only Female</option>
			      </select>
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputZip">Age Range</label>
			      <input type="text" class="form-control" name="age">
			    </div>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-3">
				    <label for="inputState">Job Category</label>
			      <select  class="form-control" name="category_name">
			      	@foreach(Category::all() as $category)
			        	<option value="{{$category->category_name}}">{{$category->category_name}}</option>
			        @endforeach
			      </select>
				  </div>
				  <div class="form-group col-md-9">
				    <label>Keyword</label>
				    <textarea class="form-control"  rows="1" name="keywords"></textarea>
				  </div>
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Job Context</label>
			    <textarea class="form-control" rows="3" name="job_context"></textarea>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlTextarea1">Job Responsibilities</label>
				    <textarea class="form-control"  rows="5" name="responsibilities"></textarea>
				  </div>
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlTextarea1">Educational Requiresments</label>
				    <textarea class="form-control"  rows="5" name="education"></textarea>
				  </div>
			  </div>
			  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Experience Requiresments</label>
				    <textarea class="form-control" rows="5" name="requirements"></textarea>
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Additional Requirements</label>
			     <textarea class="form-control"  rows="8" name="additional_requirements"></textarea>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlTextarea1"> Compensation & Other Benefits</label>
				    <textarea class="form-control" rows="5" name="benifits"></textarea>
				  </div>
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Apply Instruction</label>
				    <textarea class="form-control" rows="5" name="apply_instruction"></textarea>
				  </div>
			  </div>
			  <div class="text-center">
			  	<button type="submit" class="btn btn-primary col-lg-2 font-weight-bold text-center">Post</button>
			  </div>
			  
			</form>
		</div>
	</body>
</html>
@endsection