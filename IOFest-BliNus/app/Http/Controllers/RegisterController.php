<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function redirect()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|max:255',
            'lastname' => 'max:255',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Buat data pengguna baru
            $user = new User();
            $user->name = $request->firstname . ' ' . $request->lastname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect('login')->withSuccess('Akun anda telah berhasil dibuat');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['failed' => 'Ada yang error: ' . $e->getMessage()]);
        }
    }
}
