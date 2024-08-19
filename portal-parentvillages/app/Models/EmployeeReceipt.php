<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeReceipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'date',
        'amount',
        'place'
    ];

    public function images()
    {
        return $this->hasMany(EmployeeReceiptImage::class, 'employee_receipt_id', 'id');
    }
}
