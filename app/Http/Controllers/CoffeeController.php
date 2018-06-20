<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function index() {
	
	$coffees = DB::table('coffees')->get();
	
	return view('coffee', ['coffees' => $coffees]);
    }
}
