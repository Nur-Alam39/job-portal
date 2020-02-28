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

        <style type="text/css">
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
        </style>
	</head>
	<body>
		<nav class="navbar fixed-top navbar-expand-lg p-2 bg-white"
			style="border-bottom: solid 0px #d9d9d9">
	            <a class="navbar-brand pl-4" href="/" style="color: #808080;">
	            	<img src="https://www.pinclipart.com/picdir/big/198-1980971_sixdays-bremen-transparent-loading-circle-gif-clipart.png" width="30px" height="30px"/><b> pportunity</b>
	            </a>
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	              <span class="navbar-toggler-icon"></span>
	            </button>
	            <div class="collapse navbar-collapse" id="navbarNav" >
	              <ul class="navbar-nav">
			            <li class="nav-item">
	                      <a class="nav-link" href="/jobs">Find Jobs<span class="sr-only">(current)</span></a>
	                    </li>
	                    <li class="nav-item">
	                      <a class="nav-link" href="/jobs/create">Post Job</a>
	                    </li>
	                    <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Sign in or Create Account 
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					          <a class="dropdown-item" href="#">Job Seeker</a>
					          <a class="dropdown-item" href="/employer">Employeer</a>
					        </div>
					     </li>
	              </ul>
	            </div>
	    </nav>
        <div class="container-fluid">
        	@yield('content')
        </div>
        <!--Footer-->
        <div class="row" id="footer" style="margin: 0; padding-left:3%; padding-top: 3% ;list-style: none;">
        	<div class="col-lg-12">
        		<hr>
        	</div>
        	<div class="col-lg-12" style="color: #808080;">
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
        	<small>&copy; 2020 Oppotunity, Dhaka, Bangladesh</small>
        </div>
	</body>
</html>