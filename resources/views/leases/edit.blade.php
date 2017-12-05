<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
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
 @auth
        <h1> Edit  {{$nerd->property}}</h1>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">

                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                       
                    @endauth
                </div>
            @endif



<!-- if there are creation errors, they will show here -->


{{ Form::model($nerd, array('route' => array('leases.update', $nerd->id), 'method' => 'PUT')) }}


    <div class="form-group">

        {{ Form::label('property', 'Property') }}
       {{ Form::text('property', null, array('class' => 'form-control')) }}

    </div>

    <div class="form-group">
        {{ Form::label('lease_amount', 'Lease Amount') }}
        {{ Form::text('lease_amount', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lease_expiration', 'Lease Amount') }}
        
         {{ Form::text('lease_expiration', null, array('class' => 'form-control')) }}
    </div>

      <div class="form-group">
        {{ Form::label('secruity_deposit', 'Security Deposit') }}
        
         {{ Form::text('secruity_deposit', null, array('class' => 'form-control')) }}
    </div>




     <div class="form-group">
        {{ Form::label('last_month', 'Last Month') }}
         {{ Form::text('last_month', null, array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
        {{ Form::label('grace_period', 'Grace Period') }}
         {{ Form::text('grace_period', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('late_payment_fee', 'Late Payment Fee') }}
          {{ Form::text('late_payment_fee', null, array('class' => 'form-control')) }}
    </div>

      <div class="form-group">
        {{ Form::label('next_rental_increase', 'Next Rental Increase') }}
       
        {{ Form::text('next_rental_increase', null, array('class' => 'form-control')) }}
    </div>

      <div class="form-group">
        {{ Form::label('increase_amount', 'Increase Amount') }}
         {{ Form::text('increase_amount', null, array('class' => 'form-control')) }}
    </div>

{{ Form::submit('Update!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@else

<h1> Unauthorized page</h1>

@endauth
</div>
</body>
</html>