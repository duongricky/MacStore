<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function ($table) {
            $table->increments('customer_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('address');
            $table->string('email');
            //Giới tính có 3 trường 0 là nữ, 1 là nam, 3 là bê đê
            $table->integer('gender')->default(0);
            $table->string('login_username');
            $table->string('login_password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
