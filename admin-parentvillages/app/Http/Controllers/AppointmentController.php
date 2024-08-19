<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function index()
    {
        $total_appointments = UserAppointment::all()->count();

        return view('appointments.index', compact('total_appointments'));
    }

    public function create()
    {
        $users = User::all();

        return view('appointments.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'link' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        UserAppointment::create([
            'user_id' => $request->user_id,
            'link' => $request->link
        ]);

        return redirect()->route('appointments.index')->with('success', 'Appointment added successfully.');
    }

    public function edit(UserAppointment $appointment)
    {
        $users = User::all();
        return view('appointments.edit', compact('appointment', 'users'));
    }

    public function update(UserAppointment $appointment, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'link' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $appointment->update([
            'user_id' => $request->user_id,
            'link' => $request->link
        ]);

        return redirect()->route('appointments.index')->with('success', 'Appointment updated successfully.');
    }

    public function destroy(UserAppointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index')->with('error', 'Appointment deleted successfully.');
    }
}