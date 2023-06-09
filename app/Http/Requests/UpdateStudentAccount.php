<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentAccount extends FormRequest
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
        $id = $this->route('student_account');
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => 'unique:users,email,' . $id,
            'language_level_id' => ['required'],
            'age' => ['required', 'numeric', 'min:15', 'max:70'],
        ];
    }
}
