<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStudentAccount;
use App\Models\User;
use App\Models\UserList;
use Illuminate\Http\Request;

class StudentAccountController extends Controller
{

    public function index(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        return view('account.student.update_account', compact('user'));
    }

    public function update(UpdateStudentAccount $request, $id)
    {
        if (auth()->user()->id == $id) {
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->gender = $request->gender;
            $user->age = $request->age;
            $user->language_level_id = $request->language_level_id;
            $user->professional_career = $request->professional_career;
            $user->height = $request->height;
            $user->weight = $request->weight;
            $user->qualification = $request->qualification;
            $user->special_skills = $request->special_skills;
            $user->visited = $request->visited;
            $user->nrc = $request->nrc;
            $user->date_of_birth = $request->date_of_birth;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->sibling = $request->sibling;
            $user->visited_sibling = $request->visited_sibling;
            $user->update();


            $user_list = UserList::findOrFail($id);
            $user_list->name = $request->name;
            $user_list->email = $request->email;
            $user_list->gender = $request->gender;
            $user_list->age = $request->age;
            $user_list->language_level_id = $request->language_level_id;
            $user_list->professional_career = $request->professional_career;
            $user_list->height = $request->height;
            $user_list->weight = $request->weight;
            $user_list->qualification = $request->qualification;
            $user_list->special_skills = $request->special_skills;
            $user_list->visited = $request->visited;
            $user_list->nrc = $request->nrc;
            $user_list->date_of_birth = $request->date_of_birth;
            $user_list->address = $request->address;
            $user_list->phone = $request->phone;
            $user_list->sibling = $request->sibling;
            $user_list->visited_sibling = $request->visited_sibling;
            $user_list->update();


            return redirect()->back()->with('success', 'Your processing has been completed.');
        } else {
            return redirect()->back()->with('error', 'Error.');
        }
    }
}
