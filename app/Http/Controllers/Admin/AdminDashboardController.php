<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\SiteVisitor;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $total_companies = Company::count();
        $total_student = User::where('account_type', 'student')->count();
        $total_select_student = User::where('account_type', 'student')
            ->whereNotNull('companie_id')
            ->count();

        $site_visitors =  SiteVisitor::sum('total_count');
        // session_start();
        // $session_id = $_SESSION['19cf8687ab2734267a3c58ad42835524user_data'] ?? '';
        // if ($session_id) {
        // }else{
        // }
        return view('admin.dashboard.index', compact('total_companies', 'total_student', 'total_select_student', 'site_visitors'));
    }
}
