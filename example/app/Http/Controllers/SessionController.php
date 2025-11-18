<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        // Validate
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        // Attempt to authenticate and log in the user
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials are incorrect.',
            ]);
        }
        Auth::attempt($attributes);

        // If authentication is successful, regenerate the session to prevent fixation attacks
        request()->session()->regenerate();

        // redirect somewhere
        return redirect('/');

    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
