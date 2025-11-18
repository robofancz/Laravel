<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Password::min(6), 'confirmed'], // looks for password_confirmation field 
        ]);
        // create user in database
        $user = User::create($attributes);
        // log in the user
        Auth::login($user);
        // redirect somewhere
        return redirect('/');

        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        // Here you would typically create the user and log them in
        // User::create([...]);
        // Auth::login($user);

        return redirect('/'); // Redirect to a desired location after registration
    }
}
