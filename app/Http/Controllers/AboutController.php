<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('about.index', compact('jobs'));
    }

    public function history()
    {
        return view('about.history');
    }

    public function message()
    {
        return view('about.message');
    }

    public function org()
    {
        return view('about.org');
    }


    public function team()
    {
        $teams = Team::all();
        return view('about.team', compact('teams'));
    }
}
