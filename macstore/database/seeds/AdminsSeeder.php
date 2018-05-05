<?php

use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('admins')->insert([
    		['username' => 'admin_ricky','email'=>'duongricky113@gmail.com','password'=>md5(123456)],
    		['username' => 'admin_tony','email'=>'tuantai123@gmail.com','password'=>md5(123456)],
    	]);
    }
}
