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


            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $path = $photo->store('public/photo');
                $photo_name = $photo->getClientOriginalName();
            }
    
            if ($request->hasFile('nrc_front')) {
                $nrc_front = $request->file('nrc_front');
                $nrc_front_path = $nrc_front->store('public/photo');
                $nrc_front_path = $nrc_front->getClientOriginalName();
            }
    
            if ($request->hasFile('nrc_back')) {
                $nrc_back = $request->file('nrc_back');
                $nrc_back_path = $nrc_back->store('public/photo');
                $nrc_back_path = $nrc_back->getClientOriginalName();
            }

            if ($request->hasFile('members_list_file')) {
                $members_list_file = $request->file('members_list_file');
                $members_list_file_path = $members_list_file->store('public/photo');
                $members_list_file_path = $members_list_file->getClientOriginalName();
            }

            if ($request->hasFile('japan_certificate')) {
                $japan_certificate = $request->file('japan_certificate');
                $japan_certificate_path = $japan_certificate->store('public/photo');
                $japan_certificate_path = $japan_certificate->getClientOriginalName();
            }

            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->gender = $request->gender;
            $user->age = $request->age;
            $user->date_of_birth = $request->date_of_birth;
            $user->height = $request->height;
            $user->weight = $request->weight;
            $user->language_level_id = $request->language_level_id;
            $user->education = $request->education;
            $user->foreign_experience = $request->foreign_experience;
            $user->other_qualification = $request->other_qualification;
            $user->marital_status = $request->marital_status;
            $user->blood_type = $request->blood_type;
            $user->wearing_glasses_or_not = $request->wearing_glasses_or_not;
            $user->birth_place = $request->birth_place;
            $user->nationality = $request->nationality;
            $user->religion = $request->religion;
            $user->address = $request->address;
            $user->phone_no = $request->phone_no;

            $user->photo = 'https://iam-myanmar.com/storage/photo/' . $photo_name ?? $user->photo;
            $user->nrc_photo_front = 'https://iam-myanmar.com/storage/photo/' . $nrc_front_path ?? $user->nrc_photo_front;
            $user->nrc_photo_back = 'https://iam-myanmar.com/storage/photo/' . $nrc_back_path ?? $user->nrc_photo_back;
            $user->household_members = 'https://iam-myanmar.com/storage/photo/' . $members_list_file_path ?? $user->household_members;
            $user->japan_certificate = 'https://iam-myanmar.com/storage/photo/' . $japan_certificate_path ?? $user->japan_certificate;

            $user->update();
            return redirect()->back()->with('success', 'Your processing has been completed.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong please try again');
        }
    }
}
