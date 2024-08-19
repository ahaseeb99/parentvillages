<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeExpense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ExpenseController extends Controller
{
    public function index()
    {
        $total_expenses = EmployeeExpense::all()->count();

        return view('expenses.index', compact('total_expenses'));
    }

    public function create()
    {
        $employees = Employee::all();

        return view('expenses.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'date' => 'required',
            'amount' => 'required',
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        EmployeeExpense::create([
            'employee_id' => $request->employee_id,
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'amount' => $request->amount,
            'name' => $request->name
        ]);

        return redirect()->route('expenses.index')->with('success', 'Expense added successfully.');
    }

    public function edit(EmployeeExpense $expense)
    {
        $employees = Employee::all();
        return view('expenses.edit', compact('expense', 'employees'));
    }

    public function update(EmployeeExpense $expense, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'date' => 'required',
            'amount' => 'required',
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $expense->update([
            'employee_id' => $request->employee_id,
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'amount' => $request->amount,
            'name' => $request->name
        ]);

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
    }

    public function destroy(EmployeeExpense $expense)
    {
        $expense->delete();

        return redirect()->route('expenses.index')->with('error', 'Expense deleted successfully.');
    }
}
