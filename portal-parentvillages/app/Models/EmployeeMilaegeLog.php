<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeMilaegeLog extends Model
{
    use HasFactory;

    protected $table = "employee_mileage_logs";

    protected $fillable = [
        'employee_id',
        'number_of_hours',
        'date',
        'description'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}