<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\EmployeeTimeTracking;

class TimeTrackingController extends Controller
{
    public function index()
    {

        return view('employee.time_trackings.index');
    }

    public function create()
    {

        return view('employee.time_trackings.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
            'employee_id' => Auth::guard('employee')->user()->id,
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'number_of_hours' => $request->number_of_hours,
            'type' => $request->type,
            'description' => $request->description
        ]);

        return redirect()->route('time-tracking.index')->with('success', 'Record added successfully.');
    }

    public function edit(EmployeeTimeTracking $time_tracking)
    {

        return view('employee.time_trackings.edit', compact('time_tracking'));
    }

    public function update(EmployeeTimeTracking $time_tracking, Request $request)
    {

        $validator = Validator::make($request->all(), [
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
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'number_of_hours' => $request->number_of_hours,
            'type' => $request->type,
            'description' => $request->description
        ]);

        return redirect()->route('time-tracking.index')->with('success', 'Record updated successfully.');
    }

    public function destroy(EmployeeTimeTracking $time_tracking)
    {
        dd($time_tracking);
        $time_tracking->delete();

        return redirect()->route('time-tracking.index')->with('success', 'Record deleted successfully.');
    }
}