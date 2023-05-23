<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyUserList;
use App\Models\User;
use App\Models\UserList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\Datatables\Datatables;

class StudentListController extends Controller
{
    public function index(Request $request)
    {
        $data = User::with('language_level')
            ->where('account_type', 'student');

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

            ->addColumn('photo', function ($each) {
                $photo = '';
                if ($each->photo) {
                    $photo =
                        '<img src="' . Storage::url($each->photo) . '" style="width: 50px; height: 50px; background-position: center; background-size: contain, cover;" data-enlargeable>
                    ';
                }

                return $photo;
            })

            ->addColumn('action', function ($each) {
                if ($each->companie_id == null) {
                    $action =
                        '
                            <button class="btn btn-danger btn-sm" type="button" 
                                id="addToMyStudent"
                                data-id="' . $each->id . '">
                                Select
                            </button>
                        ';
                } else {
                    $action =
                        '
                            <button type="button" class="btn btn-success btn-sm">
                                <i class="fa-solid fa-check-double"></i>
                                Done
                            </button>
                        ';
                }

                return $action;
            })

            ->rawColumns(['language_level', 'photo', 'action'])
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

            ->addColumn('photo', function ($each) {
                $photo = '';
                if ($each->photo) {
                    $photo =
                        '<img src="' . Storage::url($each->photo) . '" style="width: 50px; height: 50px; background-position: center; background-size: contain, cover;" data-enlargeable>
                    ';
                }

                return $photo;
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

            ->rawColumns(['language_level', 'photo', 'action'])
            ->make(true);
    }





    public function adminStudentListsDatatable(Request $request)
    {

        $data = User::with('language_level', 'companies')
            ->where('account_type', 'student');


        return DataTables::of($data)

            ->addIndexColumn()

            ->addColumn('company_name', function ($each) {
                return $each->companies ? $each->companies->company_name : '-';
            })

            ->editColumn('language_level', function ($each) {
                return  $each->language_level ? $each->language_level->title : '';
            })

            ->filterColumn('language_level', function ($query, $keyword) {
                $query->whereHas('language_level', function ($q1) use ($keyword) {
                    $q1->where('title',  $keyword);
                });
            })

            ->addColumn('photo', function ($each) {
                $photo = '';
                if ($each->photo) {
                    $photo =
                        '<img src="' . Storage::url($each->photo) . '" style="width: 50px; height: 50px; background-position: center; background-size: contain, cover;" data-enlargeable>
                    ';
                }

                return $photo;
            })

            ->addColumn('nrc_photo_back', function ($each) {
                $nrc_photo_back = '';
                if ($each->nrc_photo_back) {
                    $nrc_photo_back =
                        '<img src="' . Storage::url($each->nrc_photo_back) . '" style="width: 50px; height: 50px; background-position: center; background-size: contain, cover;" data-enlargeable>
                    ';
                }

                return $nrc_photo_back;
            })

            ->addColumn('nrc_photo_front', function ($each) {
                $nrc_photo_front = '';
                if ($each->nrc_photo_front) {
                    $nrc_photo_front =
                        '<img src="' . Storage::url($each->nrc_photo_front) . '" style="width: 50px; height: 50px; background-position: center; background-size: contain, cover;" data-enlargeable>
                    ';
                }

                return $nrc_photo_front;
            })

            ->addColumn('household_members', function ($each) {
                $household_members = '';
                if ($each->household_members) {
                    $household_members =
                        '<img src="' . Storage::url($each->household_members) . '" style="width: 50px; height: 50px; background-position: center; background-size: contain, cover;" data-enlargeable>
                    ';
                }

                return $household_members;
            })

            ->addColumn('japan_certificate', function ($each) {
                $japan_certificate = '';
                if ($each->japan_certificate) {
                    $japan_certificate =
                        '<img src="' . Storage::url($each->japan_certificate) . '" style="width: 50px; height: 50px; background-position: center; background-size: contain, cover;" data-enlargeable>
                    ';
                }

                return $japan_certificate;
            })

            ->addColumn('action', function ($each) {
                return '';
            })

            ->addColumn('second_select_date', function ($each) {
                $second_select_date =
                    '
                            <input type="date"  id="' . $each->id . '" onchange="updateSecondSelectDate(this);" value="'.$each->second_select_date.'">
                        ';
                return $second_select_date;
            })

            ->addColumn('third_select_date', function ($each) {
                $third_select_date =
                    '
                            <input type="date"  id="' . $each->id . '" onchange="updateThirdSelectDate(this);" value="'.$each->third_select_date.'">
                        ';
                return $third_select_date;
            })

            ->rawColumns(['company_name', 'language_level', 'photo', 'nrc_photo_back', 'nrc_photo_front', 'household_members', 'japan_certificate', 'action', 'second_select_date', 'third_select_date'])
            ->make(true);
    }
}
