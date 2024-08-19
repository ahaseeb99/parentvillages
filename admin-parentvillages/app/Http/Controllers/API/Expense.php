<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\EmployeeExpense;
use Illuminate\Http\Request;

class Expense extends Controller
{
    public function index()
    {
        $records = EmployeeExpense::with(['employee' => function ($query) {
            $query->select('id', 'name')->get();    
        }])->get();

        return $records;
    }
}
