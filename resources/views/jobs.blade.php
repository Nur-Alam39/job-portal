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
                      <a class="nav-link" href="{{url('/')}}">Find Jobs</a>
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
            <div class="col-lg-3 pl-4">
              <div class="position-fixed">
                <h6>Categories</h6>
                <ul class="list-group">
                    <li class="list-group-item align-items-center">
                      Accounting
                      <span class="badge badge-primary badge-pill">261</span>
                    </li>
                    <li class="list-group-item justify-content-between align-items-center">
                      Engineer/Architects
                      <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item justify-content-between align-items-center">
                     Garments/Textile
                      <span class="badge badge-primary badge-pill">1</span>
                    </li>
                  </ul>
                <h6 class="mt-4">Locations</h6>
                <ul class="list-group">
                    <li class="list-group-item justify-content-between align-items-center">
                      Dhaka
                      <span class="badge badge-primary badge-pill">261</span>
                    </li>
                    <li class="list-group-item justify-content-between align-items-center">
                      Khulna
                      <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item justify-content-between align-items-center">
                      Chattagram
                      <span class="badge badge-primary badge-pill">1</span>
                    </li>
                  </ul>
              </div>
              
            </div>
            <div class="col-lg-8">
              <div class="card" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">Software Engineer</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Enosis Solutions</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link"><button class="btn btn-sm btn-outline-primary stretched-link"> Apply </button></a>
                    <a href="#" class="card-link"><button class="btn btn-sm btn-outline-success"> Save </button></a>
                  </div>
              </div>
              <div class="card mt-3" style="width: 100%;">
                <div class="card-body">
                  <h5 class="card-title">Software Engineer</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Brain Station-23</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link"><button class="btn btn-sm btn-outline-primary"> Apply </button></a>
                  <a href="#" class="card-link"><button class="btn btn-sm btn-outline-success"> Save </button></a>
                </div>
              </div>
              <div class="card mt-3" style="width: 100%;">
                <div class="card-body">
                  <h5 class="card-title">Software Engineer</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Brain Station-23</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link"><button class="btn btn-sm btn-outline-primary"> Apply </button></a>
                  <a href="#" class="card-link"><button class="btn btn-sm btn-outline-success"> Save </button></a>
                </div>
              </div>
              <div class="card mt-3" style="width: 100%;">
                <div class="card-body">
                  <h5 class="card-title">Software Engineer</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Brain Station-23</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link"><button class="btn btn-sm btn-outline-primary"> Apply </button></a>
                  <a href="#" class="card-link"><button class="btn btn-sm btn-outline-success"> Save </button></a>
                </div>
              </div>
            </div>
            
          </div>
        </div>

    </body>
</html>
