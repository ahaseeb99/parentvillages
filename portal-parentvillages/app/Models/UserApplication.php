<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'scholarship_id',
        'name',
        'email',
        'date',
        'appartment',
        'city',
        'state',
        'postal_code',
        'phone',
        'award_letter',
        'transcript_letter',
        'high_school',
        'plan',
        'acceptance_letter',
        
    ];
}
