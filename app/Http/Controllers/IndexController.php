<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //the index action of the IndexController
    public function index()
    {
        // return 'Hello, world! (from the IndexController)';

        //prepare some data to use later within view:
        $user = [
            'name' => 'Ilja',
            'role' => 'admin'
        ];

        // dd($user);

        $top_movies = DB::select(
            'SELECT *
            FROM `movies`
            ORDER BY `rating` DESC
            LIMIT 10'
        );
        // dd($top_movies);
        // we want to render resourses/views/index/index.blade.php file
        return view('index/index', [
            'my_variable' => 'Hello, world! (from IndexController method)',
            'things_to_do' => [
                'One thing (from controller)',
                'Another thing (from controller)'
            ],
            'user' => $user,
            'top_10_movies' => $top_movies
        ]);
    }

    public function top10movies()
    {
        return '<h1>There are top 20 movies of this year</h1>';
    }
}
