<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name'     => 'required|max:255|min:3',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email'    => 'required|max:255|min:3|unique:users,email',
            'password' => 'required|max:255|min:3',
        ]);

        $user = User::create($attributes);
        // Auth()->login($user);
        Auth::login($user);
        return redirect('login')->with('success', 'you has been created.');
    }
}
