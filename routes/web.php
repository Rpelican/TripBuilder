<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource ('Airline', 'AirlinesController');
Route::resource ('Airport', 'AirportsController');
Route::resource ('Flight', 'FlightsController');
Route::get('/viewOneWay','FlightsController@viewOneWay');
Route::get('/viewRoundTrip','FlightsController@viewRoundTrip' );