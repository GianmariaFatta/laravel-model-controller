<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function  home(){
        $movies=Movie::all();
        
        return view ('home', compact('movies'));
    }
}
