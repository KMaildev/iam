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
        $allSessions = session()->all();

        session_start();
        $session_id = $_SESSION['19cf8687ab2734267a3c58ad42835524user_data'] ?? '';
        if ($session_id) {
        }else{
        }

        return view('welcome', compact('activities', 'tokuteis'));
    }
}
