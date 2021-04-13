<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SeriesController extends Controller
{
    public function index() {
        $series = [
            'Dr House',
            'Chicago P.D',
            'Chicago Fire',
            'Chicago MED'
        ];

        return view('series.index', compact('series'));
    }

    public function create() {
        return view('series.create');
    }
}