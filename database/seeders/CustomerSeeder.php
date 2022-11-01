<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'firstname' => 'Piet',
            'lastname' => 'Hein',
            'city' => 'Breda',
            'zipcode' => '4826AA',
            'address' => 'Terheijdenseweg 350',
            'birth_date' => '1900-01-01',
            'phone' => '0612345678',
            'user_id' => '1'
        ]);
    }
}
