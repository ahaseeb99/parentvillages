<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeTimeTracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TimeTrackingController extends Controller
{
    public function index()
    {
        $total_records = EmployeeTimeTracking::all()->count();

        return view('time_trackings.index', compact('total_records'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('time_trackings.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'date' => 'required',
            'number_of_hours' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        EmployeeTimeTracking::create([
            'employee_id' => $request->employee_id,
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'number_of_hours' => $request->number_of_hours,
            'type' => $request->type,
            'description' => $request->description
        ]);

        return redirect()->route('time-trackings.index')->with('success', 'Record created successfully.');
    }

    public function edit(EmployeeTimeTracking $time_tracking)
    {
        $employees = Employee::all();
        return view('time_trackings.edit', compact('time_tracking', 'employees'));
    }

    public function update(EmployeeTimeTracking $time_tracking, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'date' => 'required',
            'number_of_hours' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $time_tracking->update([
            'employee_id' => $request->employee_id,
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'number_of_hours' => $request->number_of_hours,
            'type' => $request->type,
            'description' => $request->description
        ]);

        return redirect()->route('time-trackings.index')->with('success', 'Record updated successfully.');
    }

    public function destroy(EmployeeTimeTracking $time_tracking)
    {
        $time_tracking->delete();

        return back()->with('error', 'Record deleted successfully.');
    }
}
