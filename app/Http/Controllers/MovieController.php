<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    function topRated()
    {

        $results = DB::select("
        SELECT *
        FROM `movies`
        WHERE `movies`.`movie_type_id` = 1
        ORDER BY `rating` DESC
        LIMIT 50
        ");
        
        $top_rated_movies = view("movies.top-rated", [
            "movies" => $results,
        ]);

        return $top_rated_movies;
    }
}
