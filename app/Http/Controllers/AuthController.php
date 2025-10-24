<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/')
            ->with('message', "Your registration was successful.");
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $creds = $request->except("_token");

        if (Auth::attempt($creds)) {
            return redirect('/dashboard');
        } else {
            return back()
                ->withInput()
                ->with('message', "Invalid credentials!");
        }
    }

    public function logout() {
        Auth::logout();

        return redirect('auth/login')
            ->with('Logged out successfuly!');
    }
}
