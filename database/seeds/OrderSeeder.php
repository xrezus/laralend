<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	for ($i=0; $i < 5; $i++) { 

			$faker = Faker\Factory::create();

	    	DB::table('orders')->insert([
		        'name' => $faker->name,
		        'email' => $faker->unique()->safeEmail,
		        'phone' => $faker->phoneNumber,
	        ]);

    	}

    }
}
