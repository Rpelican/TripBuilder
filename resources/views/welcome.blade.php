<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trip Builder</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Trip Builder
                </div>

                <div class="links">
                    <a href="/Airline">Airline List</a>
                    <a href="/Airport">Airport List</a>
                    <a href="/Flight">Flight List</a>
                </div>

                <div>
                    <h2>Search a trip</h2>
                    <form action="/viewOneWay" method="get">
                        <div>
                            <input type="search" name="departure" Value="Departure Location">
                            <input type="search" name="arrival" Value="Arrival Location">
                            <input type="datetime-local" name="date" Value="Departure Date">
                            <br>
                            <button name="view" type="submit" value="oneWay">One Way Trip</button>
                            <button name="view" type="submit" value="twoWay">Round Trip</button>
                        </div>
                    </form>

                    {{ $errors->first('departure')}}
                    {{ $errors->first('arrival')}}
                    {{ $errors->first('date')}}
                </div>
            </div>
        </div>
    </body>
</html>
