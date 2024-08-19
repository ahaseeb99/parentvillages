<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\EmployeeReceipt;
use App\Models\EmployeeReceiptImage;
use Illuminate\Http\Request;

class Receipt extends Controller
{
    public function index(Request $request)
    {

        $records = EmployeeReceipt::with('images')->where('employee_id', $request->id)->get();
        // dd($records);
        return $records;
    }

    public function getImages(Request $request)
    {
        $records = EmployeeReceiptImage::where('employee_receipt_id', $request->id)->get();
        return $records;
    }
}
