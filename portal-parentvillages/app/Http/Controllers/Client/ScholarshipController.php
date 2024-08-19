<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\Scholarship;
use App\Models\UserApplication;
use App\Models\UserApplicationAnswer;
use App\Models\UserApplicationGuardian;
use App\Models\UserApplicationReferences;

class ScholarshipController extends Controller
{
    public function index()
    {
        $total_scholarships = Scholarship::all()->count();
        $records = Scholarship::all();
        return view('client.scholarships.index', compact('total_scholarships', 'records'));
    }

    public function view(Scholarship $scholarship)
    {
        return view('client.scholarships.view', compact('scholarship'));
    }

    public function create(Scholarship $scholarship)
    {

        return view('client.scholarships.create', compact('scholarship'));
    }

    public function store(Request $request)
    {

        $current_time = Carbon::now();
        $formatted_date = $current_time->format('Y-m-d');
        $applicant_name = str()->slug($request['name']);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
            'phone' => 'required',
            'award_letter' => 'required|mimes:pdf,doc',
            'transcript_letter' => 'required|mimes:pdf,doc',
            'high_school' => 'required',
            'plan' => 'required',
            'acceptance_letter' => 'required|mimes:pdf,doc',

            // "guardian_one" => 'required_array_keys:[name]',
            // 'guardian_one["name"]' => 'required',
            
            "guardian_one['email']" => 'required',
            "guardian_one['phone']" => 'required',
            "guardian_one['address']" => 'required',
            "guardian_one['associate_degree']" => 'required',
           
            "guardian_two['name']" => 'required',
            "guardian_two['email']" => 'required',
            "guardian_two['phone']" => 'required',
            "guardian_two['address']" => 'required',
            "reference_one['name']" => 'required',
            "reference_one['email']" => 'required',
            "reference_one['phone']" => 'required',
            "reference_one['relationship']" => 'required',
            "reference_one['relation_length']" => 'required',
            "reference_one['reference_letter']" => 'required|mimes:pdf,doc',
            "reference_two['name']" => 'required',
            "reference_two['email']" => 'required',
            "reference_two['phone']" => 'required',
            "reference_two['relationship']" => 'required',
            "reference_two['relation_length']" => 'required',
            "reference_two['reference_letter']" => 'required|mimes:pdf,doc',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'required|mimes:pdf,doc',

        ]);

        if ($validator->fails()) {
            // dd($request->guardian_one["name"]);
            dd($validator);
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $award_letter_extension = $request->file('award_letter')->extension();
        $award_letter_formated_file = $formatted_date . '-' . $applicant_name . '.' . $award_letter_extension;
        $award_letter_store = $request->file('award_letter')->storeAs('client/scholarships/award-letters', $award_letter_formated_file, 'public');

        $transcript_letter_extension = $request->file('transcript_letter')->extension();
        $transcript_letter_formated_file = $formatted_date . '-' . $applicant_name . '.' . $transcript_letter_extension;
        $transcript_letter_store = $request->file('transcript_letter')->storeAs('client/scholarships/transcripts', $transcript_letter_formated_file, 'public');

        $acceptance_letter_extension = $request->file('acceptance_letter')->extension();
        $acceptance_letter_formated_file = $formatted_date . '-' . $applicant_name . '.' . $acceptance_letter_extension;
        $acceptance_letter_store = $request->file('acceptance_letter')->storeAs('client/scholarships/acceptance-letters', $acceptance_letter_formated_file, 'public');

        $user_application = UserApplication::create([
            'user_id' => Auth::guard('web')->user()->id,
            'scholarship_id' => $request->scholarship_id,
            'name' => $request->name,
            'email' => $request->email,
            'date' => $request->date,
            'address' => $request->address,
            'appartment' => $request->appartment,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'phone' => $request->phone,
            'award_letter' => $award_letter_store,
            'transcript_letter' => $transcript_letter_store,
            'high_school' => $request->high_school,
            'plan' => $request->plan,
            'acceptance_letter' => $acceptance_letter_store,
        ]);

        $guardians = [
            $request->guardian_one,
            $request->guardian_two
        ];

        for ($i = 0; $i < count($guardians); $i++) {

            UserApplicationGuardian::create([
                'user_application_id' => $user_application->id,
                'name' =>  $guardians[$i]["'name'"],
                'email' =>  $guardians[$i]["'email'"],
                'phone' =>  $guardians[$i]["'phone'"],
                'address' =>  $guardians[$i]["'address'"],
                'high_school_diploma' =>  isset($guardians[$i]["'high_school_diploma'"]) ?  true : false,
                'associate_degree' =>  isset($guardians[$i]["'associate_degree'"]) ?  true : false,
                'bachelor_degree' =>  isset($guardians[$i]["'bachelor_degree'"]) ?  true : false,
                'master_degree' => isset($guardians[$i]["'master_degree'"]) ?  true : false,
                'doctoral_degree' => isset($guardians[$i]["'doctoral_degree'"]) ?  true : false
            ]);
        }

        $references = [
            $request->reference_one,
            $request->reference_two,
        ];

        for ($i = 0; $i < count($references); $i++) {

            $reference_letter = $references[$i]["'reference_letter'"];
            $reference_letter_extension = $reference_letter->extension();
            $reference_letter_formated_file = $formatted_date . '-' . str()->slug($references[$i]["'name'"]) . '.' . $reference_letter_extension;
            $acceptance_letter_store = $references[$i]["'reference_letter'"]->storeAs('client/scholarships/reference-letters', $reference_letter_formated_file, 'public');

            UserApplicationReferences::create([
                'user_application_id' => $user_application->id,
                'name' =>  $references[$i]["'name'"],
                'email' =>  $references[$i]["'email'"],
                'phone' =>  $references[$i]["'phone'"],
                'relation' =>  $references[$i]["'relationship'"],
                'length' => $references[$i]["'relation_length'"],
                'letter' => $acceptance_letter_store,
            ]);
        }

        $essay_extension = $request->file('question_4')->extension();
        $essay_formated_file = $formatted_date . '-' . $applicant_name . '.' . $essay_extension;
        $essay_store = $request->file('question_4')->storeAs('client/scholarships/essays', $essay_formated_file, 'public');

        for ($i = 2; $i < 5; $i++) {

            $array = $request->toArray();

            if ($i != 4) {

                UserApplicationAnswer::create([
                    'scholarship_question_id' => $i,
                    'user_application_id' => 2,
                    'answer' => $array['question_' . $i]
                ]);
            } else {

                UserApplicationAnswer::create([
                    'scholarship_question_id' => $i,
                    'user_application_id' => 2,
                    'answer' => $essay_store
                ]);
            }
        }

        return back()->with('success', 'Scholarship application submitted successfully.');
    }
}