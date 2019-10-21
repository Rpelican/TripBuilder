@extends('layouts.app')

@section('content')
    <h1>Airline List</h1>
    @if(count($airlines) > 0)
        @foreach($airlines as $airlines)
            <div class="well">
                <h3>Airline: {{$airlines->name}}</h3>
                <h4>Airline code: {{$airlines->code}}</h4>
            </div>
        @endforeach
    @else
        <p>No Airlines have been found</p>
    @endif
@endsection