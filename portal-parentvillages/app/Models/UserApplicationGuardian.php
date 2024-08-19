<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserApplicationGuardian extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_application_id',
        'name',
        'email',
        'phone',
        'address',
        'high_school_diploma',
        'associate_degree',
        'bechelor_degree',
        'master_degree',
        'doctoral_degree'
    ];
}
