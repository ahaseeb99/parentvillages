<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserApplicationAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'scholarship_question_id',
        'user_application_id',
        'answer'
    ];
}
