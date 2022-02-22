<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class MovieController extends Controller
{
    //a list of movies (top 50)
    public function index()
    {
        $query_builder = Movie::query();
        $query_builder->orderBy("rating", "desc");
        $query_builder->limit(50);
        $query_builder->where("movie_type_id", 1);
        $query_builder->where("votes_nr", ">", 5000);

        $movie = $query_builder->first();

        // dd($movie);

        return view("movies.index", compact("movie"));
    }

    // public function index()
    // {
    //     $query_builder = Movie::query();
    //     $query_builder->orderBy("rating", "desc");
    //     $query_builder->limit(50);
    //     $query_builder->where("movie_type_id", 1);
    //     $query_builder->where("votes_nr", ">", 5000);

    //     $movies = $query_builder->get();

    //     return view("movies.index", compact("movies"));
    // }
    
    function topRated()
    {   
        $page_nr = $_GET["page"] ?? 1;
        $offset = ($page_nr - 1) * 10;

        $results = DB::select("
        SELECT *
        FROM `movies`
        WHERE `movies`.`movie_type_id` = 1
        ORDER BY `rating` DESC
        LIMIT {$offset}, 10
        ");
        
        $top_rated_movies = view("movies.top-rated", [
            "movies" => $results,
        ]);

        return $top_rated_movies;
    }
}
