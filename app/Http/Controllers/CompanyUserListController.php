<?php

namespace App\Http\Controllers;

use App\Models\CompanyUserList;
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
            'user_list_id' => 'required',
        ]);

        $user_list_id = $request->user_list_id;
        $company_user_id = auth()->user()->id;

        $company_user = new CompanyUserList();
        $company_user->user_list_id = $user_list_id;
        $company_user->user_id = $company_user_id;
        $company_user->choose_date = date('Y-m-d');
        $company_user->save();

        $this->updateSelecteStatus($user_list_id, 'selected');

        return json_encode(array(
            "statusCode" => 200
        ));
    }



    public function removeCompanyUserList(Request $request)
    {
        $this->validate($request, [
            'company_user_list_id' => 'required',
        ]);

        $company_user_list_id = $request->company_user_list_id;
        $company_user = CompanyUserList::findOrFail($company_user_list_id);
        $this->updateSelecteStatus($company_user->user_list_id, NULL);
        $company_user->delete();
        return json_encode(array(
            "statusCode" => 200
        ));
    }

    public function updateSelecteStatus($user_list_id, $status)
    {
        $user_list = UserList::findOrFail($user_list_id);
        $user_list->select_status = $status;
        $user_list->update();
        return true;
    }
}
