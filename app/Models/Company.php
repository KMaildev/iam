<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone',
        'is_active',
        'account_type',
        'created_at',
        'updated_at',
        'user_id',
        'company_name',
        'facebook_link',
        'instagram_link',
        'website',
        'other',
        'plain_password',
        'account_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
