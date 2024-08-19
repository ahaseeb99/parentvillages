<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeExpense extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'date',
        'name',
        'amount'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
