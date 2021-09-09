<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $dato = 'primo valore';
        $dato1 = 'secondo valore';
        $dato2 = 'terzo valore';


        return view('home', compact('dato', 'dato1', 'dato2'));
    }
}
