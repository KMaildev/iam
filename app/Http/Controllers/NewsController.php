<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $activities = News::all();
        $activity = News::findOrFail($id);
        return view('news.show', compact('activities', 'activity'));
    }
}
