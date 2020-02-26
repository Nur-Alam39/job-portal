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
            background-color: white; 
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
            border:solid 1px #cccccc;
            border-radius: 0px;
          }
          #about a, a:hover
          {
            text-decoration: underline;
          }
        </style>

    </head>
    <body>

        <div class="row" style="margin-top: 5%;">
          <div class="container-fluid" style="padding: 3%; width: 80%; 
            ">
            <div class="card" style="border:none; background-color:transparent ">
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-8">
                  <h3 style="color: ">Find Your Opportunity in Bangladesh</h3>
                </div>
              </div>
               <div class="form-row" style="">
                <div class="form-group col-md-6">
                  <label>What</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Job title, key word or company">
                </div>
                <div class="form-group col-md-4">
                  <label>Where</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Location">
                </div>
                <div class="form-group col-md-2">
                   <label>&nbsp;</label>
                  <button type="submit" class="btn btn-primary mb-2 form-control">Find Jobs</button>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="container-fluid" id="about" style="padding: 2%; text-align: center">
            <p>Opportunity helps people to get jobs and hire employee</p>
            <a href='/'>Opportunity is also in Bangla</a>
          </div>
        </div>
    </body>
</html>
@endsection
