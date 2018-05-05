<?php

use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 20 ; $i++) { 
    		DB::table('orders')->insert([
				'customer_id' => rand(0,30)
	    	]);
    	}
    }
  }
