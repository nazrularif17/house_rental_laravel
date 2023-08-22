<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.admin');
    }
    public function adminregister(){

        $attributes = request()->validate([
            'customID' => 'required',
            'name' => 'required',
            'phoneNo' => 'nullable|digits:11',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'customID' => $attributes["customID"],
            'role' => 'admin',
            'name' => $attributes["name"],
            'email' => $attributes["email"],
            'password' => Hash::make($attributes['password']),
        ]);
        Auth::login($user);
        return redirect()->route('dashboard');
    }
    public function adminlogin(Request $request){
        $request->validate([
            'customID' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('customID', 'password');
        if (Auth::attempt($credentials) && Auth::user()->role === 'admin') {
            return redirect()->intended('dashboard');
        } else{
            return redirect('admin')->with('error','Login details are not valid');
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('student');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
}
