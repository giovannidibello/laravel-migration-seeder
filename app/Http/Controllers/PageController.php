<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::query()->orderBy("departure_time")->get();
        // dd($trains);
        return view('home', compact("trains"));
    }

    public function ex()
    {
        $esercizio = config("ex");

        return "<pre>" . $esercizio . "</pre>";
    }
}
