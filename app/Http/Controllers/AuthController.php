<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Nexmo\Laravel\Facade\Nexmo;

class AuthController extends Controller
{
    public function registrationForm() {
        return view('register');
    }

    public function loginForm() {
        return view('login');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        $token = Str::random(24);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => $token
        ]);
        return redirect('/login')->with('Message', 'Account has been created.');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'email|required',
            'password' => 'string|required',
        ]);
        $login = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        if(!$login) {
            return back()->with('Error', 'Invalid credentials!');
        }
        return redirect('/dashboard');
    }

    
    public function logout(Request $request){
        auth()->logout();
        return redirect('/');
    }
}
