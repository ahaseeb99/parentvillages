<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeMileageLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MileageLogController extends Controller
{
    public function index()
    {
        $total_logs = EmployeeMileageLog::all()->count();

        return view('mileage_logs.index', compact('total_logs'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('mileage_logs.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'date' => 'required',
            'number_of_hours' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        EmployeeMileageLog::create([
            'employee_id' => $request->employee_id,
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'number_of_hours' => $request->number_of_hours,
            'description' => $request->description
        ]);

        return redirect()->route('mileage-logs.index')->with('success', 'Log added successfully.');
    }

    public function edit(EmployeeMileageLog $mileage_log)
    {
        $employees = Employee::all();
        return view('mileage_logs.edit', compact('mileage_log', 'employees'));
    }

    public function update(EmployeeMileageLog $mileage_log, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'date' => 'required',
            'number_of_hours' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $mileage_log->update([
            'employee_id' => $request->employee_id,
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'number_of_hours' => $request->number_of_hours,
            'description' => $request->description
        ]);

        return redirect()->route('mileage-logs.index')->with('success', 'Log updated successfully.');
    }

    public function destroy(EmployeeMileageLog $mileage_log)
    {
        $mileage_log->delete();

        return redirect()->route('mileage-logs.index')->with('error', 'Log deleted successfully.');
    }
}
