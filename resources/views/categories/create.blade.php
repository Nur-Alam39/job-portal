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
			<h4 class="pb-2 pl-2" style="text-align: center;">Add New Category</h4>
			<a class='m-2' href='/categories' style="color: blue; text-decoration: underline;"> View all</a>
			<form action="/categories/store" method="post" class="card p-4 m-2 p-4 mb-5" style='background-color: rgb(253, 253, 253); border:none; border-radius: 1% '>
			  @csrf
			  <div class="form-row">
			    <div class="form-group col-md-6">
				    <label for="exampleFormControlInput1">Category Name</label>
				    <input type="text" class="form-control"  name="category_name">
			  	</div>
			    <div class="form-group col-md-2">
			      <label for="exampleFormControlInput1">Number of current Job</label>
			      <input type="number" class="form-control"  name="no_jobs">
			    </div>
			    <div class="form-group col-md-2">
			      <label for="exampleFormControlInput1">&nbsp;</label>
			      <button type="submit" class=" form-control btn btn-primary font-weight-bold">Save</button>
			    </div>
			    <div class="form-group col-md-2">
			      <label for="exampleFormControlInput1">&nbsp;</label>
			      <a href="/categories" class=" form-control btn btn-light font-weight-bold">Cancel</a>
			    </div>
			  </div>
			</form>
		</div>
	</body>
</html>
@endsection