<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;


class ContactFormController extends Controller
{
    public function handleContactForm(Request $request)
    {

        // If they don't answer the robot question correctly
        if($request->robotQuestion === '7') {

            // Form Validation
            $validated = $request->validate([
                'name' => ['required'],
                'email' => ['required', 'email'],
                'phone' => ['nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
                'subject'=> ['required'],
                'message' => ['required']
            ]);
                
            // Store details in database
            Contact::create($request->all());

            Mail::send('layouts.mail', array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'subject' => $request->get('subject'),
                'user_query' => $request->get('message'),
            ), function($message) use ($request) {
                $message->from($request->email);
                $message->to('cameronconway3@outlook.com', 'Admin')->subject($request->get('subject'));
            });
            
            // Return to /contact with success message
            return back()->with('success', 'We have recieved your email, thank you for contacting Western Farm Commercials.');

        } else {

            // Return to /contact with robotError
            return back()->with('robotError', 'You did not pass the robot check, please try again.');

        }
        

    }
}
