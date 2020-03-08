<?php 
  use App\Category;
  use App\Job;
  use App\Employeer;
?>
<html>
	<head>

		<link rel="icon" href="https://www.pinclipart.com/picdir/big/198-1980971_sixdays-bremen-transparent-loading-circle-gif-clipart.png" type="image/icon type">
        
		<title>Opportinity</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>


        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/fe6cc37c91.js" crossorigin="anonymous"></script>

         <!-- Fonts -->
	    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	     <!-- Styles -->
    	
         

        <style type="text/css">
          body bg-light
          {
        	  margin: 0;
			  font-family: arial, sans-serif;
			  /*font-size: .95rem;
			  font-weight: 100%;
			  line-height: 1.6;
			  color: #000000;*/
              background-color: #ffffff;

          }
          a, a:hover {
            color: inherit;
            text-decoration: none;
          }
			.navbar-nav li:hover > ul.dropdown-menu {
			    display: block;
			}
			.dropdown-submenu {
			    position:relative;
			}
			.dropdown-submenu>.dropdown-menu {
			    top: -200%;
			    left: 100%;
			    right: 0;
			}

			/* rotate caret on hover */
			.dropdown-menu > li > a:hover:after {
			    text-decoration: underline;
			    transform: rotate(-90deg);
			} 
			#footer a:hover
			{
				text-decoration: underline;
			}
			#footer
			{
				font-size: 14px;
			}
			.navbar-nav li > a
			{
				border-bottom:solid 2px transparent;
				font-size: 14px;
				color: #333333;
			}
			.navbar-nav li > a:hover
			{
				border-bottom:solid 2px #80b3ff;
				border-radius: 2px;
			}

			#job_post_link a:hover
	          {
	            text-decoration: underline;
	          }
        </style>
	</head>
	<body>
		<nav class="navbar fixed-top navbar-expand-lg p-2 bg-white"
			style="border-bottom: solid 0px #d9d9d9">
	            <a class="navbar-brand pl-4" href="/" style="color: rgb(25, 25, 25);">
	            	<img src="https://www.pinclipart.com/picdir/big/198-1980971_sixdays-bremen-transparent-loading-circle-gif-clipart.png" width="25px" height="25px"/><b> pportunity</b>
	            </a>
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	              <span class="navbar-toggler-icon"></span>
	            </button>
	            <div class="collapse navbar-collapse" id="navbarNav" >
	              <ul class="navbar-nav">
			            <li class="nav-item">
                          <a class="nav-link" href="/jobs">Find Jobs<span class="sr-only">(current)</span></a>
                        </li>
	              </ul>
                <ul class="navbar-nav ml-auto">
                    @if(Auth::guard('web')->check())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Job Seeker: {{ Auth::guard('web')->user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{route('home')}}" class="dropdown-item">Dashboard</a>
                                <a class="dropdown-item" href="/users/view_profile">
                                       {{ __('Profile') }} 
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Job Seeker</a>
                        </li>
                    @endif
                    @if(Auth::guard('employeer')->check())
                        <li class="nav-item">
                          <a class="nav-link" href="/jobs/create">Post Job</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="adminDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Employeer: {{ Auth::guard('employeer')->user()->name }}<span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="adminDropdown">
                                <a href="/employeers/dashboard" class="dropdown-item">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="login/employeer">Employeer</a>
                        </li>
                    @endif
                </ul>
	       </div>
	    </nav>
        <div class="container-fluid">
        	@yield('content')
        </div>
        <!--Footer-->
        <div class="row" id="footer" style="margin: 0; padding-left:; padding-top: 3% ;list-style: none;">
        	<div class="col-lg-12">
        		<hr>
        	</div>
        	<div class="col-lg-12" style="color: rgb(25, 25, 25);">
        		<img src="https://www.pinclipart.com/picdir/big/198-1980971_sixdays-bremen-transparent-loading-circle-gif-clipart.png" width="20px" height="20px"/><b> pportunity</b>
        	</div>
        	<div class="col-lg-2 p-4">
        		<li>About Opportunity</li>
        		<li>Terms</li>
        		<li>Privacy Policy</li>
        	</div>
        	<div class="col-lg-2 p-4">
        		<li>Help Center</li>
        		<li>Cookies</li>
        		
        	</div>
        	<div class="col-lg-2 p-4">
        		<li><a href="/">Worked at Opportunity</a></li>
        		<li>Terms</li>
        		
        	</div>
        </div>
        <div class="container-fluid text-center" style="margin: 0; padding:1%;list-style: none;">
        	<small>2020 &copy; Oppotunity, Dhaka, Bangladesh</small>
        </div>
	</body>
</html>