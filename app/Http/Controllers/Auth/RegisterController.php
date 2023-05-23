<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\StudentDocs;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        if (request()->hasFile('photo')) {
            $photo = request()->file('photo');
            $path = $photo->store('public/photo');
        }

        if (request()->hasFile('nrc_front')) {
            $nrc_front = request()->file('nrc_front');
            $nrc_front_path = $nrc_front->store('public/photo');
        }

        if (request()->hasFile('nrc_back')) {
            $nrc_back = request()->file('nrc_back');
            $nrc_back_path = $nrc_back->store('public/photo');
        }

        if (request()->hasFile('members_list_file')) {
            $members_list_file = request()->file('members_list_file');
            $members_list_file_path = $members_list_file->store('public/photo');
        }

        if (request()->hasFile('japan_certificate')) {
            $japan_certificate = request()->file('japan_certificate');
            $japan_certificate_path = $japan_certificate->store('public/photo');
        }

        
        $password = $data['password'] ?? date('123123');
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($password);
        $user->gender = $data['gender'];
        $user->age = $data['age'];
        $user->date_of_birth = $data['date_of_birth'];
        $user->height = $data['height'];
        $user->weight = $data['weight'];
        $user->language_level_id = $data['language_level_id'];
        $user->education = $data['education'];
        $user->foreign_experience = $data['foreign_experience'];
        $user->other_qualification = $data['other_qualification'];
        $user->marital_status = $data['marital_status'];
        $user->blood_type = $data['blood_type'];
        $user->wearing_glasses_or_not = $data['wearing_glasses_or_not'];
        $user->birth_place = $data['birth_place'];
        $user->nationality = $data['nationality'];
        $user->religion = $data['religion'];
        $user->address = $data['address'];
        $user->phone_no = $data['phone_no'];
        $user->account_type = $data['account_type'];
        $user->is_active = ($data['account_type'] == 'company') ? ('pending') : ('active');

        $user->photo =  $path ?? null;
        $user->nrc_photo_front =  $nrc_front_path ?? null;
        $user->nrc_photo_back =  $nrc_back_path ?? null;
        $user->household_members =  $members_list_file_path ?? null;
        $user->japan_certificate =  $japan_certificate_path ?? null;
        $user->save();

        if (request()->hasFile('files')) {
            foreach (request()->file('files') as $key => $file) {
                $path = $file->store('public/student_docs');
                $original_name = $file->getClientOriginalName();
                $insert[$key]['file_path'] = $path;
                $insert[$key]['user_id'] = $user->id;
                $insert[$key]['upload_date'] = date('Y-m-d');
                $insert[$key]['created_at'] =  date('Y-m-d H:i:s');
                $insert[$key]['updated_at'] =  date('Y-m-d H:i:s');
            }
            StudentDocs::insert($insert);
        }


        if ($data['account_type'] == 'company') {
            $company = Company::count();
            $company_count = sprintf('%04d', $company + 1);
            $company_id = sprintf('ID-' . $company_count);

            Company::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($password),
                'name' => $data['name'],
                'phone' => $data['phone_no'],
                'address' => $data['address'],
                'account_type' => $data['account_type'],
                'is_active' => ($data['account_type'] == 'company') ? ('pending') : ('active'),
                'user_id' => $user->id,

                'company_name' => $data['company_name'],
                'facebook_link' => $data['facebook_link'],
                'instagram_link' => $data['instagram_link'],
                'website' => $data['website'],
                'other' => $data['other'],
                'plain_password' => $password,
                'account_id' => $company_id,
            ]);
        }

        return $user;
    }
}
