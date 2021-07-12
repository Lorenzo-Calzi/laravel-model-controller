<?php

namespace App\Http\Controllers;

use App\Movie;

class PageController extends Controller
{
    public function index()
    {   
        $movies = Movie::all();

        ?>
        <div class="title">
            <i class="fas fa-film"></i>
            <h1>FIlm ora al cinema</h1>
            <i class="fas fa-film"></i>
        </div>

        <div class="container">
            <?php 
                foreach($movies as $movie){ ?>
                    <div class="card">
                        <h3> <?php echo $movie->title;?> </h3>
                        <h5> <?php echo $movie->original_title;?> </h5>
                        <span> <?php echo $movie->nationality;?> </span>
                        <span> <?php echo $movie->date;?> </span>
                        <strong> <?php echo $movie->vote;?> </strong> 
                    </div>
                <?php }
            ?>
        </div>
        <?php

        return view('movies.home');
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