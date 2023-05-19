<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        return view('account.password.index', compact('user'));
    }

    public function store(ChangePassword $request)
    {
        $id = auth()->user()->id;
        $employee = User::findOrFail($id);
        $employee->password = $request->password ? Hash::make($request->password) : $employee->password;
        return redirect()->back()->with('success', 'Your password has been change successfully.');
    }
}
