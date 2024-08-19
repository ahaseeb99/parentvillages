<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\API\Appointment;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\UserAppointment;

class AppointmentController extends Controller
{
    public function index(){
        $user_id = Auth::guard('web')->user()->id;
        $total_records = UserAppointment::where('user_id',$user_id)->count();
        return view('client.appointments.index',compact('total_records'));
    }

    public function create(){
        return view('client.appointments.create');
    }

    public function store(Request $request){
        $user_id = Auth::guard('web')->user()->id;
        $validator=Validator::make($request->all(),[
            'calendy_link' => 'required',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $appointment = UserAppointment::create([
            'user_id' => $user_id,
            'link' => $request->calendy_link
        ]);
        return back()->with('success', 'Appointment has been submitted successfully.');  
    }

    public function view(){
        $user_id = Auth::guard('web')->user()->id;

        $records = UserAppointment::where('user_id', $user_id)->first();
        return view('client.appointments.view',compact('records'));
    }

    public function edit(UserAppointment $appointment){

        return view('client.appointments.edit',compact('appointment'));
    }

    public function update(Request $request,$id){

        $user_id = Auth::guard('web')->user()->id;

        $user_appointment = UserAppointment::where('id',$id)
            ->update([
            'user_id' => $user_id,
            'link' => $request->calendy_link,
        ]);
        if($user_appointment){
            return back()->with('success', 'Link updated successfully.');
        }
        else{
            return back()->with('error', 'Fail to Update Link.');
        }
    }

    public function destroy(UserAppointment $appointment){
        $appointment->delete();
        
        return back()->with('success', 'Appointment deleted successfully.');
    }
}
