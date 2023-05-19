<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployer;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        return view('employer.index');
    }

    public function store(StoreEmployer $request)
    {
        $employer = new Employer();
        $employer->company_name = $request->company_name;
        $employer->type_of_company = $request->company_type;
        $employer->location = $request->location;
        $employer->website = $request->website;
        $employer->phone = $request->phone;
        $employer->email = $request->email;
        $employer->job_category = $request->job_category;
        $employer->age_limit = $request->age_limit;
        $employer->educational_requirement = $request->educational_requirement;
        $employer->working_experience_requirement = $request->working_experience_requirement;
        $employer->other_additional_requirement = $request->other_additional_requirement;
        $employer->estimate_salary_offer = $request->estimate_salary_offer;
        $employer->other_allowance = $request->other_allowance;
        $employer->gender = $request->gender;
        $employer->interview_type = $request->interview_type;
        $employer->apply_date = date('Y-m-d');
        $employer->save();
        return redirect()->back()->with('success', 'Thank you for your contact. our team is ready to response all your queries..');
    }
}
