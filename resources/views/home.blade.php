@section('content')
@extends('layouts.app')


<!-- Admin UI requirements: -->
<!-- add/edit/delete accounts receivable -->
<!-- add/edit/delete accounts payable -->
<!-- add/edit/delete photos -->
<!-- email option -->

<!doctype html>
<html lang="en">
  <head>
    <title>Admin Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
  </head>
  <body>
    <!-- page banner -->
    <div class="jumbotron">
        <div class="container ">
            <h1>Administration Page</h1>            
        </div>
    </div>

    <!-- administration buttons -->
    <div class="container-fluid">
        <!-- top row of options -->
        <div class="row align-item-center">
            <!-- add/edit/delete properties -->
            <div class="col-md-4">
                <div class="card border-light h-100">
                    <img src="https://i.imgur.com/JUPgzwZ.png" class="img-fluid" alt="Card image cap" id="cardImg">
                    <div class="card-body">
                        <p class="card-text">
                            Add/Edit/Delete Properties
                            <button type="button" class="btn btn-secondary btn-lg btn-block">Properties</button>
                        </p>
                    </div>
                </div>
            </div>
            <!-- add/edit/delete property_info -->
            <div class="col-md-4">
                <div class="card border-light h-100">
                    <img src="https://i.imgur.com/JUPgzwZ.png" class="img-fluid" alt="Card image cap" id="cardImg">
                    <div class="card-body">
                        <p class="card-text">
                            Add/Edit/Delete Property Information
                            <button type="button" class="btn btn-secondary btn-lg btn-block">Property Information</button>
                        </p>
                    </div>
                </div>
            </div>
            <!-- add/edit/delete tenants -->
            <div class="col-md-4">
                <div class="card border-light h-100">
                    <img src="https://i.imgur.com/JUPgzwZ.png" class="img-fluid" alt="Card image cap" id="cardImg">
                    <div class="card-body">
                       <p class="card-text">
                           

                            <a href="{{ url('/tenants')}}" class="btn btn-secondary btn-lg btn-block" role="button"> Add, Delete, or Edit Tenant Information <i class="fa fa-user-circle-o" aria-hidden="true"></i></i> </a>




                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- bottom row of options -->
        <div class="row align-item-center">
            <!-- add/edit/delete accounts_payable -->
            <div class="col-md-4">
                <div class="card border-light h-100">
                    <img src="https://i.imgur.com/JUPgzwZ.png" class="img-fluid" alt="Card image cap" id="cardImg">
                    <div class="card-body">
                        <p class="card-text">
                            Add/Edit/Delete Accounts Payable
                            <button type="button" class="btn btn-secondary btn-lg btn-block">Accounts Payable</button>
                        </p>
                    </div>
                </div>
            </div>
            <!-- add/edit/delete accounts_receivable -->
            <div class="col-md-4">
                <div class="card border-light h-100">
                    <img src="https://i.imgur.com/JUPgzwZ.png" class="img-fluid" alt="Card image cap" id="cardImg">
                    <div class="card-body">
                        <p class="card-text">
                            Add/Edit/Delete Accounts Receivable
                            <button type="button" class="btn btn-secondary btn-lg btn-block">Accounts Receivable</button>
                        </p>
                    </div>
                </div>
            </div>
            <!-- add/edit/delete photos -->
            <div class="col-md-4">
                <div class="card border-light h-100">
                    <img src="https://i.imgur.com/JUPgzwZ.png" class="img-fluid" alt="Card image cap" id="cardImg">
                    <div class="card-body">
                        <p class="card-text">
                           

                            <a href="{{ url('/image-gallery')}}" class="btn btn-secondary btn-lg btn-block" role="button"> Add And Delete Property Images <i class="fa fa-user-circle-o" aria-hidden="true"></i></i> </a>


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
                <div class="card border-light h-100">
                    <img src="https://i.imgur.com/JUPgzwZ.png" class="img-fluid" alt="Card image cap" id="cardImg">
                    <div class="card-body">
                        <a href="{{ url('/contact-us')}}" class="btn btn-secondary btn-lg btn-block" role="button"> Send An Email <i class="fa fa-user-circle-o" aria-hidden="true"></i></i> </a>
                    </div>
                </div>
            </div>

   

@endsection
