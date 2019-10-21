<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\Airport;

class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::all(); 
        return view('internals.Flight')->with('flights', $flights);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Get one way flight if tripType is oneWay
     * Get first first of round trip if tripType is twoWay
     * 
     * @return \Illuminate\Http\Response
     */
    public function viewOneWay()
    {
        $data = request()->validate
        ([
           'departure' => 'required',
           'arrival' => 'required',
           'date' => 'required',
        ]);
            
      $departure = request('departure');
      $arrival = request('arrival');
      $departureDate = request('date');
      $tripType = request('view');
      
      $departureResult = Airport::where('city', $departure)->get();
      $arrivalResult = Airport::where('city', $arrival)->get();

      if($departureResult -> isEmpty())
      {
        echo "Depart location does not exist";
        return;
      }  
      if($arrivalResult -> isEmpty())
      {
        echo "Arrival location does not exist";
        return;
      }
        
      foreach ($departureResult as $departureResult) 
        {
           $departureAirportCode = $departureResult->code;
        }

        foreach ($arrivalResult as $arrivalResult) 
        {
           $arrivalAirportCode = $arrivalResult->code;
        }

        $flightResults = Flight::where('departure_airport_code', $departureAirportCode)
        ->where('arrival_airport_code', $arrivalAirportCode)
        ->where('departure_time', '>' , $departureDate)->get();

        if($flightResults-> isEmpty())
        {
            echo "There are no available flights";
        }
        else
        {
            return view('internals.trip')->with('flightResults', $flightResults)
            ->with('tripType', $tripType);
        }
      }

    /**
     * Get second flight for requested round trip
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function viewRoundTrip()
    {
        $tripId = request('tripId');
        $tripType = 'final';

        $departureFlight = Flight::where('id', $tripId)->get();

        foreach ($departureFlight as $departureFlight) 
        {
           $arrivalTime = $departureFlight->arrival_time;
           $departureLocation = $departureFlight->departure_airport_code;
           $arrivalLocation = $departureFlight->arrival_airport_code;
           $firstFlightPrice = $departureFlight->price;
        }

        $roundFlight = Flight::where('departure_airport_code', $arrivalLocation)
        ->where('arrival_airport_code', $departureLocation)
        ->where('departure_time', '>', $arrivalTime)->get();

        return view('internals.trip')->with('flightResults', $roundFlight)
        ->with('tripType', $tripType)
        ->with('firstFlightPrice', $firstFlightPrice);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
