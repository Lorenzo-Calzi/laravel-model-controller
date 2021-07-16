<?php

namespace App\Http\Controllers;

use App\Movie;

class PageController extends Controller
{
    public function index()
    {   
        $movies = Movie::all();

        

        return view('movies.home', compact('movies'));
    }
}





/* 
foreach($movies as $movie){

    ?>
    <div class="container">
        <div class="card">
            <h3> <?php echo $movie->title;?> </h3>
            <h5> <?php echo $movie->original_title;?> </h5>
            <span> <?php echo $movie->nationality;?> </span>
            <span> <?php echo $movie->date;?> </span>
            <strong> <?php echo $movie->vote;?> </strong>
            
        </div>
    </div>
    <?php
} */