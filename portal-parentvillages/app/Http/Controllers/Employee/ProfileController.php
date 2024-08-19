<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use App\Models\Employee;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::guard('employee')->user();
        $name_split = Str::ucsplit(Auth::guard('employee')->user()->name);
        return view('employee.profile.index',compact('user','name_split'));
    }

    public function password_index(){
        $user = Auth::guard('employee')->user();
        return view('employee.profile.change_password',compact('user'));
    }
    
    public function passwordEdit(Request $request, Employee $user){

        $validated = Validator::make($request->all(),[
            'current_password' => 'required',
            'password' => 'required|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            'password_confirmation' => 'required',
            ],
            [
                'password.regex' => 'Password Must Containe One Upercase alphabet letter, One Small alphabet letter , One Special character , atlest 8 characters long',
            ]
        );
    
        if ($validated->fails()) {
            return back()
            ->withErrors($validated)
            ->withInput();
        }

        if (! Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password Does not match.');    
        }
        $user->update([
            'password' => Hash::make($request->password)
        ]);
        
        return back()->with('success', 'Password change successfully.');
        
    }

    public function profileEdit(Request $request, Employee $user){
    
        $name = str($request->first_name)->append(" ".$request->last_name);
        $current_time = Carbon::now();
        $formatted_date = $current_time->format('Y-m-d-h-i-s');
        $user_name = str()->slug($name);
        $avatar_store = $user->avatar;
        $validated = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);

        if ($validated->fails()) {
            return back()
            ->withErrors($validated)
            ->withInput();
        }
        
        if($request->file('profile_image') != null){
            $avatar_extension = $request->file('profile_image')->extension();
            $avatar_formated_file = $formatted_date . '-' . $user_name . '.' . $avatar_extension;
            $avatar_store = $request->file('profile_image')->storeAs('employee/avatar', $avatar_formated_file, 'public');
        }
        

       
        $user->update([
            'name' => $name,
            'email' => $request->email,
            'avatar' => $avatar_store
        ]);
        return back()->with('success', 'Profile change successfully.');

    }
}
