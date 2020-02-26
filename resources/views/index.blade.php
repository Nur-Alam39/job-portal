@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Opportunity</title>

        <style type="text/css">
          body
          {
            background-color: rgb(253, 253, 253); 
          }
          a.card, a.card:hover {
            color: inherit;
          }
          .dropdown:hover>.dropdown-menu {
            display: block;
          }

          .dropdown>.dropdown-toggle:active {
            pointer-events: none;
          }
          #inputEmail4, #inputPassword4
          {
            border:none;
            border-bottom:solid 1px #cccccc;
            border-radius: 0px;
          }
        </style>

    </head>
    <body>

        <div class="container-fluid p-2" style="margin-top: 6%">
          <div class="container-fluid" style="padding: 3%; width: 80%">
            <div class="card" style="border:none; background-color:transparent ">
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-8">
                  <h5>Find Your Opportunity</h5>
                </div>
              </div>
               <div class="form-row" style="">
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Job title">
                </div>
                <div class="form-group col-md-4">
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Location">
                </div>
                <div class="form-group col-md-2">
                  <button type="submit" class="btn btn-primary mb-2 form-control">Search</button>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="container-fluid" style="background-color:; padding: 2%">
           
          </div>
        </div>
    </body>
</html>
@endsection
