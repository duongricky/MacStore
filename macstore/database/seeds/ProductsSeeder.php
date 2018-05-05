<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20 ; $i++) {
        	DB::table('products')->insert([
                'category_id' => rand(1,3),
                'rating_id'   => rand(1,20),
                'image'       => str_random(10).'.jpg'
            ]);
        }
    }
}
