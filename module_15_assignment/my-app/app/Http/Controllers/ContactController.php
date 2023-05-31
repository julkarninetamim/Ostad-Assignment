<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Retrieve the form data
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Send an email to the predefined address
        Mail::raw($message, function ($message) use ($name, $email) {
            $message->to('contact@example.com')
                    ->subject('New Contact Form Submission')
                    ->from($email, $name);
        });

        // Redirect back with success message
        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
