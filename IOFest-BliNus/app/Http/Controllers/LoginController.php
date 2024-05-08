<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function redirect()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);

        try{
            if(Auth::attempt($request->only('email', 'password')))
            {
                return redirect()->intended('home');
            } else {
                return redirect()->back()->withInput()->withErrors(['failed' => 'Login info anda invalid']);
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['failed' => 'Terjadi kesalahan sistem: ' . $e->getMessage()]);
        }
    }
}
