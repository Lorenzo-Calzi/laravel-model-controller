@extends ('layout.app')


        <div class="title">
            <i class="fas fa-film"></i>
            <h1>FIlm ora al cinema</h1>
            <i class="fas fa-film"></i>
        </div>

        <div class="container">
            @foreach($movies as $movie)
                <div class="card">
                    <h3> {{$movie->title}} </h3>
                    <h5> {{$movie->original_title}} </h5>
                    <span> {{$movie->nationality}} </span>
                    <span> {{$movie->date}} </span>
                    <strong> {{$movie->vote}} </strong> 
                </div>
            @endforeach
        </div>