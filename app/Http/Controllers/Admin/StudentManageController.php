<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentManageController extends Controller
{
    public function index()
    {
        return view('admin.student.index');
    }


    public function updateSecondSelectDate(Request $request)
    {
        $id = $request->user_id;
        $user = User::findOrFail($id);
        $user->second_status = 'selected';
        $user->second_select_date = $request->second_select_date;
        $user->update();
        return json_encode(array(
            "statusCode" => 200,
        ));
    }

    public function updateThirdSelectDate(Request $request)
    {
        $id = $request->user_id;
        $user = User::findOrFail($id);
        $user->third_status = 'selected';
        $user->third_select_date = $request->second_select_date;
        $user->update();
        return json_encode(array(
            "statusCode" => 200,
        ));
    }


    public function UserExport() 
    {
        $users = User::where('account_type', 'student')
            ->get();

        return Excel::download(new UsersExport($users), 'student_' . date("Y-m-d H:i:s") . '.xlsx');
    }    
}
