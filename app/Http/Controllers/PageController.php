<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $movies = Movie::all();

        return view('home');
    }

    public function ex()
    {
        $esercizio = config("ex");

        return "<pre>" . $esercizio . "</pre>";
    }
}
