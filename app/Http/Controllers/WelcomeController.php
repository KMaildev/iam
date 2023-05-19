<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Tokutei;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $activities = Activities::all();
        $tokuteis = Tokutei::all();
        return view('welcome', compact('activities', 'tokuteis'));
    }
}
