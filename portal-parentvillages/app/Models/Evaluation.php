<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'name',
        'slug',
        'path'
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employees_evaluations');
    }
}