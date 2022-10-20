<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Event::create([
            'name' => 'Event 1',
            'address' => 'straat',
            'zipcode' => '1212SD',
            'city' => 'Breda',
            'start_date' => '2022-10-13 12:34:58',
            'end_date' => '2022-10-13 12:34:58',
            'capacity' => '200',
            'price' => '300'
        ]);

        Event::create([
            'name' => 'Event 2',
            'address' => 'straat',
            'zipcode' => '1212SD',
            'city' => 'Breda',
            'start_date' => '2022-10-13 12:34:58',
            'end_date' => '2022-10-13 12:34:58',
            'capacity' => '200',
            'price' => '300'
        ]);

        Event::create([
            'name' => 'Event 3',
            'address' => 'straat',
            'zipcode' => '1212SD',
            'city' => 'Breda',
            'start_date' => '2022-10-13 12:34:58',
            'end_date' => '2022-10-13 12:34:58',
            'capacity' => '200',
            'price' => '300'
        ]);

    }
}
