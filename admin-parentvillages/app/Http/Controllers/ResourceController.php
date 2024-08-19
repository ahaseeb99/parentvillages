<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ResourceController extends Controller
{
    public function index()
    {
        $records = Resource::with('reviews')->get();
        return view('resources.index', compact('records'));
    }

    public function create()
    {
        return view('resources.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required',
        ]);

        $check = Resource::where('name', $request->name)->first();

        if (isset($check)) {
            return back()->with('error', 'There is already a file with the same name on this location');
        }

        $fileName = Str::slug($request->name) . '.' . $request->file->extension();

        $request->file->move(public_path('admin/resources'), $fileName);

        $path = '/admin/resources/' . $fileName;

        Resource::create([
            'admin_id' => Auth::user()->id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'path' => $path
        ]);

        return redirect()->route('resources.index')->with('success', 'Resource uploaded successfully.');
    }

    public function show(Resource $resource)
    {
        return view('resources.view', compact('resource'));
    }

    public function destroy(Resource $resource)
    {
        $resource->reviews()->delete();
        $resource->delete();

        return redirect()->route('resources.index')->with('error', 'Resource deleted successfully.');
    }

    public function showCreateForm(Request $request)
    {
        return view('resources.create-review');
    }
}
