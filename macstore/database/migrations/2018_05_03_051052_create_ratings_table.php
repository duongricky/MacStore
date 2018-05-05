<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ratings', function ($table) {
        $table->increments('id');
        $table->integer('customer_id')->unsigned();
        $table->foreign('customer_id')->references('id')->on('customers');
        $table->integer('stars')->default(0);
        $table->text('content');
        $table->timestamps();
      });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('ratings');
    }
  }
