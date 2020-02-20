@extends('navbar')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Opportunity</title>
        <link rel="icon" href="icon.png" type="image/icon type">

        <style type="text/css">
          h5 {
			    position: relative;
			}

			h5 span {
			    background-color: #ffffff;
			    padding-right: 10px;
			}

			h5:after {
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
          	
          	<h5><span>Experience</span></h5>
          	<h5 class="mt-4"><span>Education</span></h5>
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
          	<h5 class="mt-4"><span>Skill</span></h5>
  
          	<li>Language: C++</li>
          	<li>Web: PHP, MySQL</li>
          	<li>Framework: Laravel</li>

          	<h5 class="mt-4"><span>Project</span></h5>
          	<h5 class="mt-4"><span>Training</span></h5>
          	<h5 class="mt-4"><span>Publication</span></h5>
  			<h5 class="mt-4"><span>Additional Activities</span></h5>
  			<h5 class="mt-4"><span>Extra Cirriculum Activities</span></h5>
  			<h5 class="mt-4"><span>Reference</span></h5>
          </div>
        </div>
    </body>
</html>
