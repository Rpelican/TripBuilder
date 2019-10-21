<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //inserting dummy data for airports
        DB::table('airports')->insert([
            'code' => 'YUL',
            'city_code' => 'YMQ',
            'name' => 'Pierre Elliott Trudeau International',
            'city' => 'Montreal',
            'country_code' => 'CA',
            'region_code' => 'QC',
            'latitude' => 45.457714,
            'longitude' => -73.749908,
            'timezone' => 'America/Montreal',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('airports')->insert([
            'code' => 'YVR',
            'city_code' => 'YVR',
            'name' => 'Vancouver International',
            'city' => 'Vancouver',
            'country_code' => 'CA',
            'region_code' => 'BC',
            'latitude' => 49.194698,
            'longitude' => -123.179192,
            'timezone' => 'America/Vancouver',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('airports')->insert([
            'code' => 'LCY',
            'city_code' => 'LON',
            'name' => 'London City Airport',
            'city' => 'London',
            'country_code' => 'UK',
            'region_code' => 'SE',
            'latitude' => 51.5048,
            'longitude' => 0.0495,
            'timezone' => 'Europe/England',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
