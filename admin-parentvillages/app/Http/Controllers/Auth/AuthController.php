<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function check(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('web')->attempt($credentials)) {

            $request->session()->regenerate();

            return response()->json([
                'status' => 200,
                'message' => 'You are logged In successfully.'
            ]);
        }

        return response()->json([
            'status' => 500,
            'message' => 'Something went wrong please try again.'
        ]);
    }

    public function destroy()
    {
        Auth::logout();

        return back();
    }
}
