<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;


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
            'city' => 'Breda',
            'zipcode' => '4826AA',
            'firstname' => 'Jantje',
            'lastname' => 'Klaassen',
            'email' => 'jantjeklaassen@gmail.com',
            'address' => 'Terheijdenseweg 350',
            'birth_date' => '1900-01-01',
            'phone' => '0612345678',
            'user_id' => User::inRandomOrder()->first()->id
        ]);





    }
}
