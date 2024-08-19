<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\EmployeeMilaegeLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MilaegeLogController extends Controller
{
    public function index()
    {
        return view('employee.mileage_logs.index');
    }

    public function create()
    {

        return view('employee.mileage_logs.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'number_of_hours' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        EmployeeMilaegeLog::create([
            'employee_id' => Auth::guard('employee')->user()->id,
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'number_of_hours' => $request->number_of_hours,
            'description' => $request->description
        ]);

        return redirect()->route('milaege-logs.index')->with('success', 'Log added successfully.');
    }

    public function edit(EmployeeMilaegeLog $milaege_log)
    {
        return view('employee.mileage_logs.edit', compact('milaege_log'));
    }

    public function update(EmployeeMilaegeLog $milaege_log, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'number_of_hours' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $milaege_log->update([
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'number_of_hours' => $request->number_of_hours,
            'description' => $request->description
        ]);

        return redirect()->route('milaege-logs.index')->with('success', 'Log updated successfully.');
    }

    public function destroy(EmployeeMilaegeLog $milaege_log)
    {
        dd($milaege_log);
        $milaege_log->delete();

        return redirect()->route('time-tracking.index')->with('success', 'Record deleted successfully.');
    }
}