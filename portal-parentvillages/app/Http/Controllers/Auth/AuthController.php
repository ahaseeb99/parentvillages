<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Employee
};

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }

    public function store(Request $request) {
        
        $attributes = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($attributes);
        
        return response()->json([
            'status' => 200,
            'message' => 'You are registered successfully.'
        ]);
    }

    public function check(Request $request) {

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if ($request->type == "client") {
            
            if (Auth::guard('web')->attempt($credentials)) {

                $request->session()->regenerate();
     
                return response()->json([
                    'status' => 200,
                    'type' => 'client',
                    'message' => 'You are logged In successfully.'
                ]);
            }
        }

        if ($request->type == "employee") {
            
            if (Auth::guard('employee')->attempt($credentials)) {

                $request->session()->regenerate();
     
                return response()->json([
                    'status' => 200,
                    'type' => 'employee',
                    'message' => 'You are logged In successfully.'
                ]);
            }
        }

        return response()->json([
            'status' => 500,
            'message' => 'Something went wrong please try again.'
        ]);

    }

    public function destroyClient() {
        
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }

    public function destroyEmployee() {

        Auth::guard('employee')->logout();
        return redirect()->route('login');
    }
}
