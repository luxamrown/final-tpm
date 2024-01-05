<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');
    
        if (Auth::attempt($credentials)){
            $user = Auth::user();
            $userWithData = $user->load('group');
            // if($user->isAdmin)
            // {
            //     return redirect()->intended('/adminpanel')->with('user', $userWithData);
            // }
            //return redirect()->intended('/dashboard')->with('user', $userWithData);
            return response()->json(['user' => $userWithData]);
        }
    
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended('/')->with('message', 'Logged out successfully');
    }
}
