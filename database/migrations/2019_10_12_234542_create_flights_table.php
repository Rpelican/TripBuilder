<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('airline_code');
            $table->string('number');

            $table->string('departure_airport_code');
            $table->timestampTz('departure_time')->nullable();
           // $table->date('departure_date');

            $table->string('arrival_airport_code');
            $table->timestampTz('arrival_time')->nullable();;
           // $table->date('arrival_date');
            $table->decimal('price', 8, 2);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
