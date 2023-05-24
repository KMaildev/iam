<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\SiteVisitor;
use App\Models\Tokutei;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $activities = Activities::all();
        $tokuteis = Tokutei::all();
        $allSessions = session()->all();

        $site_visitors = SiteVisitor::first();
        $site_visitors->total_count = $site_visitors->total_count + 1;
        $site_visitors->update();

        return view('welcome', compact('activities', 'tokuteis'));
    }
}
