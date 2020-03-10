@extends('layout.app')
@section('content')
<html>
	<head>
		<style type="text/css">
			label
			{
				font-weight: bold;
			}
			body
			{

			}
		</style>
	</head>
	<body>
		<div class="container-fluid p-5 " style="margin-top: 5%">
			<h4 class="pb-2 pl-2" style="text-align: center;">Edit Educational Information</h4>
			<a class='m-2' href='/users/education' style="color: blue; text-decoration: underline;"> View all</a>
			<br><label class='m-2'>Profile of <b>{{Auth::user()->name}}</b></label>
			<form action="/users/education/update/{{$education->id}}" method="post" class="card p-4 m-2 p-4 mb-5" style='background-color: rgb(253, 253, 253); border:none; border-radius: 1% '>
			  @csrf
			  <div class="form-row">
			    <div class="form-group col-md-4">
				    <label for="exampleFormControlInput1">Degree Name</label>
				    <input type="text" class="form-control"  name="degree_name" value="{{$education->degree_name}}">
			  	</div>
			    <div class="form-group col-md-8">
			      <label for="exampleFormControlInput1">Department/Subject</label>
			      <input type="text" class="form-control"  name="subject" value="{{$education->subject}}">
			    </div>
			   </div>
			   <div class="form-row">
			     <div class="form-group col-md-8">
			      <label for="exampleFormControlInput1">Institute</label>
			      <input type="text" class="form-control"  name="institute" value="{{$education->institute}}">
			    </div>
			     <div class="form-group col-md-4">
			      <label for="exampleFormControlInput1">Location</label>
			      <input type="text" class="form-control"  name="location" value="{{$education->location}}">
			    </div>
			   </div>
			   <div class="form-row">
			     <div class="form-group col-md-2">
			      <label for="exampleFormControlInput1">Passing Year</label>
			      <input type="date" class="form-control"  name="passing_year" value="{{$education->passing_year}}">
			    </div>
			     <div class="form-group col-md-2">
			      <label for="exampleFormControlInput1">Result</label>
			      <input type="text" class="form-control"  name="result" value="{{$education->result}}">
			    </div>
			   </div>
			  <div class="form-row">
				  <div class="form-group col-md-1 mt-2">
				      <button type="submit" class=" form-control btn btn-sm btn btn-primary font-weight-bold">Update</button>
				   </div>
				</div>
			</form>
		</div>
	</body>
</html>
@endsection