<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Intake;
use Illuminate\Http\Request;

class IntakeController extends Controller
{
    public function index()
    {
        $records = Intake::with('user')->get();

        return $records;
    }
}
