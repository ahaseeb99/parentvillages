<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\EmployeeExpense;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Expense extends Controller{

    public function index(Request $request){

        $records = EmployeeExpense::where('employee_id', $request->id)->get();
        return $records;
        
    }

    public function expense_chart(Request $request){

        $records = EmployeeExpense::where('employee_id', $request->id)->orderBy('date', 'asc')->get();
        
        $total_amount = [];
        $months = [];
        $data = [];
        
        foreach($records as $record){

            $date = Carbon::createFromFormat('Y-m-d', $record->date);

            if (!in_array($date->format('F'), $months)) {

                $amount = EmployeeExpense::select('amount')
                                ->whereMonth('date', (int)$date->format('m'))
                                ->get()
                                ->pluck('amount')
                                ->toArray();
                
               
                array_push($total_amount, array_sum($amount));

                array_push($months, $date->format('F'));

            }
        }
        $data ['total_amount']= $total_amount;
        $data['months']= $months;
        return response()->json([
                'status' => 200,
                'data' => $data
        ]);
    }
}
