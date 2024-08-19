<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\EmployeeMileageLog;
use Illuminate\Http\Request;

class MileageLog extends Controller
{
    public function index()
    {
        $records = EmployeeMileageLog::with(['employee' => function ($query) {
            $query->select('id', 'name')->get();
        }])->get();

        return $records;
    }
}