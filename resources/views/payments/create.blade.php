<html>
<head>
   
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
   <title> Hello there</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>


      

   
   

    <style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
        border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
    </style>
</head>
<body>

    
    @if (Route::has('login'))
                <div class="top-right links">

                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/accounts') }}">Accounts</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                       
                    @endauth
                </div>
            @endif


@auth
<h1>Add Payment Invoice Information</h1>

{{ Form::open(array('url' => 'accounts')) }}

    <div class="form-group">
        {{ Form::label('property', 'Property') }}
        {{ Form::text('property', Input::old('property'), array('class' => 'form-control')) }}
    </div>
     
        <div class="form-group">
        {{ Form::label('company', 'Company') }}
        {{ Form::text('company', Input::old('company'), array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('rents_to_collect', 'Rents to Collect') }}
        {{ Form::text('rents_to_collect', Input::old('rents_to_collect'), array('class' => 'form-control')) }}
    </div>
     
        <div class="form-group">
        {{ Form::label('January', 'January') }}
        {{ Form::text('January', Input::old('January'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('February', 'February') }}
        {{ Form::text('February', Input::old('February'), array('class' => 'form-control')) }}
    </div>

       <div class="form-group">
        {{ Form::label('March', 'March') }}
        {{ Form::text('March', Input::old('March'), array('class' => 'form-control')) }}
    </div>

      <div class="form-group">
        {{ Form::label('April', 'April') }}
        {{ Form::text('April', Input::old('April'), array('class' => 'form-control')) }}
    </div>

      <div class="form-group">
        {{ Form::label('May', 'May') }}
        {{ Form::text('May', Input::old('May'), array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('June', 'June') }}
        {{ Form::text('June', Input::old('June'), array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('July', 'July') }}
        {{ Form::text('July', Input::old('July'), array('class' => 'form-control')) }}
    </div>
     
      <div class="form-group">
        {{ Form::label('August', 'August') }}
        {{ Form::text('August', Input::old('August'), array('class' => 'form-control')) }}
    </div>
     
      <div class="form-group">
        {{ Form::label('September', 'September') }}
        {{ Form::text('September', Input::old('September'), array('class' => 'form-control')) }}
    </div>
     
       <div class="form-group">
        {{ Form::label('October', 'October') }}
        {{ Form::text('October', Input::old('October'), array('class' => 'form-control')) }}
    </div>

      <div class="form-group">
        {{ Form::label('November', 'November') }}
        {{ Form::text('November', Input::old('November'), array('class' => 'form-control')) }}
    </div>

      <div class="form-group">
        {{ Form::label('December', 'December') }}
        {{ Form::text('December', Input::old('December'), array('class' => 'form-control')) }}
    </div>
     
     
     
     
  
    {{ Form::submit('Create A Entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@else
 <h1> You are not authorized to view this page</h1>

@endauth