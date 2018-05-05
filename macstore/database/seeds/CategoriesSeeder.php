<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
    	DB::table('admins')->insert([
    		['category_name' => 'macbook'],
    		['category_name' => 'macbook_pro'],
    		['category_name' => 'macbook_air']
    	]);
    }
}
