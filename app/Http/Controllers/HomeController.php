<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index(){

        //$dato = 'primo valore';
        //$dato1 = 'secondo valore';
        //$dato2 = 'terzo valore';


        //return view('home', compact('dato', 'dato1', 'dato2'));

        // SELECT * FROM books


        $allmovies = Movie::all();

        //dump($allmovies);

        return view('home', compact('allmovies'));

        
    }
}
