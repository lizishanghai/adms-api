<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Customer::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Customer::create([
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'mobile' => $faker->phoneNumber,
                'email' => $faker->email,
                'gender' => array_random(['Male', 'Female']),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

            ]);
        }
    }
}


