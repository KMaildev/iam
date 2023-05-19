<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCompanyAccount;
use App\Models\User;
use App\Models\UserList;
use Illuminate\Http\Request;

class CompanyAccountController extends Controller
{
    public function index(Request $request)
    {

        $id = auth()->user()->id;
        $user = User::findOrFail($id);

        return view('account.company.update_account', compact('user'));
    }

    public function update(UpdateCompanyAccount $request, $id)
    {
        if (auth()->user()->id == $id) {
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->gender = $request->gender;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->update();



            $user = UserList::findOrFail($id);
            $user->name = $request->name;
            $user->gender = $request->gender;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->update();



            return redirect()->back()->with('success', 'Your processing has been completed.');
        } else {
            return redirect()->back()->with('error', 'Error.');
        }
    }
}
