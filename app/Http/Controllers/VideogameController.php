<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function topRated()
    {
        $top_50_games = DB::select(
            'SELECT *
            FROM `movies`
            WHERE `movie_type_id` = 7
            ORDER BY `rating` DESC            
            LIMIT 50;'
        );

        return view('games/top-rated-games', [
            'top_50_games' => $top_50_games
        ]);
    }
}
