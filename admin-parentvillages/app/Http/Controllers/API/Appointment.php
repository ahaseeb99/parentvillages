<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserAppointment;
use Illuminate\Http\Request;

class Appointment extends Controller
{
    public function index()
    {
        $records = UserAppointment::with('user')->get();

        return $records;
    }
}
