<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeTimeTracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'number_of_hours',
        'date',
        'type',
        'description'
    ];

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
