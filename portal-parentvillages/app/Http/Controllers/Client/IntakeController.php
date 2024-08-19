<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Intake;
use App\Models\IntakeAnswer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class IntakeController extends Controller
{
    public function index(){
        $user_id = Auth::guard('web')->user()->id;
        $total_records = Intake::where('user_id',$user_id)->count();
        return view('client.intakes.index',compact('total_records'));
    }

    public function create(){
        return view('client.intakes.create');
    }

    public function store(Request $request){
        $user_id = Auth::guard('web')->user()->id;

        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address_1' => 'required',
            'address_2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
            'gender' => 'required',
            'language' => 'required',
            'age' => 'required',
            'question_1' => 'array|required',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'array|required',
            'question_5' => 'required',
            'question_6' => 'required',
            'question_7' => 'required',
            'question_8' => 'required',
            'question_9' => 'array|required',
            'question_10' => 'array|required',
            'question_11' => 'required',
            'question_12' => 'array|required',
            'question_13' => 'required',
            'question_14' => 'required',
            'question_15' => 'array|required',
            'question_16' => 'required',
            'question_17' => 'array|required',
            'question_18' => 'required',
            'question_19' => 'required',
            'question_20' => 'required',
            'question_21' => 'required',
            'question_22' => 'required',
            'question_23' => 'array|required',
            'question_24' => 'array|required',
            'question_25' => 'required',
            'question_26' => 'required',
            'question_27' => 'required',

        ],
        $messages=[
            'question_1.required' => 'Field is required',
            'question_2.required' => 'Field is required',
            'question_3.required' => 'Field is required',
            'question_4.required' => 'Field is required',
            'question_5.required' => 'Field is required',
            'question_6.required' => 'Field is required',
            'question_7.required' => 'Field is required',
            'question_8.required' => 'Field is required',
            'question_9.required' => 'Field is required',
            'question_10.required' => 'Field is required',
            'question_11.required' => 'Field is required',
            'question_12.required' => 'Field is required',
            'question_13.required' => 'Field is required',
            'question_14.required' => 'Field is required',
            'question_15.required' => 'Field is required',
            'question_16.required' => 'Field is required',
            'question_17.required' => 'Field is required',
            'question_18.required' => 'Field is required',
            'question_19.required' => 'Field is required',
            'question_20.required' => 'Field is required',
            'question_21.required' => 'Field is required',
            'question_22.required' => 'Field is required',
            'question_23.required' => 'Field is required',
            'question_24.required' => 'Field is required',
            'question_25.required' => 'Field is required',
            'question_26.required' => 'Field is required',
            'question_27.required' => 'Field is required',

        ]

    );
        if($validate->fails()){
            return back()
                ->withErrors($validate)
                ->withInput();
        }
        $intake = Intake::create([
            'user_id' => $user_id,
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
            'age' => $request->age,
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

    public function view(Intake $intake){
        $records = Intake::where('id', $intake->id)
            ->with(['answers' => function ($query) {

                $query->with('question');
            }])
            ->first();

        return view('client.intakes.view', compact('intake'));
    }

    public function edit(Intake $intake){
       return view('client.intakes.edit', compact('intake'));
    }

    public function update(Request $request,$id){
        $user_id = Auth::guard('web')->user()->id;

        $intake = Intake::where('id',$id)
            ->update([
            'user_id' => $user_id,
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

        $delete_intake_ans = IntakeAnswer::where('intake_id',$id)->delete();
        if($delete_intake_ans){
            foreach ($request->toArray() as $key => $value) {

                if (strpos($key, 'question') !== false) {

                    $question_id = filter_var($key, FILTER_SANITIZE_NUMBER_INT);

                    if (gettype($value) == "array") {

                        for ($i = 0; $i < count($value); $i++) {

                            IntakeAnswer::create([
                                'intake_id' => $id,
                                'question_id' => (int)$question_id,
                                'answer' => $value[$i]
                            ]);
                        }
                    } else {

                        IntakeAnswer::create([
                            'intake_id' => $id,
                            'question_id' => (int)$question_id,
                            'answer' => $value
                        ]);
                    }
                }
            }
            return back()->with('success', 'Participant Intake form updated successfully.');
        }
        else{
            return back()->with('error', 'Fail to Update Participant Intake form.');
        }

    }
}
