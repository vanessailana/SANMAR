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
                        <a href="{{ url('/tenants/create') }}">Add A Tenant</a>

                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                       
                    @endauth
                </div>
            @endif


@auth
<h1>View All The Tenants</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Tenant Name</td>
            <td>Tenant Last Name</td>
            <td>Email</td>
            <td>Phone number</td>
            <td>Currently At</td>
        </tr>
    </thead>
    <tbody>
    @foreach($nerds as $key => $value)
        <tr>
            <td>{{ $value->tenant_name }}</td>
            <td>{{ $value->tenant_lastname }}</td>
            <td>{{ $value->tenant_email }}</td>
            <td>{{ $value->phone_number}}</td>
            <td>{{ $value->currentlyat}}</td>
            <!-- we will also add show, edit, and delete buttons -->
            <td>

            

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->

                  {{ Form::open(array('url' => 'tenants/' . $value->id, 'class' => 'pull-right')) }}

                    {{ Form::hidden('_method', 'DELETE') }}


                    {{ Form::submit('Delete this Tenant', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}


                <a class="btn btn-small btn-info" href="{{ URL::to('tenants/' . $value->id . '/edit') }}">Edit this Tenant</a>

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