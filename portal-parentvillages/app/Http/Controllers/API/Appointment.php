<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserAppointment;

class Appointment extends Controller
{
    public function index(Request $request)
    {
        $records = UserAppointment::where('user_id',$request->id)->get();        
        return $records;
    }
}
