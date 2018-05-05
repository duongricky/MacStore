<?php

use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$limit = 30;
    	$faker = Faker\Factory::create();
    	for ($i = 0; $i <= $limit; $i++) {
    		DB::table('customers')->insert([
          'first_name'     => $faker->firstName,
          'last_name'      => $faker->lastName,
          'address'        => $faker->address,
          'email'          => $faker->email,
          //rand(0,1):random 2 số từ 0 đến 1
          'gender'         => rand(0,1),
          'login_username' =>$faker->userName,
          'login_password' =>md5(123456),
    		]);
    	}
    }
  }
