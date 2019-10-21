@extends('layouts.app')

@section('content')
    <h1>Airport List</h1>
    @if(count($airports) > 0)
        @foreach($airports as $airports)
            <div class="well">
                <h3>Airport code: {{$airports->code}}</h3>
                <p>City code: {{$airports->city_code}},</p>
                <p>Name: {{$airports->name}},</p>
                <p>city: {{$airports->city}},</p>
                <p>Country code: {{$airports->country_code}},</p>
                <p>Region code: {{$airports->region_code}},</p>
                <p>Latitude: {{$airports->latitude}},</p>
                <p>Longitude: {{$airports->longitude}},</p>
                <p>Timezone: {{$airports->timezone}}</p>
            </div>
        @endforeach
    @else
        <p>No Airports have been found</p>
    @endif
@endsection