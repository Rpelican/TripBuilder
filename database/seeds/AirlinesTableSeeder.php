<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AirlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //inserting dummy data for airlines
        DB::table('airlines')->insert([
            'code' => 'AC',
            'name' => 'Air Canada',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
