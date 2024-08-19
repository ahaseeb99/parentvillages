<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\EmployeeMilaegeLog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MilaegeLog extends Controller
{
    public function index(Request $request)
    {
        $records = EmployeeMilaegeLog::where('employee_id', $request->id)->get();
        return $records;
    }

    
    public function milage_chart(Request $request){
        
        $records = EmployeeMilaegeLog::where('employee_id', $request->id)->orderBy('date', 'asc')->get();

        $total_hours = [];
        $months = [];
        $data = [];

        foreach($records as $record){
            
            $date = Carbon::createFromFormat('Y-m-d', $record->date);
            
            if (!in_array($date->format('F'), $months)) {

                $num_of_hours = EmployeeMilaegeLog::select('number_of_hours')
                                ->whereMonth('date', (int)$date->format('m'))
                                ->get()
                                ->pluck('number_of_hours')
                                ->toArray();
                
                array_push($total_hours, array_sum($num_of_hours));

                array_push($months, $date->format('F'));

            }

        }

        $data['miles'] = $total_hours;
        $data['months'] = $months;

        return response()->json([
            'status' => 200,
            'data' => $data
        ]);
    }
}