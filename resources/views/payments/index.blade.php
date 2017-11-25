

<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
   <head>
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
                        <a href="{{ url('/accounts/create') }}">Add An Account</a>

                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                       
                    @endauth
                </div>
            @endif


@auth
<h1>View Information About Property Payments</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Property</td>
            <td>Company</td>
            <td>Rents To Collect</td>
            <td>January</td>
            <td>February</td>
            <td>March</td>
            <td>April</td>
            <td>May</td>
             <td>June</td>
             <td> July</td>
             <td>August</td>
              <td>September</td>
              <td>October </td>
              <td>November </td>
              <td>December </td>
        </tr>
    </thead>
    <tbody>
    @foreach($nerds as $key => $value)
        <tr>
           
        <td>{{ $value->property}}</td> 
        <td>{{ $value->company}}</td>
        <td>{{ $value->rents_to_collect}}</td>  
         <td>{{ $value->January}}</td>   
<td>{{ $value->February}}</td>
<td>{{ $value->March}}</td>
<td>{{ $value->April}}</td>
<td>{{ $value->May}}</td>
<td>{{ $value->June}}</td>
<td>{{ $value->July}}</td>
<td>{{ $value->August}}</td>
<td>{{ $value->September}}</td>
<td>{{ $value->October}}</td>
<td>{{ $value->November}}</td>
<td>{{ $value->December}}

<td> 
                  {{ Form::open(array('url' => 'accounts/' . $value->id)) }}

                    {{ Form::hidden('_method', 'DELETE') }}


                    {{ Form::submit('Delete Account Entry', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}


                <a class="btn btn-small btn-info" href="{{ URL::to('accounts/' . $value->id . '/edit') }}">Edit Account Entry</a></td>


</td>
                
        </tr>
    @endforeach
    </tbody>
</table>
@else
<h1> You are not authorized to view this page. </h1>
@endauth
</div>
</body>
</html>