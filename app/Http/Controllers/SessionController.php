<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function destroy()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Goodbye..!');
    }

    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        $checkuser = request()->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($checkuser)) {
            return redirect('/')->with('success', 'Welcom Back!');
        }
        throw ValidationException::withMessages([
            'email' => 'Your Provided credentials could not be verified',
        ]);

    }
}
