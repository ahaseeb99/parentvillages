<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employee extends Authenticatable
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

    public function timeTrackings()
    {
        return $this->hasMany(EmployeeTimeTracking::class, 'employee_id', 'id');
    }

    public function mileageLogs()
    {
        return $this->hasMany(EmployeeMileageLog::class, 'employee_id', 'id');
    }

    public function expenses()
    {
        return $this->hasMany(EmployeeExpense::class, 'employee_id', 'id');
    }

    public function evaluations()
    {
        return $this->belongsToMany(Evaluation::class, 'employees_evaluations');
    }
}