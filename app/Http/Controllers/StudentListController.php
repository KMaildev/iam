<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyUserList;
use App\Models\User;
use App\Models\UserList;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class StudentListController extends Controller
{
    public function index(Request $request)
    {
        $data = User::with('language_level')
            ->where('account_type', 'student')
            ->where('companie_id', NULL);

        return DataTables::of($data)

            ->addIndexColumn()

            ->editColumn('language_level', function ($each) {
                return  $each->language_level ? $each->language_level->title : '';
            })

            ->filterColumn('language_level', function ($query, $keyword) {
                $query->whereHas('language_level', function ($q1) use ($keyword) {
                    $q1->where('title', 'like', '%' . $keyword . '%');
                });
            })

            ->addColumn('action', function ($each) {
                $action =
                    '<button class="btn btn-danger btn-sm" type="button" 
                        id="addToMyStudent"
                        data-id="' . $each->id . '">
                        Select
                    </button>
                ';
                return $action;
            })

            ->rawColumns(['language_level', 'action'])
            ->make(true);
    }



    public function companyStudents(Request $request)
    {
        $company = auth()->user()->id;
        $company_info = Company::where('user_id', $company)->first();
        $company_id = $company_info->id;

        $data = User::with('language_level')
            ->where('companie_id', $company_id);

        return DataTables::of($data)

            ->addIndexColumn()

            ->editColumn('language_level', function ($each) {
                return  $each->language_level ? $each->language_level->title : '';
            })

            ->filterColumn('language_level', function ($query, $keyword) {
                $query->whereHas('language_level', function ($q1) use ($keyword) {
                    $q1->where('title', 'like', '%' . $keyword . '%');
                });
            })

            ->addColumn('action', function ($each) {
                $action =
                    '<button class="btn btn-danger btn-sm" type="button" 
                    id="removeMyStudent"
                    data-id="' . $each->id . '">
                    Remove
                </button>
            ';
                return $action;
            })

            ->rawColumns(['language_level', 'action'])
            ->make(true);
    }
}
