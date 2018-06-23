<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Coffee;
use App\Models\Order;

class CoffeeController extends Controller
{
    public function index() {
	
	$coffees = DB::table('coffees')->get();
	
	return view('coffee', ['coffees' => $coffees]);
    }
    
    public function summary(){
	$data['order'] = request()->all();
	
	$data['order']['coffee'] = Coffee::find($data['order']['coffee']);
	$data['order']['milk'] = isset($data['order']['milk']) ? $data['order']['milk'] : 0;
	$data['order']['sugar'] = isset($data['order']['sugar']) ? $data['order']['sugar'] : 0;
	
	return view('summary', $data);
    }
    
    public function store() {
	$data = request()->all();
	
	$order = [
	    'coffee_id' => $data['coffee'],
	    'milk' => $data['milk'],
	    'sugar' => $data['sugar']
	];
	
	Order::create($order);
	
	return redirect('coffee');
    }
}
