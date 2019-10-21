@extends('layouts.app')

@section('content')
    @switch($tripType)
        @case("oneWay")
            <h1>Trip</h1>
            @foreach($flightResults as $flightResults)
                <div>
                    <h3>Airline: {{$flightResults->airline_code}}</h3>
                    <p>Flight number: {{$flightResults->number}},</p>
                    <p>Airport departure: {{$flightResults->departure_airport_code}},</p>
                    <p>Departure time: {{$flightResults->departure_time}},</p>
                    <p>Airport Arrival: {{$flightResults->arrival_airport_code}},</p>
                    <p>Arrival time: {{$flightResults->arrival_time}},</p>
                    <p>Price: ${{$flightResults->price}}</p>
                </div>
            @endforeach
        @break
        
        @case("final")
            <h1>Round Trip (second flight)</h1>    
            @foreach($flightResults as $flightResults)
                <div>
                    <h3>Airline: {{$flightResults->airline_code}}</h3>
                    <p>Flight number: {{$flightResults->number}},</p>
                    <p>Airport departure: {{$flightResults->departure_airport_code}},</p>
                    <p>Departure time: {{$flightResults->departure_time}},</p>
                    <p>Airport Arrival: {{$flightResults->arrival_airport_code}},</p>
                    <p>Arrival time: {{$flightResults->arrival_time}},</p>
                    <p>Price: ${{$flightResults->price}}</p>
                    <h3>Total Price: {{$firstFlightPrice + $flightResults->price}}</h3>
                </div>
            @endforeach
        @break    

    @default
        <h1>Round Trip (first flight)</h1>
            @foreach($flightResults as $flightResult)
            <div>
                <h3>Airline: {{$flightResult->airline_code}}</h3>
                <p>Flight number: {{$flightResult->number}},</p>
                <p>Airport departure: {{$flightResult->departure_airport_code}},</p>
                <p>Departure time: {{$flightResult->departure_time}},</p>
                <p>Airport Arrival: {{$flightResult->arrival_airport_code}},</p>
                <p>Arrival time: {{$flightResult->arrival_time}},</p>
                <p>Price: ${{$flightResult->price}}</p>
                <form action="/viewRoundTrip" method="get">
                    <button name="tripId" type="submit" value="{{$flightResult->id}}">View Round Trip</button>
                </form>
            </div>
            @endforeach
    @endswitch
@endsection