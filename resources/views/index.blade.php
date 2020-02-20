<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Opportunity</title>

        <!--Bootstrap 4-->
        <script src="public/bootstrap4/js/bootstrap.js"></script>
        <link href="public/bootstrap4/css/bootstrap.css" rel="stylesheet">

        <script src="{{asset('public/bootstrap4/js/bootstrap.js')}}"></script>
        <link href="{{asset('public/bootstrap4/css/bootstrap.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style type="text/css">
          body
          {
            background-color: rgb(253, 253, 253); 
          }
          a.card, a.card:hover {
            color: inherit;
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

        <div class="container-fluid" style="margin-top: 8%">
          <div class="row">
           <h3>Index Page</h3>
          </div>
        </div>

    </body>
</html>
