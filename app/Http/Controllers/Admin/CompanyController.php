<?php

namespace App\Http\Controllers\Admin;

use App\Exports\CompanyExport;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;


class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('admin.company.index', compact('companies'));
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('admin.company.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->name = $request->name;
        $company->address = $request->address;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->company_name = $request->company_name;
        $company->facebook_link = $request->facebook_link;
        $company->instagram_link = $request->instagram_link;
        $company->website = $request->website;
        $company->other = $request->other;
        $company->account_id = $request->account_id;
        $company->password = $request->password ? Hash::make($request->password) : $company->password;
        $company->plain_password = $request->password ? $request->password : $company->plain_password;
        $company->update();
        
        $user_id = $company->user_id;
        $user = User::findOrFail($user_id);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone_no = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password ? Hash::make($request->password) : $user->password;
        $user->update();
        
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    public function activeStatus(Request $request)
    {
        $id = $request->user_id;
        $user = User::findOrFail($id);
        $current_status = $user->is_active;

        $user->is_active = ($current_status == 'active') ? ('pending') : ('active');
        $user->update();

        return json_encode(array(
            "statusCode" => 200,
        ));
    }


    public function CompanyExport() 
    {
        $companies = Company::all();
        return Excel::download(new CompanyExport($companies), 'company_' . date("Y-m-d H:i:s") . '.xlsx');
    }    
}
