<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Opportunity</title>
        <link rel="icon" href="icon.png" type="image/icon type">

        <!--Bootstrap 4-->
        <script src="public/bootstrap4/js/bootstrap.js"></script>
        <link href="public/bootstrap4/css/bootstrap.css" rel="stylesheet">

        <script src="{{asset('public/bootstrap4/js/bootstrap.js')}}"></script>
        <link href="{{asset('public/bootstrap4/css/bootstrap.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/fe6cc37c91.js" crossorigin="anonymous"></script>

        <style type="text/css">
          body
          {
            background-color: rgb(253, 253, 253); 
          }
          h4 {
			    position: relative;
			}

			h4 span {
			    background-color: rgb(253, 253, 253); 
			    padding-right: 10px;
			}

			h4:after {
			    content:"";
			    position: absolute;
			    bottom: 0;
			    left: 0;
			    right: 0;
			    height: 0.2em;
			    border-top: 1px solid #d9d9d9;
			    z-index: -1;
			}
        </style>

    </head>
    <body>
        <!-- Navigation -->
          <nav class="navbar fixed-top navbar-expand-lg shadow-sm p-3 mb-5 bg-white rounded navbar-light bg-white font-weight-normal">
            <a class="navbar-brand" href="#">Opportunity</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="{{url('/')}}">Find Jobs</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/')}}">Post Job</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/about')}}">Profile</a>
                    </li>
              </ul>
            </div>
        </nav>

        <div class="row" style="margin: 0; margin-top: 8%">
          <div class="col-lg-3">
          	<div class="">
          		<div class="pb-3">
	          		<a href="#">
	          			<button class="btn btn-sm btn-light">Edit Profile</button>
	          		</a>
          		</div>
          		<p class="text-center">
          		<img class="rounded-circle" alt="100x100" src="https://pngimage.net/wp-content/uploads/2018/05/dummy-profile-image-png.png" width="200px" height="200px" 
	          	data-holder-rendered="true">
	          </p>
          		<h3 class="text-center">Nur-E-Alam Jony</h3>
          		<p class="text-center">24 years old</p>
          		<div class="text-muted">
	          		<i class="fas fa-map-marker-alt"></i>&nbsp; Mirpur, Dhaka<br>
	          		<i class="fa fa-phone"></i> &nbsp; +8801911248212<br>
	          		<i class="fab fa-github"></i> &nbsp; https://github.com/Nur-Alam39<br>
	          		<i class="fa fa-envelope"></i> &nbsp; nuralam.cse.bsmrstu@gmail.com<br>
	          		<i class="fab fa-linkedin"></i><br>
	          		<i class="fab fa-facebook"></i>
				</div>          		
          	</div>
          	
          </div>
          <div class="col-lg-9">
          	
          	<h4><span>Experience</span></h4>
          	<h4 class="mt-4"><span>Education</span></h4>
          	<li>
          		BSc - Bangabandhu Sheikh Mujibur Rahman Science & Technology University - Gopalganj</br>
          		&nbsp; &nbsp;&nbsp;&nbsp;Computer Science and Engineering
          		Passing Year: 2019 CGPA-3.51
          	</li>
          	<li>
          		HSC - AAdamjee Cantonment College - Dhaka</br>
          		&nbsp; &nbsp;&nbsp;&nbsp;Science
          		Passing Year: 2014 GPA-5.00
          	</li>
          	<li>
          		SSC-Bangabandhu Sheikh Mujibur Rahman Science & Technology University</br>
          		&nbsp; &nbsp;&nbsp;&nbsp;Science
          		Passing Year: 2012 GPA-5.00
          	</li>
          	<h4 class="mt-4"><span>Skill</span></h4>
  
          	<li>Language: C++</li>
          	<li>Web: PHP, MySQL</li>
          	<li>Framework: Laravel</li>

          	<h4 class="mt-4"><span>Project</span></h4>
          	<h4 class="mt-4"><span>Training</span></h4>
          	<h4 class="mt-4"><span>Publication</span></h4>
  			<h4 class="mt-4"><span>Additional Activities</span></h4>
  			<h4 class="mt-4"><span>Extra Cirriculum Activities</span></h4>
  			<h4 class="mt-4"><span>Reference</span></h4>
          </div>
        </div>
    </body>
</html>
