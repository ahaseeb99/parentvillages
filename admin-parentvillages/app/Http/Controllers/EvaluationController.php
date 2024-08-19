<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EvaluationController extends Controller
{
    public function index()
    {
        $total_evaluations = Evaluation::all()->count();
        $records = Evaluation::with('employees')->get();
        return view('evaluations.index', compact('total_evaluations', 'records'));
    }

    public function create()
    {
        return view('evaluations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required',
        ]);

        $check = Evaluation::where('name', $request->name)->first();

        if (isset($check)) {
            return back()->with('error', 'There is already a file with the same name on this location');
        }

        $fileName = Str::slug($request->name) . '.' . $request->file->extension();

        $request->file->move(public_path('admin/evaluations'), $fileName);

        $path = '/admin/evaluations/' . $fileName;

        Evaluation::create([
            'admin_id' => Auth::user()->id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'path' => $path
        ]);

        return redirect()->route('evaluations.index')->with('success', 'Document uploaded successfully.');
    }
}
