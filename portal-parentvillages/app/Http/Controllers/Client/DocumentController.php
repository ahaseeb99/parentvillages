<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDocument;

class DocumentController extends Controller
{
    public function index()
    {
        $user_id = Auth::guard('web')->user()->id;
        $total_records = UserDocument::where('user_id', $user_id)->count();
        $records = UserDocument::where('user_id', $user_id)->get();
        return view('client.documents.index', compact('total_records', 'records'));
    }

    public function create()
    {
        return view('client.documents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'document' => 'required'
        ]);

        $check = UserDocument::where('name', $request->name)->first();

        if (isset($check)) {
            return back()->with('error', 'This name is already in used.');
        }

        $current_time = Carbon::now();
        $formatted_date = $current_time->format('Y-m-d');
        $user_id = Auth::guard('web')->user()->id;
        $user_name = Auth::guard('web')->user()->name;
        $user_name_slug = str()->slug($user_name);

        $document_extension = $request->file('document')->extension();
        $document_formated_file = $formatted_date . '-' . $user_name_slug . '.' . $document_extension;
        $document_store = $request->file('document')->storeAs('client/documents', $document_formated_file, 'public');

        UserDocument::create([
            'user_id' => $user_id,
            'name' => $request->name,
            'slug' => str()->slug($request->name),
            'path' => $document_store
        ]);

        return redirect()->route('documents.index')->with('success', 'Document uploaded successfully.');
    }
}
