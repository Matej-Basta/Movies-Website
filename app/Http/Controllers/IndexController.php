<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    function index()
    {
        $query = "
            SELECT *
            FROM `movies`
            ORDER BY `rating` DESC
            LIMIT 10
        ";

        $top_movies = DB::select($query);

        
        $top_movies_view = view("index.index", [
            "top_movies" => $top_movies,
        ]);

        return $top_movies_view;
    }
}
