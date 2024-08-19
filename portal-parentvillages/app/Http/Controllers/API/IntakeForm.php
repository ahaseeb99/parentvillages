<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Intake;
use App\Models\IntakeAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IntakeForm extends Controller
{
    public function index(Request $request)
    {
        $records = Intake::where('user_id',$request->id)->get();        
        return $records;
    }
}
