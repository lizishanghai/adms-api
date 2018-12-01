<?php

use Illuminate\Database\Seeder;
use App\Models\Sales;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Sales::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Sales::create([
                'carId' => $faker->numberBetween($min = 1, $max = 50),
                'customerId' => implode(",", $faker->randomElements($array = array ('1','2','3','4','5','6','7','8','9'), $count = 3)),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

            ]);
        }
    }
}
