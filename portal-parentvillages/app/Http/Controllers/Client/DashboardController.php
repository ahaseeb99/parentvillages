<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Intake;
use App\Models\IntakeAnswer;
use App\Models\Scholarship;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        $records = Scholarship::orderBy('id' , 'DESC')->limit(5)->get();
        $resources = Resource::orderBy('id','DESC')->limit(5)->get();
        return view('client.dashboard', compact('records' , 'resources')) ;
    }

    public function show()
    {
        return view('client.intake_form');
    }

    public function submit(Request $request)
    {
        // dd($request->toArray());
        $intake = Intake::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'gender' => $request->gender,
            'language' => $request->language,
            'age' => $request->age
        ]);

        // dd($intake->id);
        foreach ($request->toArray() as $key => $value) {

            if (strpos($key, 'question') !== false) {

                $question_id = filter_var($key, FILTER_SANITIZE_NUMBER_INT);

                if (gettype($value) == "array") {

                    for ($i = 0; $i < count($value); $i++) {

                        IntakeAnswer::create([
                            'intake_id' => $intake->id,
                            'question_id' => (int)$question_id,
                            'answer' => $value[$i]
                        ]);
                    }
                } else {

                    IntakeAnswer::create([
                        'intake_id' => $intake->id,
                        'question_id' => (int)$question_id,
                        'answer' => $value
                    ]);
                }
            }
        }

        return back()->with('success', 'Participant Intake form submitted successfully.');
    }
}
