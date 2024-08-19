<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\EmployeeReceipt;
use Illuminate\Http\Request;

class Receipt extends Controller
{
    public function index()
    {
        $records = EmployeeReceipt::with(['employee' => function ($query) {
            $query->select('id', 'name')->get();
        }])->get();

        return $records;
    }
}
