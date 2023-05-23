<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'age',
        'language_level_id',
        'professional_career',
        'height',
        'weight',
        'qualification',
        'special_skills',
        'visited',
        'nrc',
        'date_of_birth',
        'address',
        'phone',
        'sibling',
        'visited_sibling',
        'account_type',

        'name',
        'email',
        'password',
        'gender',
        'age',

        'height',
        'weight',
        'language_level_id',
        'education',
        'foreign_experience',
        'other_qualification',
        'marital_status',
        'blood_type',
        'wearing_glasses_or_not',
        'birth_place',
        'nationality',
        'religion',
        'address',
        'phone_no',
        'photo',
        'nrc_photo_back',
        'nrc_photo_front',
        'household_members',
        'is_active',
        'account_type',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'japan_certificate',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function language_level()
    {
        return $this->belongsTo(LanguageLevel::class, 'language_level_id', 'id');
    }

    public function companies()
    {
        return $this->belongsTo(Company::class, 'companie_id', 'id');
    }
}
