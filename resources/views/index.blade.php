@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Search | Opportunity</title>

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
          #categories li > a
          {
            font-size: 14px;
          }
        </style>

    </head>
    <body>

        <div class="row" style="margin-top: 5%;">
          <div class="container-fluid" style="padding: 3%; width: 80%; ">
            <div class="card" style="border:none; background-color:transparent ">
            <div class="card-body">
              <div class="form-row">
                <div class="form-group">
                  <h3 style="text-align: center; ">Find Your Opportunity in Bangladesh</h3>
                </div>
              </div>
               <div class="form-row shadow p-4" style="">
                <div class="form-group col-md-6">
                  <label><b>What</b></label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Job title, key word or company">
                </div>
                <div class="form-group col-md-4">
                  <label><b>Where</b></label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="Location">
                </div>
                <div class="form-group col-md-2">
                   <label>&nbsp;</label>
                  <button type="submit" class="btn btn-primary mb-2 form-control" style="border-radius: 0px;"><b>Find Jobs</b></button>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="container-fluid" id="about" style="padding: 4%; text-align: center">
            <p style="font-family: ; font-weight: bold">Opportunity helps people to get jobs and hire employee</p>
          </div>
          <div class="container-fluid" id="categories" style="padding: 2%; width:%; padding-left: 4%; list-style: none; text-decoration: none;">
            <h6>Browse Categories</h6>
            <div class="row">
              <div class="col-lg-3">
                <li><a href="/">Accounting/Finance</a></li>
                <li><a href="/">IT & Telecommunication (411)</a></li>
                <li><a href="/">Garments/Textile (448)</a></li>
              </div>
              <div class="col-lg-3">
                <li><a href="/">Accounting/Finance</a></li>
                <li><a href="/">IT & Telecommunication (411)</a></li>
                <li><a href="/">Garments/Textile (448)</a></li>
              </div>
              <div class="col-lg-3">
                <li><a href="/">Marketing/Sales (642)</a></li>
                <li><a href="/">HR/Org. Development (116)</a></li>
                <li><a href="/">NGO/Development (248)</a></li>
              </div>
              <div class="col-lg-3">
                <li><a href="/">Commercial/Supply Chain (146)</a></li>
                <li><a href="/">Accounting/Finance</a></li>
                <li><a href="/">Accounting/Finance</a></li>
              </div>
            </div>
          </div>
          <div class="container-fluid" id="categories" style="padding-left: 4%; list-style: none; text-decoration: none;">
            <hr>
            <h6>Divisional Jobs</h6>
            <div class="row">
              <div class="col-lg-2">
                <li><a href="/">Dhaka</a></li>
                <li><a href="/">Khulna</a></li>
                <li><a href="/">Chattagram</a></li>
              </div>
              <div class="col-lg-2">
                <li><a href="/">Sylhet (411)</a></li>
                <li><a href="/">Barisal</a></li>
                <li><a href="/">Rangpur (116)</a></li>
              </div>
              <div class="col-lg-2">
                <li><a href="/">Rajshahi</a></li>
                <li><a href="/">Mymensingh (248)</a></li>
              </div>
            </div>
          </div>
          <div class="container-fluid" id="categories" style="padding: 2%; width:%; padding-left: 4%; list-style: none; text-decoration: none;">
            <hr>
            <h6>Browse Industries</h6>
            <div class="row">
              <div class="col-lg-3">
                <li><a href="/">Accounting/Finance</a></li>
                <li><a href="/">IT & Telecommunication (411)</a></li>
                <li><a href="/">Garments/Textile (448)</a></li>
              </div>
              <div class="col-lg-3">
                <li><a href="/">Accounting/Finance</a></li>
                <li><a href="/">IT & Telecommunication (411)</a></li>
                <li><a href="/">Garments/Textile (448)</a></li>
              </div>
              <div class="col-lg-3">
                <li><a href="/">Marketing/Sales (642)</a></li>
                <li><a href="/">HR/Org. Development (116)</a></li>
                <li><a href="/">NGO/Development (248)</a></li>
              </div>
              <div class="col-lg-3">
                <li><a href="/">Commercial/Supply Chain (146)</a></li>
                <li><a href="/">Accounting/Finance</a></li>
                <li><a href="/">Accounting/Finance</a></li>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>
@endsection
