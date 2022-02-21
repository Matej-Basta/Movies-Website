<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
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
