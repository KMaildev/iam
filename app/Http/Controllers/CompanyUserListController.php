<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyUserList;
use App\Models\User;
use App\Models\UserList;
use Illuminate\Http\Request;

class CompanyUserListController extends Controller
{

    public function index(Request $request)
    {
        return view('account.company.selected_students');
    }


    public function addCompanyUserList(Request $request)
    {
        $this->validate($request, [
            'student_id' => 'required',
        ]);

        $student_id = $request->student_id;
        $company = auth()->user()->id;
        $company_info = Company::where('user_id', $company)->first();
        $company_id = $company_info->id;
        $user = User::findOrFail($student_id);
        $user->companie_id = $company_id;
        $user->first_status = 'selected';
        $user->first_select_date = date('Y-m-d');
        $user->update();
        
        return json_encode(array(
            "statusCode" => 200
        ));
    }


    public function removeCompanyUserList(Request $request)
    {
        $this->validate($request, [
            'student_id' => 'required',
        ]);

        $student_id = $request->student_id;
        $user = User::findOrFail($student_id);
        $user->companie_id = NULL;
        $user->first_status = NULL;
        $user->first_select_date = NULL;
        $user->update();
        return json_encode(array(
            "statusCode" => 200
        ));
    }
}
