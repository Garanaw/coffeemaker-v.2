<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('orders', function(Blueprint $table)
	{
	    $table->increments('id');

	    $table->integer('coffee_id');
	    $table->foreign('coffee_id')->references('id')->on('coffees');

	    $table->integer('milk')->unsigned();
	    $table->integer('sugar')->unsigned();
	    
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
	Schema::drop('orders');
    }

}
