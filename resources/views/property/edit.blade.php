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
                        <a href="{{ url('/property') }}">Property Information</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                       
                    @endauth
                </div>
            @endif



<h1>Add Information About A Property</h1>

<h1>Edit {{ $nerd->property }}  {{ $nerd->tenant_lastname }}</h1>


{{ Form::model($nerd, array('route' => array('property.update', $nerd->id), 'method' => 'PUT')) }}


    <div class="form-group">
        {{ Form::label('property', 'Property') }}
        {{ Form::text('property', null, array('class' => 'form-control')) }}
    </div>
     
        <div class="form-group">
        {{ Form::label('unit', 'Unit') }}
        {{ Form::text('unit', null, array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('unit_type', 'Unit Type') }}
       {{ Form::text('unit_type', null, array('class' => 'form-control')) }}
    </div>
     
        <div class="form-group">
        {{ Form::label('SF', 'SF') }}
        {{ Form::text('SF', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Currentrent', 'Currentrent') }}
        {{ Form::text('Currentrent', null, array('class' => 'form-control')) }}
    </div>

       <div class="form-group">
        {{ Form::label('lease_starts', 'lease_starts') }}
        {{ Form::text('lease_starts', null, array('class' => 'form-control')) }}
    </div>

      <div class="form-group">
        {{ Form::label('lease_termination', 'lease_termination') }}
        {{ Form::text('lease_termination', null, array('class' => 'form-control')) }}
    </div>

      <div class="form-group">
        {{ Form::label('increases', 'increases') }}
      {{ Form::text('increases', null, array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('expenses', 'expenses') }}
        {{ Form::text('expenses', null, array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('remarks', 'remarks') }}
        {{ Form::text('remarks', null, array('class' => 'form-control')) }}
    </div>
     
     
     
     
     
     
     
  
    {{ Form::submit('Updated!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}




</div>
</body>
</html>