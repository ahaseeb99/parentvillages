<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class Accessibility extends Controller
{
    public function index(Evaluation $evaluation)
    {
        $records = $evaluation->employees;
        return $records;
    }
}