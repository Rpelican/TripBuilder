@extends('layouts.app')

@section('content')
    <h1>Flight List</h1>
    @if(count($flights) > 0)
        @foreach($flights as $flights)
            <div class="well">
                <h3>Airline: {{$flights->airline_code}}</h3>
                <p>Flight number: {{$flights->number}},</p>
                <p>Aiport Departure: {{$flights->departure_airport_code}},</p>
                <p>Departure time: {{$flights->departure_time}},</p>
                <p>Airport Arrival: {{$flights->arrival_airport_code}},</p>
                <p>Arrival time: {{$flights->arrival_time}},</p>
                <p>Price:  ${{$flights->price}}</p>
            </div>
        @endforeach
    @else
        <p>No Flights have been found</p>
    @endif
@endsection