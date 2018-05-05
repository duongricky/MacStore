<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(ProductDetailSeeder::class);
        $this->call(AdminsSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(RatingsSeeder::class);
        $this->call(PaymentsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(OrderItemsSeeder::class);
    }
}
