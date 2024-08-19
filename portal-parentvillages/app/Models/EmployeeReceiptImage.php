<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeReceiptImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_receipt_id',
        'path'
    ];

    public function receipt()
    {
        return $this->belongsTo(EmployeeReceipt::class, 'employee_receipt_id', 'id');
    }
}
