<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\EmployeeTimeTracking;
use Illuminate\Http\Request;

class TimeTracking extends Controller
{
    public function index()
    {
        $records = EmployeeTimeTracking::with(['employee' => function ($query) {
            $query->select('id', 'name')->get();
        }])->get();

        return $records;
    }
}
