<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function topRated()
    {
        $top_50_movies = DB::select(
            'SELECT *
            FROM `movies`
            WHERE `movie_type_id` = 1 AND `votes_nr` > 10000
            ORDER BY `rating` DESC
            LIMIT 50'
        );
        // dd($top_50_movies);

        return view('movies/top-rated', [
            'top_50_movies' => $top_50_movies
        ]);
    }

    public function shawshank()
    {
        $selected_movie = DB::select(
            'SELECT *
        FROM `movies`
        LEFT JOIN `movie_person`
            ON `movies`.`id` = `movie_person`.`movie_id`
        LEFT JOIN `people`
            ON `people`.`id` = `movie_person`.`person_id`

        WHERE `movies`.`id` =  111161;
            '
        );

        return view('movies/detail', [
            'selected_movie' => $selected_movie
        ]);
    }


    public function search()
    {
        $search_string = $_GET['search'];
        $query =
            'SELECT *
            FROM `movies`
            WHERE `name` LIKE ? AND `movie_type_id`=1
            ';
        $queryparams = [];
        $queryparams[] = '%' . $search_string . '%';
        $search_movie = DB::select($query, $queryparams);

        // dd($_GET);

        return view('movies/search', [
            'result' => $search_movie
        ]);
    }
}
