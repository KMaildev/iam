<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
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

        $password = $data['password'] ?? date('123123');
        
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($password),
            'gender' => $data['gender'],
            'age' => $data['age'],
            'date_of_birth' => $data['date_of_birth'],
            'height' => $data['height'],
            'weight' => $data['weight'],
            'language_level_id' => $data['language_level_id'],
            'education' => $data['education'],
            'foreign_experience' => $data['foreign_experience'],
            'other_qualification' => $data['other_qualification'],
            'marital_status' => $data['marital_status'],
            'blood_type' => $data['blood_type'],
            'wearing_glasses_or_not' => $data['wearing_glasses_or_not'],
            'birth_place' => $data['birth_place'],
            'nationality' => $data['nationality'],
            'religion' => $data['religion'],
            'address' => $data['address'],
            'phone_no' => $data['phone_no'],
            'account_type' => $data['account_type'],
            'is_active' => 'active',
        ]);

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
                'is_active' => 'active',
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
