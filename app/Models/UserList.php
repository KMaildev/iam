<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{
    use HasFactory;

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
        'photo',
    ];

    public function language_level()
    {
        return $this->belongsTo(LanguageLevel::class, 'language_level_id', 'id');
    }

    public function company_user_lists_table()
    {
        return $this->belongsTo(CompanyUserList::class, 'id', 'user_list_id');
    }
}
