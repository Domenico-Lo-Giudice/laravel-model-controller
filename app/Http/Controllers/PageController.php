<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function movielist() {
       
        // SELECT * FROM `movies`
        $movies = Movie::all();

        dd($movies);

        return view(`movielist`, compact(`movies`));
        
    }
}
