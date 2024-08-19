<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserApplicationReferences extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_application_id',
        'name',
        'phone',
        'email',
        'relation',
        'length',
        'letter',
    ];
}
