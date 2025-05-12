<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (! Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'The credentials do not match our records'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy(){
        Auth::logout();

        return redirect('/login');
    }
}
