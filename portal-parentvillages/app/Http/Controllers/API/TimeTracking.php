<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmployeeTimeTracking;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TimeTracking extends Controller
{
    public function index(Request $request) {

        $records = EmployeeTimeTracking::where('employee_id', $request->id)->get();

        return $records;
    }

    public function time_track_chart(Request $request){
        $records = EmployeeTimeTracking::where('employee_id', $request->id)->orderBy('date', 'asc')->get();

        $total_hours = [
            'event' => 0,
            'place' => 0
        ];
        $months = [];
        $data = [];
        
        foreach($records as $record){
            
            $date = Carbon::createFromFormat('Y-m-d', $record->date);
            
            if (!in_array($date->format('F'), $months)) {    
                array_push($months, $date->format('F'));
            }

            $num_of_hours = EmployeeTimeTracking::select('number_of_hours', 'type')
                            ->where('employee_id',$request->id)
                            ->whereMonth('date', (int)$date->format('m'))
                            ->get()
                            ->pluck('number_of_hours', 'type')
                            ->toArray();

            foreach ($num_of_hours as $key => $value) { 

                if ($record->type == $key) {

                    $total_hours[$key] += $value;

                }

            }
        }

        $data['event_hours'] = $total_hours;
        $data['months'] = $months;

        return response()->json([
            'status' => 200,
            'data' => $data
        ]);
    }
}
