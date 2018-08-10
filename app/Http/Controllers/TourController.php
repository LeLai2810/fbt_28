<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::paginate(6);
        
        return view('home', compact('tours'));
    }

    public function show(Tour $tour)
    {
        $activities = $tour->activities;

        return view('tours.show', compact('tour', 'activities'));
    }
}
