<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'title',
        'short_description',
        'full_description',
        'deadline',
        'event_date'
    ];
}
