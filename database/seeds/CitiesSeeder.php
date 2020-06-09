<?php

use App\City;
use App\State;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            [
                'city_name' => 'Mumbai',
                'state_id'  => State::where('state_name', 'Maharashtra')->first()->id,
            ],
            [
                'city_name' => 'Thane',
                'state_id'  => State::where('state_name', 'Maharashtra')->first()->id,
            ],
            [
                'city_name' => 'Pune',
                'state_id'  => State::where('state_name', 'Maharashtra')->first()->id,
            ],
            [
                'city_name' => 'Delhi',
                'state_id'  => State::where('state_name', 'Delhi')->first()->id,
            ],
        ]);
    }
}
