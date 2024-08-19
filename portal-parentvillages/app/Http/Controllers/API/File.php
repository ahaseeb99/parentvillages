<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class File extends Controller
{
    public function index(Request $request)
    {
        // $records = UserAppointment::where('user_id',$request->id)->get();        
        $records = "File";        
        return $records;
    }
}
