<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    
    public function index() {
        echo 'estot mostrando todas las notas';
    }
    
    public function show($note) {
        echo 'estoy mostrandop la nota '.$note;
    }
}
