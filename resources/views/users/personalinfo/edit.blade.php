@extends('layout.app')
@section('content')
<html>
	<head>
		<style>
			label{font-weight: bold;}
		</style>
		
	</head>
	<body>
		<div class="container-fluid p-5 " style="margin-top: 5%">
			<h4 class="pb-2 pl-2" style="text-align: center;">Edit Personal Information</h4>
			<a class='m-2' href='/users/personalinfo' style="color: blue; text-decoration: underline;"> View Info</a>
			<br><label class='m-2'>Profile of <b>{{Auth::user()->name}}</b></label><br>
			<form action="/users/personalinfo/{{$personalinfo->id}}" method="post" enctype="multipart/form-data" class="card p-4 m-2 p-4 mb-5" style='background-color: rgb(253, 253, 253); border:none; border-radius: 1% '>
			  @csrf
			  @method('put')
			  <input type="hidden" name="_method" value="PUT">
			  <div class="form-row mb-2">
			    <div class="form-group col-md-4">
			    	<label>Change Profile Iamge</label>
				    <input type="file" name="file" id="profile-img">
				    <br><small class="pt-4">Current Photo</small><br>
					<img class="mt-2" src="{{$personalinfo->photo}}" id="profile-img-tag" width="200px" />
			  	</div>
			  	<div class="form-group col-md-6">
			    	<label>Image upload instructions</label>
				    <ul>
				    	<li>Image Format: .png, .jpg or .jpeg</li>
				    	<li>Image Size: Minimum 50KB and maximum 1MB</li>
				    </ul>
			  	</div>
			  </div>
			  <div class="form-row">
			  	<div class="form-group col-md-4">
			      <label>Full Name</label>
			      <input type="text" class="form-control" name="full_name" value="{{$personalinfo->full_name}}">
			    </div>
			    <div class="form-group col-md-4">
			      <label>Father's Name</label>
			      <input type="text" class="form-control" name="father" value="{{$personalinfo->father}}">
			    </div>
			    <div class="form-group col-md-4">
			      <label>Mother's Name</label>
			      <input type="text" class="form-control" name="mother" value="{{$personalinfo->mother}}">
			    </div>
			  </div>
			  <div class="form-row">
			  	<div class="form-group col-md-4">
				    <label>Mobile</label>
			    	<input type="text" class="form-control"  name="mobile" value="{{$personalinfo->mobile}}">
			  </div>
			  <div class="form-group col-md-8">
				    <label>NID Number</label>
			    	<input type="text" class="form-control"  name="nid" value="{{$personalinfo->nid}}">
			  </div>
			    <div class="form-group col-md-4">
			      <label>Linkedin Profile URL</label>
			      <input type="text" class="form-control" name="linkedin" value="{{$personalinfo->linkedin}}">
			    </div>
			    <div class="form-group col-md-4">
			      <label>Pesonal website/Protfolio URL</label>
			      <input type="text" class="form-control" name="website" value="{{$personalinfo->website}}">
			    </div>
			    <div class="form-group col-md-4">
			      <label>Facebook URL</label>
			      <input type="text" class="form-control" name="facebook" value="{{$personalinfo->facebook}}">
			    </div>
			    <div class="form-group col-md-4">
			      <label>Github URL</label>
			      <input type="text" class="form-control" name="github" value="{{$personalinfo->github}}">
			    </div>
			    <div class="form-group col-md-2">
			      <label>Religion</label>
			      <select class="form-control" name="religion">
			      	<option selected value="{{$personalinfo->religion}}">{{$personalinfo->religion}}</option>
			        <option value="Dhaka">Islam</option>
			        <option value="Chattagram">Christian</option>
			        <option value="Khulna">Budhisst</option>
			        <option value="Sylhet">Sanatan</option>
			        <option value="Barisal">Others</option>
			      </select>
			    </div>
			    <div class="form-group col-md-3">
			      <label>Gender</label>
			      <select  class="form-control" name="gender">
			        <option selected value="Male">Male</option>
			        <option value="Female">Female</option>
			         <option value="Others">Others</option>
			      </select>
			    </div>
			    <div class="form-group col-md-3">
			      <label>Birth date</label>
			      <input type="date" class="form-control" name="birthdate" value="{{$personalinfo->birthdate}}">
			    </div>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlTextarea1">Present Address</label>
				    <textarea class="form-control"  rows="5" name="present_address">{{$personalinfo->present_address}}</textarea>
				  </div>
				  <div class="form-group col-md-6">
				    <label for="exampleFormControlTextarea1">Permanent Address</label>
				    <textarea class="form-control"  rows="5" name="permanent_address">{{$personalinfo->permanent_address}}</textarea>
				  </div>
			  </div>
			  <div class="text-center">
			  	<button type="submit" class="btn btn-primary col-lg-2 font-weight-bold text-center">Update</button>
			  </div>
			  
			</form>
		</div>
	</body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
		<script type="text/javascript">
		    function readURL(input) {
		        if (input.files && input.files[0]) {
		            var reader = new FileReader();
		            
		            reader.onload = function (e) {
		                $('#profile-img-tag').attr('src', e.target.result);
		            }
		            reader.readAsDataURL(input.files[0]);
		        }
		    }
		    $("#profile-img").change(function(){
		        readURL(this);
		    });

		    $(function() {
		      $("input[type='file']").change(function(file) {
		          ext = file.currentTarget.files[0].type.split('/')[1];
		          console.log(ext);
		          if(['jpeg', 'png', 'jpg'].includes(ext)) {
		            $("button[type='submit']").prop('disabled', false);
		          }
		          else {
		            alert("Wrong file format");
		            $("button[type='submit']").prop('disabled', true);
		          }
		      }); 
		    });
		</script>
</html>
@endsection