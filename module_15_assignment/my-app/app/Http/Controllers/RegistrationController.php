<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller{
    public function showForm() {
        return view('registration.form');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Perform registration logic using the validated data

        // Redirect or return a response
    }
}
