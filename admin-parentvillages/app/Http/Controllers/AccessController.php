<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    public function index(Evaluation $evaluation)
    {
        return view('evaluations.access', compact('evaluation'));
    }

    public function create(Evaluation $evaluation)
    {
        $employees = Employee::all();

        return view('evaluations.create-access', compact('employees', 'evaluation'));
    }

    public function store(Request $request, Evaluation $evaluation)
    {
        $request->validate([
            'employee_id' => 'required',
            'evaluation_id' => 'required',
        ]);

        $check = $evaluation->employees()
            ->where('employee_id', $request->employee_id)
            ->where('evaluation_id', $request->evaluation_id)->first();

        if ($check) {
            return back()->with('error', 'This Document is already accessable to selected employee.');
        }

        $evaluation->employees()->attach($request->employee_id);

        return redirect('/evaluations/accessibility/' . $evaluation->slug)->with('success', 'Access provided successfully.');
    }

    public function destroy(Evaluation $evaluation)
    {
        dd($evaluation);
        $evaluation->delete();

        return back();
    }
}
