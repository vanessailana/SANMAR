<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Hello there</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
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

<h1> Property Info</h1>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">

                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/leases/create') }}">Create new Entry About A Property</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                       
                    @endauth
                </div>
            @endif


@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered"> @auth
    <thead>
        <tr>
            <td>property</td>
            <td>lease amount</td>
            <td>lease_expiration</td>
            <td>Security Deposit</td>
            <td>Last Month</td>
            <td>Grace Period</td>
            <td>Late Payment Fee</td>
             <td>Next Rental Increase</td>
              <td>Increase Amount</td>
        </tr>
    </thead>
    <tbody>
    @foreach($nerds as $key => $value)
        <tr>
            <td>{{ $value->property }}</td>
            <td>{{ $value->lease_amount}}</td>
            <td>{{ $value->lease_expiration}}</td>
            <td>{{ $value->secruity_deposit }}</td>
             <td>{{ $value->last_month }}</td>
             <td>{{ $value->grace_period }}</td>
             <td>{{ $value->late_payment_fee }}</td>
              <td>{{ $value->next_rental_increase }}</td>
              <td>{{ $value->increase_amount }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                  {{ Form::open(array('url' => 'leases/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('leases/'. $value->id.'/edit') }}">Edit</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@else
<h1> Unauthorized</h1>

@endauth
</div>
</body>
</html>