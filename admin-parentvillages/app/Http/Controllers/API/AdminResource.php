<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use Illuminate\Http\Request;

class AdminResource extends Controller
{
    public function index(Resource $resource)
    {
        $records = $resource->reviews;

        return $records;
    }
}
