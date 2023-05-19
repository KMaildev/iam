<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return auth()->user()->id;
        // $id = auth()->user()->id;
        // $user = User::findOrFail($id);
        // $user_list = Company::findOrFail($id);
        // return view('account.dashboard.index', compact('user', 'user_list'));
    }
}
