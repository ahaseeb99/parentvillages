<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeExpense;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ExpenseController extends Controller
{
    public function index()
    {
        return view('employee.expenses.index');
    }

    public function create()
    {
        return view('employee.expenses.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
            'employee_id' => Auth::guard('employee')->user()->id,
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'amount' => $request->amount,
            'name' => $request->name
        ]);

        return redirect()->route('expenses.index')->with('success', 'Expense added successfully.');
    }

    public function edit(EmployeeExpense $expense)
    {
        return view('employee.expenses.edit', compact('expense'));
    }

    public function update(EmployeeExpense $expense, Request $request)
    {
        $validator = Validator::make($request->all(), [
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
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'amount' => $request->amount,
            'name' => $request->name
        ]);

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
    }

    public function delete(EmployeeExpense $expense)
    {
        $expense->delete();

        return redirect()->route('expenses.index')->with('error', 'Expense deleted successfully.');
    }

    public function export(Employee $employee)
    {
        $records = $employee->expenses;
        $expenses = $employee->expenses->pluck('amount')->toArray();
        $total_amount = array_sum($expenses);

        return view('employee.expenses.report', compact('records', 'total_amount'));
    }
}
