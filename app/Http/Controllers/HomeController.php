<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Tokutei;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $activities = Activities::all();
        $tokuteis = Tokutei::all();
        return view('welcome', compact('activities', 'tokuteis'));
    }
}
