<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $userAttributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8)],
        ]);
        //attempt to login
        if (! Auth::attempt($userAttributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.'
            ]);
        }
        //regenerate session token
        $request->session()->regenerate();
        //redirect
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
