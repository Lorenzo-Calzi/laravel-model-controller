<?php

namespace App\Http\Controllers;

use App\Movie;

class PageController extends Controller
{
    public function index()
    {   
        $movies = Movie::all();

        /* foreach($movies as $movie){
                echo $movie->title;
        } */
        $movies->title;

        return view('movies.home');
    }
}
