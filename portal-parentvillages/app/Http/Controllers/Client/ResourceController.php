<?php

namespace App\Http\Controllers\Client;

use App\Models\Resource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    public function index()
    {
        $records = Resource::with('reviews')->get();
        $total_resources  = Resource::all()->count();

        return view('client.resources.index', compact('total_resources', 'records'));
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
