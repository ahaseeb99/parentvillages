<?php

namespace App\Http\Controllers;

use App\Models\Intake;
use App\Models\IntakeAnswer;
use App\Models\User;
use Illuminate\Http\Request;

class IntakeController extends Controller
{
    public function index()
    {
        $total_records = Intake::all()->count();

        return view('intakes.index', compact('total_records'));
    }

    public function view(Intake $intake)
    {
        $records = Intake::where('id', $intake->id)
            ->with(['answers' => function ($query) {

                $query->with('question');
            }])
            ->first();

        return view('intakes.view', compact('intake'));
    }

    public function create()
    {
        $users = User::all();
        return view('intakes.create', compact('users'));
    }

    public function store(Request $request)
    {
        $intake = Intake::create([
            'user_id' => $request->user_id,
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

        return redirect()->route('intakes.index')->with('success', 'Participant Intake form submitted successfully.');
    }
}
