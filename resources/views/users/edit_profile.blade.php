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
		<div class="container-fluid p-2 " style="margin-top: 5%">
			<h4 style="text-align: center;">Edit Profile</h4>
			<form action="/users/update/{{ Auth::user()->user_id }}" method="post" class="p-4 mb-5 bg-white" style='border:none; box-shadow: '>
			  @csrf
			  <div class="form-row">
				  <div class="form-group col-md-1">
				    <label for="exampleFormControlInput1">User ID: {{Auth::user()->id}}</label>
				  </div>
			  </div>
			  <div class='container-fluid p-0'>
			  	  <ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Basic Information</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contact</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Education</a>
				  </li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  		<h5>Basic Information</h5>
				  	<div class="form-row">
					    <div class="form-group col-md-4">
						    <label>Name</label>
						    <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name">
					  	</div>
					  	<div class="form-group col-md-6">
						    <label>Email</label>
						    <input type="email" class="form-control" value="{{ Auth::user()->email }}" name="email">
					  	</div>
					  </div>
				  </div>
				  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				  	<h5>Contact and Social</h5>
				  		<div class="form-row">
					    <div class="form-group col-md-4">
						    <label>Linkedinin</label>
						    <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name">
					  	</div>
					  	<div class="form-group col-md-6">
						    <label>Facebook</label>
						    <input type="email" class="form-control" value="{{ Auth::user()->email }}" name="email">
					  	</div>
					  </div>
				  </div>
				  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				  	<h5>Education</h5>
				  		<div class="form-row">
					    <div class="form-group col-md-4">
						    <label>BSc</label>
						    <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name">
					  	</div>
					  	<div class="form-group col-md-6">
						    <label>HSC</label>
						    <input type="email" class="form-control" value="{{ Auth::user()->email }}" name="email">
					  	</div>
					  </div>
				  </div>
				</div>
			  </div>
			</form>
		</div>
	</body>
</html>
@endsection