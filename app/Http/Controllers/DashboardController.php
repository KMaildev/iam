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
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        if ($user->is_active == 'pending') {
            Auth::logout();
            return view('account.approval_status');
        }else{
            return view('account.dashboard.index', compact('user'));
        }
    }
}
