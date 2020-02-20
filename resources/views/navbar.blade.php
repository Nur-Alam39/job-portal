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
            background-color: rgb(255, 255, 255); 
          }
          h4 {
			    position: relative;
			}

			h4 span {
			    background-color: rgb(255, 255, 255); 
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
<!-- Navigation -->
          <nav class="navbar fixed-top navbar-expand-lg shadow-sm p-3 mb-5 bg-white navbar-light bg-white font-weight-normal">
            <a class="navbar-brand" href="#">Opportunity</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="{{url('/jobs')}}">Find Jobs</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/')}}">Post Job</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/profile')}}">Profile</a>
                    </li>
              </ul>
            </div>
        </nav>