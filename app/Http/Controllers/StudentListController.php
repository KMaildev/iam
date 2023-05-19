<?php

namespace App\Http\Controllers;

use App\Models\CompanyUserList;
use App\Models\UserList;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class StudentListController extends Controller
{
    public function index(Request $request)
    {
        $data = UserList::with('language_level')
            ->where('account_type', 'student')
            ->where('select_status', NULL)
            ->orderBy('id', 'DESC');

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
                    '<button class="btn btn-primary btn-sm" type="button" 
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
        $data = UserList::with('language_level', 'company_user_lists_table')
            ->where('account_type', 'student')

            ->whereHas('company_user_lists_table', function ($q) {
                $q->where('user_id', auth()->user()->id);
            })

            ->orderBy('id', 'DESC');

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
                $company_user_list_id = $each->company_user_lists_table ? $each->company_user_lists_table->id : '0';
                $action =
                    '<button class="btn btn-danger btn-sm" type="button" 
                        id="removeToMyStudent"
                        data-id="' . $company_user_list_id . '">
                        Remove
                    </button>
                ';
                return $action;
            })

            ->rawColumns(['language_level', 'action'])
            ->make(true);
    }
}
