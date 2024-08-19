<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ScholarshipController extends Controller
{
    public function index()
    {
        $total_scholarships = Scholarship::all()->count();
        $records = Scholarship::all();

        return view('scholarships.index', compact('total_scholarships', 'records'));
    }

    public function create()
    {
        return view('scholarships.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'short_description' => 'required',
            'full_description' => 'required',
            'deadline' => 'required',
            'event_date' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        Scholarship::create([
            'admin_id' => Auth::user()->id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'full_description' => $request->full_description,
            'deadline' => date_format(date_create($request->deadline), "Y-m-d"),
            'event_date' => date_format(date_create($request->event_date), "Y-m-d H:i:s"),
        ]);

        return redirect()->route('scholarships.index')->with('success', 'Scholarship added successfully.');
    }

    public function edit(Scholarship $scholarship)
    {
        return view('scholarships.edit', compact('scholarship'));
    }

    public function update(Scholarship $scholarship, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'short_description' => 'required',
            'full_description' => 'required',
            'deadline' => 'required',
            'event_date' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $scholarship->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'full_description' => $request->full_description,
            'deadline' => $request->deadline,
            'event_date' => $request->event_date
        ]);

        return redirect()->route('scholarships.index')->with('success', 'Scholarship updated successfully.');
    }

    public function show(Scholarship $scholarship)
    {
        return view('scholarships.view', compact('scholarship'));
    }

    public function destroy(Scholarship $scholarship)
    {
        $scholarship->delete();

        return redirect()->route('scholarships.index')->with('error', 'Scholarship deleted successfully.');
    }
}
