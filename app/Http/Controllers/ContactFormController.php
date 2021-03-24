<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactFormController extends Controller
{
    public function handleContactForm(Request $request)
    {
        
        // Form Validation
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10'],
            'subject'=> ['required'],
            'message' => ['required']
        ]);

        dd("working");

    }
}
