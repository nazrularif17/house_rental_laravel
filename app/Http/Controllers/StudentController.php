<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function student(){
        return view('student.student');
    }
    public function studentregister(){

        $attributes = request()->validate([
            'customID' => 'required',
            'name' => 'required',
            'phoneNo' => 'required|digits:11',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'gender' => 'required',
            'status' => 'required',
        ]);

        $user =User::create([
            'customID' => $attributes["customID"],
            'role' => 'student',
            'name' => $attributes["name"],
            'phoneNo' => $attributes["phoneNo"],
            'email' => $attributes["email"],
            'password' => Hash::make($attributes['password']),
            'gender' => $attributes["gender"],
            'status' => $attributes["status"],
        ]);
        Auth::login($user);
        return redirect()->route('index');
    }
    public function studentlogin(Request $request){
        $request->validate([
            'customID' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('customID', 'password');
        if (Auth::attempt($credentials) && Auth::user()->role === 'student') {
            return redirect()->intended('index');
        } else{
            return redirect('student')->with('error','Login details are not valid');
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('student');
    }
    public function index(){
        return view('student.index');
    }
}
