<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeReceipt;
use App\Models\EmployeeReceiptImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReceiptController extends Controller
{
    public function index()
    {
        $images = EmployeeReceiptImage::where('employee_receipt_id', 1)->get();
        $total_receipts = EmployeeReceipt::all()->count();
        return view('receipts.index', compact('images', 'total_receipts'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('receipts.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'date' => 'required',
            'place' => 'required',
            'amount' => 'required',
            'receipt' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $employee_receipt = EmployeeReceipt::create([
            'employee_id' => $request->employee_id,
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'place' => $request->place,
            'amount' => $request->amount
        ]);

        if ($request->hasFile('receipt')) {

            for ($i = 0; $i < count($request->receipt); $i++) {

                $path = $request->file('receipt')[$i]->store('receipts');

                EmployeeReceiptImage::create([
                    'employee_receipt_id' => $employee_receipt->id,
                    'path' => $path
                ]);
            }
        }

        return redirect()->route('receipts.index')->with('success', 'Receipt created successfully.');
    }

    public function edit(EmployeeReceipt $receipt)
    {
        $employees = Employee::all();
        return view('receipts.edit', compact('receipt', 'employees'));
    }

    public function update(EmployeeReceipt $receipt, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'date' => 'required',
            'place' => 'required',
            'amount' => 'required',
            'receipt' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $receipt->update([
            'employee_id' => $request->employee_id,
            'date' => date_format(date_create($request->date), "Y-m-d"),
            'place' => $request->place,
            'amount' => $request->amount
        ]);

        if ($request->hasFile('receipt')) {

            $receipt->images()->delete();

            for ($i = 0; $i < count($request->receipt); $i++) {

                $path = $request->file('receipt')[$i]->store('receipts');

                $receipt->images()->create([
                    'path' => $path
                ]);
            }
        }

        return redirect()->route('receipts.index')->with('success', 'Receipt updated successfully.');
    }

    public function destroy(EmployeeReceipt $receipt)
    {
        $receipt->images()->delete();
        $receipt->delete();

        return back()->with('error', 'Receipt deleted successfully.');
    }
}