<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //inserting dummy data for flights
        DB::table('flights')->insert([
            'airline_code' => 'AC',
            'number' => '301',
            'departure_airport_code' => 'YUL',
            'departure_time' => Carbon::create(2019, 11, 05, 7, 35, 0, 'America/Montreal'),
            'arrival_airport_code' => 'YVR',
            'arrival_time' => Carbon::create(2019, 11, 05, 10, 05, 0, 'America/Vancouver'),
            'price' => 273.25,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('flights')->insert([
            'airline_code' => 'AC',
            'number' => '302',
            'departure_airport_code' => 'YVR',
            'departure_time' => Carbon::create(2019, 11, 05, 11, 30, 0, 'America/Vancouver'),
            'arrival_airport_code' => 'YUL',
            'arrival_time' => Carbon::create(2019, 11, 05, 19, 11, 0, 'America/Montreal'),
            'price' =>220.63,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('flights')->insert([
            'airline_code' => 'AC',
            'number' => '303',
            'departure_airport_code' => 'YVR',
            'departure_time' => Carbon::create(2019, 11, 25, 9, 10, 0, 'America/Vancouver'),
            'arrival_airport_code' => 'YUL',
            'arrival_time' => Carbon::create(2019, 11, 25, 17, 50, 0, 'America/Montreal'),
            'price' =>220.63,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('flights')->insert([
            'airline_code' => 'AC',
            'number' => '304',
            'departure_airport_code' => 'LCY',
            'departure_time' => Carbon::create(2020, 02, 25, 9, 10, 0, 'Europe/London'),
            'arrival_airport_code' => 'YUL',
            'arrival_time' => Carbon::create(2020, 02, 25, 12, 50, 0, 'America/Montreal'),
            'price' =>350.63,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('flights')->insert([
            'airline_code' => 'AC',
            'number' => '305',
            'departure_airport_code' => 'YUL',
            'departure_time' => Carbon::create(2020, 03, 10, 6, 30, 0, 'America/Montreal'),
            'arrival_airport_code' => 'LCY',
            'arrival_time' => Carbon::create(2020, 03, 10, 18, 40, 0, 'Europe/London'),
            'price' =>380.63,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('flights')->insert([
            'airline_code' => 'AC',
            'number' => '306',
            'departure_airport_code' => 'LCY',
            'departure_time' => Carbon::create(2020, 05, 03, 10, 30, 0, 'Europe/London'),
            'arrival_airport_code' => 'YUL',
            'arrival_time' => Carbon::create(2020, 05, 03, 22, 40, 0, 'America/Montreal'),
            'price' =>380.63,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
