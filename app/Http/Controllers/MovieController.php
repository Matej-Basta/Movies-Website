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

        $results = $query_builder->get();

        dd($results);
    }
    
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

    function shawshank()
    {
        $movie = DB::selectOne("
            SELECT *
            FROM `movies`
            WHERE `name` LIKE '%shawshank%'
            LIMIT 1
        ");

        $cast = DB::select("
            SELECT `people`.`fullname`, `movie_person`.`description`, `positions`.`slug`
            FROM `people`
            LEFT JOIN `movie_person`
            ON `movie_person`.`person_id` = `people`.`id`
            LEFT JOIN `positions`
            ON `movie_person`.`position_id` = `positions`.`id`
            WHERE `movie_person`.`movie_id`= 111161
            AND `positions`.`slug` = 'cast'
        ");

        $director = DB::select("
            SELECT `people`.`fullname`, `movie_person`.`description`, `positions`.`slug`
            FROM `people`
            LEFT JOIN `movie_person`
            ON `movie_person`.`person_id` = `people`.`id`
            LEFT JOIN `positions`
            ON `movie_person`.`position_id` = `positions`.`id`
            WHERE `movie_person`.`movie_id`= 111161
            AND `positions`.`slug` = 'director'
        ");

        $writer = DB::select("
            SELECT `people`.`fullname`, `movie_person`.`description`, `positions`.`slug`
            FROM `people`
            LEFT JOIN `movie_person`
            ON `movie_person`.`person_id` = `people`.`id`
            LEFT JOIN `positions`
            ON `movie_person`.`position_id` = `positions`.`id`
            WHERE `movie_person`.`movie_id`= 111161
            AND `positions`.`slug` = 'writer'
        ");

        $producer = DB::select("
            SELECT `people`.`fullname`, `movie_person`.`description`, `positions`.`slug`
            FROM `people`
            LEFT JOIN `movie_person`
            ON `movie_person`.`person_id` = `people`.`id`
            LEFT JOIN `positions`
            ON `movie_person`.`position_id` = `positions`.`id`
            WHERE `movie_person`.`movie_id`= 111161
            AND `positions`.`slug` = 'producer'
        ");

        $composer = DB::select("
            SELECT `people`.`fullname`, `movie_person`.`description`, `positions`.`slug`
            FROM `people`
            LEFT JOIN `movie_person`
            ON `movie_person`.`person_id` = `people`.`id`
            LEFT JOIN `positions`
            ON `movie_person`.`position_id` = `positions`.`id`
            WHERE `movie_person`.`movie_id`= 111161
            AND `positions`.`slug` = 'composer'
        ");

        $cinematographer = DB::select("
            SELECT `people`.`fullname`, `movie_person`.`description`, `positions`.`slug`
            FROM `people`
            LEFT JOIN `movie_person`
            ON `movie_person`.`person_id` = `people`.`id`
            LEFT JOIN `positions`
            ON `movie_person`.`position_id` = `positions`.`id`
            WHERE `movie_person`.`movie_id`= 111161
            AND `positions`.`slug` = 'cinematographer'
        ");

        return view("movies.detail", [
            "movie" => $movie,
            "cast" => $cast,
            "director" => $director,
            "writer" => $writer,
            "producer" => $producer,
            "composer" => $composer,
            "cinematographer" => $cinematographer,
        ]);
    }
}
