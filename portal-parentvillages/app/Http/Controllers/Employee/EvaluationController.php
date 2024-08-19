<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {
        $records = Evaluation::all();
        
        return view('employee.evaluations.index', compact('records'));
    }
}