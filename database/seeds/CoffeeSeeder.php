<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	DB::table('coffees')->truncate();
	foreach($this->getCoffeeArray() as $coffee){
	    DB::table('coffees')
		    ->insert($coffee);
	}
    }
    
    private function getCoffeeArray(){
	return [
	    [
		'name' => 'White Coffee',
		'price' => '2.00'
	    ],
	    
	    [
		'name' => 'Black Coffee',
		'price' => '1.50'
	    ],
	    
	    [
		'name' => 'Americano',
		'price' => '1.50'
	    ],
	    
	    [
		'name' => 'Latte',
		'price' => '2.50'
	    ],
	    
	    [
		'name' => 'Capuccino',
		'price' => '3.00'
	    ],
	    [
		'name' => 'Coffee with Bayleys',
		'price' => '3.50'
	    ]
	];
    }
}


/*
 * White Coffee 	2.00
 2 Black Coffee 	1.50
 3 Americano		1.50
 4 Latte		2.50
 5 Capuccino		3.00
 */