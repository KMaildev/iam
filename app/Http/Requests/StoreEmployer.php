<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployer extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name' => 'required',
            'company_type' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'job_category' => 'required',
            'age_limit' => 'required',
            'educational_requirement' => 'required',
            'working_experience_requirement' => 'required',
            'estimate_salary_offer' => 'required',
            'gender' => 'required',
            'interview_type' => 'required',
        ];
    }
}
