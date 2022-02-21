<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideogameController extends Controller
{
    
    function topRated()
    {
        $id = DB::selectOne("
            SELECT `id`
            FROM `movie_types`
            WHERE `slug` = 'game'
            LIMIT 1
        ");

        $page_nr = $_GET["page"] ?? 1;

        $offset = ($page_nr - 1) * 10;

        $results = DB::select("
            SELECT `name`
            FROM `movies`
            WHERE `movie_type_id` = {$id->id}
            ORDER BY `rating` DESC
            LIMIT {$offset}, 10       
        ");

        return view("games.top-rated", [
            "games" => $results,
        ]);
    }
}
