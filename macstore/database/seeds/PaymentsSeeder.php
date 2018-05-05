<?php

use Illuminate\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arrayTotal = array(15000000.00,17000000.00,25500000.00,28500000.00,33000000.00,45000000.00,26000000.00,29000000.00);
        for ($i=1; $i <= 15 ; $i++) {
    		DB::table('payments')->insert([
				'customer_id' => rand(0,30),
				'confirm'     => rand(0,1),
				'total'       => $arrayTotal[rand(0,7)]
	    	]);
    	}
    }
}
